BEGIN{cc=0;cw=0;cl=0;cp=1;}
{ 
if($0 == "\n")
print 123

for(i=1;i<=NF;i++) #$0 contains the full line
{cc+=length($i);
}
cw+=NF
cl+=1
if(NF==0)
cp+=1;
}
#!NF{cp+=1;}
END{print "Number of Characters:"cc"\tNumber of Words:"cw "\tNumber of Lines:"cl "\tNumber of Paragraphs:"cp}
