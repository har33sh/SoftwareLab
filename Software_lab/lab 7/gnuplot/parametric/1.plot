set term png size 600, 600
# set size 1, 1.5  
set parametric
set output "1.png"
f(t)=sin(t)
g(t)=cos(t)
#set view equal xy
plot [0:2*pi] sin(t),cos(t) linetype 4
