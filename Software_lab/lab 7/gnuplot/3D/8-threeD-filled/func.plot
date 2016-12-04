set term png size 600, 400
# set size 0.5, 0.5
set output "func.png"
func(x,y) = x*x + y*y 
set xrange [-5:5]
set yrange [-5:5]
set zrange [0:]
set ticslevel 0  # brings z axis origin to xy plane
set pm3d
splot func(x,y) linetype 4
