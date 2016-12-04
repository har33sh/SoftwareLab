set term png size 600, 400
#set size 0.5, 0.5
set output "grid.png"
set grid ytics
set grid xtics
set xrange [-7:15]
rt(x) = sqrt(x)
set xzeroaxis
set yzeroaxis
set xtics axis
set ytics axis
set border 0
plot rt(x), -rt(x) linetype 4

#x y axis are shifted as per the range through 0,0
#border is disabled else the corner numbers overlap the border
#ticks are enabled on both axis
