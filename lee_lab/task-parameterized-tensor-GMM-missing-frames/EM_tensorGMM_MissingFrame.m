function model = EM_tensorGMM_MissingFrame(Data, V, model)
% Training of a task-parameterized Gaussian mixture model (GMM) with an expectation-maximization (EM) algorithm. 
% The approach allows the modulation of the centers and covariance matrices of the Gaussians with respect to 
% external parameters represented in the form of candidate coordinate systems. Partially availability of the 
% external task parameters during the demonstration is also taken into account.
%
% Authors:	Tohid Alizadeh, Sylvain Calinon, 2014
%           http://programming-by-demonstration.org/SylvainCalinon
%
% This source code is given for free! In exchange, we would be grateful if you cite  
% the following reference in any academic publication that uses this code or part of it: 
%
% @inproceedings{Calinon14ICRA,
%   author="Alizadeh, T. and Calinon, S. and Caldwell, D. G.",
%   title="Learning from demonstrations with partially observable task parameters",
%   booktitle="Proc. {IEEE} Intl Conf. on Robotics and Automation ({ICRA})",
%   year="2014",
%   month="May-June",
%   address="Hong Kong, China",
%   pages="3309--3314"
% }

%Parameters of the EM algorithm
nbMinSteps = 5; %Minimum number of iterations allowed
nbMaxSteps = 100; %Maximum number of iterations allowed
maxDiffLL = 1E-4; %Likelihood increase threshold to stop the algorithm
nbData = size(Data,3);

diagRegularizationFactor = 1E-4;

for nbIter=1:nbMaxSteps
  fprintf('.');
  %E-step
  [L, GAMMA] = computeGamma(Data, V, model); %See 'computeGamma' function below 
  %M-step
  for i=1:model.nbStates 
    %Update Priors
    model.Priors(i) = sum(sum(GAMMA(i,:))) / nbData;
    for m=1:model.nbFrames
      nbDataObs = sum(V(m,:));
      %Selecting the available data for each frame
      GAMMA2 = GAMMA(:,V(m,:)==1) ./ repmat(sum(GAMMA(:,V(m,:)==1),2),1,nbDataObs);
      %Matricization/flattening of tensor
      DataMat(:,:) = Data(:,m,V(m,:)==1);
      %Update Mu 
      model.Mu(:,m,i) = DataMat * GAMMA2(i,:)';
      %Update Sigma (regularization term is optional) 
      DataTmp = DataMat - repmat(model.Mu(:,m,i),1,nbDataObs);
      model.Sigma(:,:,m,i) = DataTmp * diag(GAMMA2(i,:)) * DataTmp' + eye(model.nbVar) * diagRegularizationFactor;
    end
  end
  %Compute average log-likelihood 
  LL(nbIter) = sum(log(sum(L,1))) / size(L,2);
  %Stop the algorithm if EM converged (small change of LL)
  if nbIter>nbMinSteps
    if LL(nbIter)-LL(nbIter-1)<maxDiffLL || nbIter==nbMaxSteps-1
      disp(['EM converged after ' num2str(nbIter) ' iterations.']); 
      return;
    end
  end
end
disp(['The maximum number of ' num2str(nbMaxSteps) ' EM iterations has been reached.']); 
end

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
function [L, GAMMA] = computeGamma(Data, V, model)
  nbData = size(Data, 3);
  L = ones(model.nbStates, nbData);
  GAMMA0 = zeros(model.nbStates, model.nbFrames, nbData);
  for m=1:model.nbFrames
    DataMat(:,:) = Data(:,m,V(m,:)==1); %Matricization/flattening of tensor by selecting available frames
    for i=1:model.nbStates
      GAMMA0(i,m,V(m,:)==1) = model.Priors(i) * gaussPDF(DataMat, model.Mu(:,m,i), model.Sigma(:,:,m,i));
      L(i,:) = L(i,:) .* squeeze(GAMMA0(i,m,:))'; 
    end
  end
  %Normalization
  GAMMA = L ./ repmat(sum(L,1)+realmin,size(L,1),1);
end




