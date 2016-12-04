set term png size 600, 400
# set size 0.5, 0.5
set output "1.png"
set xrange [-10:10]
set yrange [-10:10]
poly1(x)=(x-1)*(x-1)-1
poly2(x)=(x-2)*(x-2)-4
poly3(x)=(x-3)*(x-3)-9
poly(x)=0
plot [-10:10] poly(x) lt "dashed" lc rgb "#A9A9A9" lw 2,poly1(x) lt 3 lc rgb "#9951C3" lw 2,poly2(x)lt 3 lc rgb "#4AA586" lw 2,poly3(x) lt 3 lc rgb "#86B7D8" lw 2
