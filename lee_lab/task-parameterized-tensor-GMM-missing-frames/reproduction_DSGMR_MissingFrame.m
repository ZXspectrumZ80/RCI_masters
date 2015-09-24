function r = reproduction_DSGMR_MissingFrame(DataIn, model, r, currPos, V)
% Reproduction by using the task-parameterized DS-GMR model. The DS-GMR model is a statistical dynamical system  
% approach to learn and reproduce movements with a superposition of virtual spring-damper systems
% retrieved by Gaussian mixture regression (GMR). This version of the code supports partially observable frames. 
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

nbData = size(DataIn,2);
in = 1:size(DataIn,1);
out = in(end)+1:model.nbVar;
nbVarOut = length(out);

%GMM products 
for t=1:nbData
  for i=1:model.nbStates 
    SigmaTmp = zeros(model.nbVar);
    MuTmp = zeros(model.nbVar,1);
    for m=1:model.nbFrames 
      if (V(m,t)==1)
        MuP = r.p(m,t).A * model.Mu(:,m,i) + r.p(m,t).b; 
        SigmaP = r.p(m,t).A * model.Sigma(:,:,m,i) * r.p(m,t).A'; 
        SigmaTmp = SigmaTmp + inv(SigmaP);
        MuTmp = MuTmp + SigmaP\MuP; 
      end
    end
    r.invSigma(:,:,i,t) = SigmaTmp;
    r.Sigma(:,:,i,t) = inv(SigmaTmp);
    r.detSigma(i,t) = det(r.Sigma(:,:,i,t));
    r.Mu(:,i,t) = r.Sigma(:,:,i,t) * MuTmp;
    r.invSigmaIn(:,:,i,t) = inv(r.Sigma(in,in,i,t));
    r.detSigmaIn(i,t) = det(r.Sigma(in,in,i,t));
  end
end

%GMR
for t=1:nbData
  %Compute activation weight
  for i=1:model.nbStates
    %r.H(i,t) = model.Priors(i) * gaussPDF(DataIn(:,t), r.Mu(in,i,t), r.Sigma(in,in,i,t)); 
    r.H(i,t) = model.Priors(i) * gaussPDFfast(DataIn(:,t), r.Mu(in,i,t), r.invSigmaIn(:,:,i,t), r.detSigmaIn(i,t));
  end
  r.H(:,t) = r.H(:,t)/sum(r.H(:,t));
  %Evaluate the current target 
  currTar = zeros(nbVarOut,1);
  currSigma = zeros(nbVarOut,nbVarOut); 
  for i=1:model.nbStates
    tarTmp = r.Mu(out,i,t) + r.Sigma(out,in,i,t)/r.Sigma(in,in,i,t) * (DataIn(:,t)-r.Mu(in,i,t)); 
    SigmaTmp = r.Sigma(out,out,i,t) - r.Sigma(out,in,i,t)/r.Sigma(in,in,i,t) * r.Sigma(in,out,i,t);
    currTar = currTar + r.H(i,t) * tarTmp; 
    currSigma = currSigma + r.H(i,t) * SigmaTmp; %r.H(i,t)^2
  end
  r.currTar(:,t) = currTar; 
  r.currSigma(:,:,t) = currSigma;
end

%Reproduction with spring-damper system
x = currPos;
dx = zeros(nbVarOut,1);
for t=1:nbData
  L = [eye(nbVarOut)*model.kP, eye(nbVarOut)*model.kV];
  %Compute acceleration
  ddx =  -L * [x-r.currTar(:,t); dx];
  %Update velocity and position
  dx = dx + ddx * model.dt;
  x = x + dx * model.dt;
  %Log data
  r.Data(:,t) = [DataIn(:,t); x]; 
end
