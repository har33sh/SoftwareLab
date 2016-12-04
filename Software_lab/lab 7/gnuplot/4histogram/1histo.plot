
clear
reset
set key off
set border 3
set term png

# Add a vertical dotted line at x=0 to show centre (mean) of distribution.


# Each bar is half the (visual) width of its x-range.
set boxwidth 0.5 absolute
set style fill solid 1.0 noborder


set output "figure1.png"

bin_width = 0.1;

rounded(x) =  floor (x + 0.5) 

plot 'data' using (rounded($1)):(1) smooth frequency with boxes
