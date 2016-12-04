set term png size 600, 400
# set size 0.5, 0.5
set output "fib.png"
set xrange [0:7]
fib(x) = (x<=1)?1:fib(x-1)+fib(x-2)
plot fib(x) linetype 4
