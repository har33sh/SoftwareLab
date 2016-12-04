for i in $(cat $1)
	do
	var=$(find . -type d -name $i|wc -l)
	if [ $var -eq 1 ]
	then
	echo "could not create $i"
	else
	mkdir $i
	echo "created $i"
	fi
done
