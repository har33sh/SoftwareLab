clear
reset
set border 3
set term png
set xtics rotate by 45 right
set yrange [0:8]
#set ytics mirror norotate  autojustify
set boxwidth 0.5 absolute
set style fill solid 1.0 noborder
#set xrange [0:12]

set output "6.png"
plot "<cat" using 2:xticlabel(1) title "Frequency Count " with boxes
