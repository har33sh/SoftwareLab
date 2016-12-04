BEGIN{count=0;print "ID \t Name";RS="!";FS=","}
{
if(FNR==1&&NR!=1)
tr -d "\n";
printf NR"\t"$2 "\n";
count=count+1;
}
END{printf count "Records merged"}
