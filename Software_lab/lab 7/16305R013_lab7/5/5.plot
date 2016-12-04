clear
reset
set border 3
set term png
set output "5.png"
set yrange [3:10]
set xrange [0:22] 
set xtics 0,1,22
set xtics offset 0,-1,0
set xtics rotate by 45
set ylabel "Gradepoint -->" 
set xlabel "Rollno. -->"
bin_width = 0.1;
set xtics 1
set ytics 1
set grid
set style textbox opaque

convert(x) = (x < 39)?4:(x>=40 && x<=44)?5:(x>=45 && x<=49)?6:(x>=50 && x<=54)?7:(x>=55 && x<=59)?8:(x>=60 && x<=69)?9:x>=70?10:3;
plot "inputdata5" using ($1):(convert($2)):2 title "Grade Chart" with linespoints lw 2 pt 7,"inputdata5" using ($1):(convert($2)):2 with labels center boxed notitle
