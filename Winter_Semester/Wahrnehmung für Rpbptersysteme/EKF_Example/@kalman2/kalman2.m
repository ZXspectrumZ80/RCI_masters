classdef kalman2
    %KALMAN1 EKF-Demo für ARP-Vorlesung
    %   Detailed explanation goes here
    
    properties
        %%% Parameter
        R % Kovarianmatrix des Systemrauschens
        Q % Kovarianzmatrix des Messrauschens
        
        %%% Zustandsvariablen
        Sigma     % korrigierte Zustandskovarianzmatrix
        x         % korrigierter Zustand
        Sigma_Praed % prädizierte Zustandskovarianzmatrix
        x_Praed     % prädizierter Zustand
        
        %%% Modelparameter
        statelen % Size of the state vector
        measlen % Size of the measruement vector
        sensor1Pos
        sensor2Pos
    end
    
    methods
        %%% Konstructor
        function obj = kalman2(R,Q,statelen,measlen, sensor1Pos, sensor2Pos)
            obj.R = R;
            obj.Q = Q;
            obj.statelen = statelen;
            obj.measlen = measlen;
            obj.sensor1Pos = sensor1Pos;
            obj.sensor2Pos = sensor2Pos;
        end
        
        %%% Initialisierung der Zustandsvariablen des Filters
        function obj = init(obj)
            obj.Sigma = eye(obj.statelen);
            obj.Sigma_Praed = obj.Sigma;
            
            obj.x = ones(obj.statelen,1);
            obj.x_Praed = obj.x;
        end
        
        %%% EKF Algorithmus
        function obj = predict(obj,u)
            G = computeG(obj, obj.x); % Jakobimatrix der Systemfunktion g()
            obj.x_Praed = g(obj, obj.x,u);
            obj.Sigma_Praed = G * obj.Sigma * G' + obj.R;
        end
        function [obj K] = correct(obj,z)
            H = computeH(obj, obj.x_Praed); % Jakobimatrix der Messfunktion h()
            K = obj.Sigma_Praed * H' / (H * obj.Sigma_Praed * H' + obj.Q); % Kalmangain(Matrix)
            obj.x = obj.x_Praed + K * (z - h(obj,obj.x_Praed));
            obj.Sigma = (eye(obj.statelen) - K * H) * obj.Sigma_Praed;
        end
        
        %%% Prozessmodell und Messmodell
        function xn = g(obj, x, u)
            xn = x + 0.03 * (u - x);
        end
        function z = h(obj, x)
            dist1 = norm(x - obj.sensor1Pos);
            dist2 = norm(x - obj.sensor2Pos);
            z = [dist1 dist2]';
        end
        function G = computeG(obj,x)
            G = eye(obj.statelen) * ( 1 - 0.03 );
        end
        function H = computeH(obj,x)
            p = obj.sensor1Pos;
            H(1,1) = -(2*p(1) - 2*x(1))/(2*((p(1) - x(1))^2 + (p(2) - x(2))^2)^(1/2));
            H(1,2) = -(2*p(2) - 2*x(2))/(2*((p(1) - x(1))^2 + (p(2) - x(2))^2)^(1/2));
            
            p = obj.sensor2Pos;
            H(2,1) = -(2*p(1) - 2*x(1))/(2*((p(1) - x(1))^2 + (p(2) - x(2))^2)^(1/2));
            H(2,2) = -(2*p(2) - 2*x(2))/(2*((p(1) - x(1))^2 + (p(2) - x(2))^2)^(1/2));
        end
         
        %%% Simulation helpers
        function newx = simulateProcess(obj, x, u, processNoise)
            newx = g(obj,x, u) + mvnrnd(zeros([1 obj.statelen]), processNoise')';
        end
        function z = simulateMeasurement(obj, x,measurementNoise)
            z = h(obj,x) + mvnrnd(zeros([1 obj.measlen]),measurementNoise')';
        end
        
    end
end