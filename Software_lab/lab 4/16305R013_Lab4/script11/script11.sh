number=0
for i in `find $1 -type f`
  do
  total=`cat $i | grep for |wc -l`
  number=`expr $number + $total`
  done
echo $number
