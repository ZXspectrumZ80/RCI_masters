function model = init_tensorGMM_timeBased_MissingFrame(Data, V, model)
% Author:	Sylvain Calinon, 2014
%         http://programming-by-demonstration.org/SylvainCalinon
%
%  Data:  Data as third order array with dimension nbVar x nbFrames x nbData
%  V:     A matrix including the availability of the task parameters for each
%         data point, of dimension nbFrames x nbData
%  model: The structure containing the mixture model parameters

diagRegularizationFactor = 1E-4; 

DataAll = Data(:,V==1);   %Extracting the data for which the task parameters are avaialble
TimingSep = linspace(min(DataAll(1,:)), max(DataAll(1,:)), model.nbStates+1);
Mu = zeros(model.nbFrames*model.nbVar, model.nbStates);
Sigma = zeros(model.nbFrames*model.nbVar, model.nbFrames*model.nbVar, model.nbStates);
for i=1:model.nbStates
  model.Priors(i) = 0;  
  for m=1:size(V,1)
    DataAll2 = squeeze(Data(:,m,V(m,:)==1)); %Getting the data in which the corresponding task parameter is available
    idtmp = find(DataAll2(1,:)>=TimingSep(i) & DataAll2(1,:)<TimingSep(i+1));
    Mu((m-1)*model.nbVar+1:m*model.nbVar,i) = mean(DataAll2(:,idtmp),2);
    Sigma((m-1)*model.nbVar+1:m*model.nbVar,(m-1)*model.nbVar+1:m*model.nbVar,i) = cov(DataAll2(:,idtmp)') + eye(size(DataAll2,1))*diagRegularizationFactor;
  end
  model.Priors(i) = model.Priors(i) + length(idtmp);  %Only the available task parameters are considered for estimation of the priors
end
model.Priors = model.Priors / sum(model.Priors);

%Reshape the GMM parameters into a 3rd order tensor 
for m=1:model.nbFrames
  for i=1:model.nbStates
    model.Mu(:,m,i) = Mu((m-1)*model.nbVar+1:m*model.nbVar,i); 
    model.Sigma(:,:,m,i) = Sigma((m-1)*model.nbVar+1:m*model.nbVar,(m-1)*model.nbVar+1:m*model.nbVar,i); 
  end
end

