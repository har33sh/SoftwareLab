BEGIN{print "<table border=1>";print"<tr><th>Team</th><th>Played</th><th><big>Wins</big></th><th><big>Tied</big></th><th><big>Points</big></th></tr>";sum=0} 

		
{
sum=$3*4+$4*2
printf"<tr><td>"$1"</td><td>"$2"</td><td>"$3"</td><td>"$4"</td><td>"sum"</td></tr>\n"
}
END{print "</table>"}
