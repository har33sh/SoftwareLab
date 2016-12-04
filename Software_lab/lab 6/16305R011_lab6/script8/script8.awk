BEGIN{UC="ABCDEFGHIJKLMNOPQRSTUVWXYZ";}
{ 
ch=""
k=substr($0,1,1);
for(i=2;i<=length($0);i++)
{
f=substr($0,i,1);
if(index(UC,f)){
k = k " " f ;
}
else k = k f
}
print k
}

