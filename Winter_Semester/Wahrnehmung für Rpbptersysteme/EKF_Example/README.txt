EKF-Beispiel aus der ARP Vorlesung

Startpunkt ist example2.m. Die kalman2-Klasse findet sich im Unterverzeichnis 
"@kalman2" (das mu� bei MATLAB wohl so sein.). Die restlichen Dateien werden 
f�r das Plotten der Kovarianzellopsoide gebraucht und stammen vn openslam.org 
(tjtf).

Die Struktur sollte klar sein:

Die Abschnitte "%% Define parameters" bis einschliesslich "%% initialize kalman filter" 
m�ssen zun�chst einmal durchlaufen werden. Danach realisiert der 
Abschnitt "%%simulation & EKF step" einen Iterationsschritt. Mehrfaches Ausf�hren dieses 
Abschnitts ergab die Bildsequenzen, die wir uns in der Vorlesung angesehen haben.

Anmerkung: In matlab kann man mit <strg>+<enter> den Abschnitt (zwischen zwei Zeilen, #
die mit "%%" beginnen) ausf�hren, in dem der Cursor des Editors gerade steht.

Viel Spa�!

Geog von Wichert, 10.1.2013