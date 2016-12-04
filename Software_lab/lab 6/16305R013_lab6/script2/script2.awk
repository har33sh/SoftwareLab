BEGIN{
FS=","
RS="!"
printf "Id\tName"
}
{
printf "\n" NR"\t%s",$2
}
END{
printf "\n"NR" Records merged\n"
}
