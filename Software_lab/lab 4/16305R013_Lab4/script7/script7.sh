n=0
while read curline; do
   if [ $n == 0 ]
   then n=1
   echo $curline >f
   else 
   echo $curline >>t
   fi
done < "ls_sort"
rm ls_sort
cat t | sort -k $1 >  t1

cat f t1 > ls_sort
rm f t t1

