BEGIN{}
{ 
for(i=1;i<=NF;i++) #$0 contains the full line
{a[$i]+=1;
}
}
END{for (i in a)
 {print i" "a[i]}
}
