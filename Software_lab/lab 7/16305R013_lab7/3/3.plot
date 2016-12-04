set term png size 600, 400
ack(m,n) = (m == 0) ? n + 1 : (n == 0) ? ack(m-1,1) : ack(m-1,ack(m,n-1))
set output "3.png"
set xrange [0:3]
set yrange [0:3]
set isosamples 4
set samples 4
set title "Ackermann function"
splot ack(x, y) lw 2 lc rgb "#009E73"

