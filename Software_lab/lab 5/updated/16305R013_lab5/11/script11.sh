cat $1>$2
sed -i 's/\;/\t/g' $2
sed -i 's/\,/\t/g' $2
