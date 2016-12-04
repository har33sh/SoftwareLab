number=0
for i in `find $1 -maxdepth 1 -type f`
  do
  total=`cat $i | grep if |wc -l`
  number=`expr $number + $total`
  done
echo $number
