function demo01
% Demonstration a task-parameterized probabilistic model encoding movements in the form of virtual spring-damper 
% systems acting in multiple frames of reference. Each candidate coordinate system observes a set of 
% demonstrations from its own perspective. When one task parameter is not observable, the corresponding part in 
% the data will be missing (third order sparse tensor data) and this information is taken into account in the 
% learning and reproduction parts. 
% The task is a via point passing task, starting from one point, passing through a second point and ending in a 
% third point. A frame of references (task parameters) is attached to each via point, complemented by a fixed 
% frame of reference at the origin. 
%
% Author:	Tohid Alizadeh, Sylvain Calinon, 2014
%         http://programming-by-demonstration.org/SylvainCalinon
%
% This source code is given for free! In exchange, we would be grateful if you cite  
% the following reference in any academic publication that uses this code or part of it: 
%
% @inproceedings{Alizadeh14ICRA,
%   author="Alizadeh, T. and Calinon, S. and Caldwell, D. G.",
%   title="Learning from demonstrations with partially observable task parameters",
%   booktitle="Proc. {IEEE} Intl Conf. on Robotics and Automation ({ICRA})",
%   year="2014",
%   month="May-June",
%   address="Hong Kong, China",
%   pages="3309--3314"
% }

%% Parameters of the model
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
model.nbStates = 5; %Number of Gaussians in the GMM
model.nbFrames = 4; %Number of candidate frames of reference
model.nbVar = 3; %Dimension of the datapoints in the dataset (here: t,x1,x2)
model.dt = 0.01; %Time step 
model.kP = 200; %Stiffness gain (for DS-GMR)
model.kV = 15; %Damping gain (for DS-GMR)

%% Load 3rd order tensor data
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
disp('Load 3rd order tensor data...');
% The MAT file contains a structure 's' with multiple demonstrations. 's(n).Data' is a matrix data for 
% sample n (with 's(n).nbData' datapoints). 's(n).p(m,t).b' and 's(n).p(m,t).A' contain the position and 
% orientation of the m-th candidate coordinate system for this demonstration (static in this example). 
% 'Data' contains the observations in the different frames. It is a 3rd order sparse tensor of dimension 
% D x P x N, with D=3 the dimension of a datapoint, P=4 the number of candidate frames, and N=100x5 the number 
% of datapoints in a trajectory (100) multiplied by the number of demonstrations (5). s(n).V is a binary matrix  
% of dimension P x N with P=4 and N=100 representing the availability of different frames for each of the 
% demonstration samples. V(m,t)=0 means that Frame m is not observable at time step t.
% Matrix V is a concatenation of the s(n).V matrices, with dimension 4x500. In the provided example, task 
% parameters are observable for all the demonstration (the availability of the task parameters is still taken 
% into account in the learning phase), and are partially observable during reproduction. 
load(['data/task_param_data.mat']);

%% Tensor GMM learning
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
fprintf('Parameters estimation of tensor GMM with EM:');
model = init_tensorGMM_timeBased_MissingFrame(Data, V, model); %Initialization 
model = EM_tensorGMM_MissingFrame(Data, V, model);

%% Reproduction for the task parameters used to train the model
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
disp('Reproductions ...');
DataIn = s(1).Data(1,:);
for n=1:nbSamples
  r(n) = reproduction_DSGMR_MissingFrame(DataIn, model, s(n), s(n).Data0(2:3,1), s(n).V);
end

%% Reproduction for new task parameters with missing task parameters
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
disp('Reproductions with missing task parameters...');
V = ones(model.nbFrames, s(1).nbData);
V(3,:) = 0; %3rd frame missing
for n=1:nbSamples
  rM(n) = reproduction_DSGMR_MissingFrame(DataIn, model, s(n), s(n).Data0(2:3,1), V);
end

%% Plots
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
figure('position',[10,10,1200,500]);
xx = round(linspace(1,64,nbSamples));
clrmap = colormap('jet');
clrmap = min(clrmap(xx,:),.95);
limAxes = [-.1 1.1 -.1 1.1];
colFrames = [[.9,.1,.1];[.1,.7,.1];[.1,.1,.9];[.9,.5,.1]];

%Demonstrations
subplot(131); hold on; box on; title('Demonstrations');
for n=1:nbSamples
  %Plot frames
  for m=1:model.nbFrames
    plot([s(n).p(m).b(2) s(n).p(m).b(2)+s(n).p(m).A(2,3)], [s(n).p(m).b(3) s(n).p(m).b(3)+s(n).p(m).A(3,3)], '-','linewidth',6,'color',colFrames(m,:));
    plot(s(n).p(m).b(2), s(n).p(m).b(3),'.','markersize',30,'color',colFrames(m,:)-[.05,.05,.05]);
  end
  %Plot trajectories
  plot(s(n).Data0(2,1), s(n).Data0(3,1),'.','markersize',12,'color',clrmap(n,:));
  plot(s(n).Data0(2,:), s(n).Data0(3,:),'-','linewidth',1.5,'color',clrmap(n,:));
  axis(limAxes); axis square; set(gca,'xtick',[],'ytick',[]);
end

%Reproductions
subplot(132); hold on; box on; title('Reproductions');
for n=1:nbSamples
  %Plot frames
  for m=1:model.nbFrames
    plot(r(n).p(m,1).b(2), r(n).p(m,1).b(3),'.','markersize',30,'color',colFrames(m,:)-[.05,.05,.05]);
  end
  %Plot Gaussians
  plotGMM(r(n).Mu(2:3,:,:,1), r(n).Sigma(2:3,2:3,:,:,1), [.7 .7 .7]);
  %Plot trajectories
  plot(r(n).Data(2,1), r(n).Data(3,1),'.','markersize',12,'color',clrmap(n,:));
  plot(r(n).Data(2,:), r(n).Data(3,:),'-','linewidth',1.5,'color',clrmap(n,:));
  axis(limAxes); axis square; set(gca,'xtick',[],'ytick',[]);
end

%Reproductions with missing frames
subplot(133); hold on; box on; title('Reproductions with missing frames');
for n=1:nbSamples
  %Plot Gaussians
  plotGMM(rM(n).Mu(2:3,:,:,1), rM(n).Sigma(2:3,2:3,:,:,1), [.7 .7 .7]);
  %Plot frames
  for m=1:model.nbFrames
    if V(m,1)==1
      plot(rM(n).p(m).b(2), rM(n).p(m).b(3), '.','markersize',30,'color',colFrames(m,:)-[.05,.05,.05]);
    end
  end
  %Plot trajectories
  plot(rM(n).Data(2,1), rM(n).Data(3,1),'.','markersize',12,'color',[.2 .2 .2]);
  plot(rM(n).Data(2,:), rM(n).Data(3,:),'-','linewidth',1.5,'color',[.2 .2 .2]);
  axis(limAxes); axis square; set(gca,'xtick',[],'ytick',[]);
end

%print('-dpng','tensorGMMmissingFrame.png');

