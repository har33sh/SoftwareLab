set term png size 600, 400
set size 0.95, 0.98

TITLE="Effectiveness of Partitions"
XLABEL="No of Edges"
YLABEL="Metric values"
title1= "partition 1 cohesion"
title2= "parition 2 cohesion"


set title TITLE font "Courier new,18" textcolor rgbcolor "violet" 
set xlabel XLABEL
set ylabel YLABEL

set key noautotitles
set key title "Legend:"


set output "plot1.png"
plot for [col=4:5] 'mydata' using 3:col title columnhead with points

set output "plot2.png"
plot for [col=4:6] 'mydata' using 3:col title columnhead with points

set output "plot3.png"
plot for [col=7:8] 'mydata' using 3:col title columnhead with points

