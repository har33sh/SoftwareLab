s=0
i=0
while [ $i -le $1 ]
do
	s=`expr $i + $s`
	i=`expr $i + 1`
done
echo $s

