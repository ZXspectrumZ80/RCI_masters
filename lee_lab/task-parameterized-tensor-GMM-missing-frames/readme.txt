Task-parameterized tensor GMM with missing frames

Usage:
Unzip the file and run 'demo01' in Matlab. 

Reference:
Alizadeh, T., Calinon, S. and Caldwell, D.G. (2014) Learning from demonstrations with partially observable task parameters. Proc. IEEE Intl Conf. on Robotics and Automation (ICRA).

Description:
Demonstration a task-parameterized probabilistic model encoding movements in the form of virtual spring-damper systems acting in multiple frames of reference. Each candidate coordinate system observes a set of demonstrations from its own perspective. When one task parameter is not observable, the corresponding part in the data will be missing (third order sparse tensor data) and this information is taken into account in the learning and reproduction parts. 
The task is a via point passing task, starting from one point, passing through a second point and ending in a third point. A frame of references (task parameters) is attached to each via point, complemented by a fixed frame of reference at the origin. 

Authors:
Tohid Alizadeh, Sylvain Calinon, 2014
http://programming-by-demonstration.org/
		
This source code is given for free! In exchange, we would be grateful if you cite
the following reference in any academic publication that uses this code or part of it:

@inproceedings{Alizadeh14ICRA,
  author="Alizadeh, T. and Calinon, S. and Caldwell, D. G.",
  title="Learning from demonstrations with partially observable task parameters",
  booktitle="Proc. {IEEE} Intl Conf. on Robotics and Automation ({ICRA})",
  year="2014",
  month="May-June",
  address="Hong Kong, China",
  pages="3309--3314"
}
