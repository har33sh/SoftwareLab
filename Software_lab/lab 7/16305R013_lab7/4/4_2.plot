set term png size 600, 600
# set size 1, 1.5  
set parametric
set output "4_2.png"
#t=linspace(0,4*pi, 600)
f(t)=1.5*cos(t) - cos(30*t)
g(t)=1.5*sin(t) - sin(30*t)
#set view equal xy
set linestyle 1 lc 3
plot f(t),g(t) lc rgb "#009E73" lw 2
