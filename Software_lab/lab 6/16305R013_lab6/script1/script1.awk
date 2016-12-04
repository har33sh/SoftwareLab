BEGIN {
FS=","
RS="!"
}

{
printf "%s\t%s\n",$1,$2
}
