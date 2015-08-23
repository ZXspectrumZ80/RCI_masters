%% Define parameters
clear;

statelen = 2;
measlen = 2;
processNoise = 0.01 * eye(statelen);
measNoise = 0.01 * eye(statelen);
%measNoise(2,2) = 1;
sensor1Pos = [ -2 -1]' ;
sensor2Pos = [ 2 -1]' ;

%% initialize simulation
true_x = [1 1]';

%% initialize kalman filter
k1 = kalman2(processNoise, measNoise, statelen, measlen, sensor1Pos, sensor2Pos);
k1 = k1.init();
cla;
plotcov2(k1.x, k1.Sigma);
hold on;
scatter(true_x(1,1), true_x(2,1));
axis ([-3 3 -3 3]);
axis equal;
axis manual;
hold off;

%% simulation & EKF step
u = [0 1]';
true_x = k1.simulateProcess(true_x, u, 0.2*processNoise);
measurement = k1.simulateMeasurement(true_x,measNoise);

% EKF step
k1 = k1.predict(0);
k1 = k1.correct(measurement);
plotcov2(k1.x, k1.Sigma);
hold on;

scatter(true_x(1,1), true_x(2,1));
scatter(u(1,1), u(2,1));
axis ([-3 3 -3 3]);
axis equal;
axis manual;
hold off;

%%
clear;