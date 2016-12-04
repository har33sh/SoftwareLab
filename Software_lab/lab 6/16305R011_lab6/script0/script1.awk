BEGIN{f="";l=""}
{
f=substr($0,1,1)
l=substr($0,(length($0)),1)
if((f == "a"||f == "e"||f == "i"||f == "o"||f == "u") && (l == "a"||l == "e"||l == "i"||l == "o"||l == "u"))
print $0;
}

