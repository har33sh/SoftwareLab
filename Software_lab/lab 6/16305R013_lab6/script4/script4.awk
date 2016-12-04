BEGIN{
printf "Team\tPlayed\tWins\tTied\tPoints\n"
}
{
printf "%s\t%s\n",$0,$3*4 + $4*2
}
