set term png size 600, 600
# set size 1, 1.5  
set parametric
set output "4_1.png"
f(t)=cos(3*t)
g(t)=sin(2*t)
#set view equal xy
set linestyle 1 lc 3
plot [0:2*pi] f(t),g(t) lc rgb "#009E73" lw 2
