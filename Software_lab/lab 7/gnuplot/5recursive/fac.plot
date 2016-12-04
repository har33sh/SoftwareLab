set term png size 600, 400
# set size 0.5, 0.5
set output "fac.png"
fac(x) = (int(x)==0) ? 1.0 : int(x) * fac(int(x)-1.0)
set xrange [0:5]
plot fac(x) linetype 4
