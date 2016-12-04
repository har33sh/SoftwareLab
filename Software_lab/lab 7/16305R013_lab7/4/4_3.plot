set term png size 600, 600
set parametric
set output "4_3.png"
set urange [0:3.0/2*pi]
set vrange [-pi/2:pi/2]
# Parametric functions for the sphere
r=4
fx(v,u) = r*cos(v)*cos(u)
fy(v,u) = r*cos(v)*sin(u)
fz(v)   = r*sin(v)

set title "Piece of cake"
splot fx(v,u),fy(v,u),fz(v) lt 111
