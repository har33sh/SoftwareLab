BEGIN{
	chars=0;
	words=0;
	lines=0;
	paras=1;
}
{
if($0 == "\n")
	print 123

for(i=1;i<=NF;i++)
	chars+=length($i);

words+=NF
lines+=1
if(NF==0)
	paras+=1;
}

END{print "Number of Characters:"chars"\tNumber of Words:"words "\tNumber of Lines:"lines "\tNumber of Paragraphs:"paras}

