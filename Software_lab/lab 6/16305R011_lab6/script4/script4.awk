BEGIN{print "Team\tPlayed\tWins\tTied\tPoints";sum=0}
{
sum=$3*4+$4*2
print $1"\t"$2"\t"$3"\t"$4"\t"sum
}
