BEGIN{
print "<html>"
print "<table border='2px'>"
print "<tr>"
print "<th>Team</th><th>Played</th> <th>Wins</th> <th>Tied</th> <th>Points</th>"
print "</tr>"

}
{
print"<tr>"
print"<td align='center'>"
print $1
print "</td>"
print "<td align='center'>"
print $2
print "</td>"
print "<td align='center'>"
print $3
print "</td>"
print "<td align='center'>"
print $4
print "</td>"
print "<td align='center'>"
print $3*4+$4*2
print "</td>"
print "</tr>"
}
END{
print"</table>\n</html>"
}
