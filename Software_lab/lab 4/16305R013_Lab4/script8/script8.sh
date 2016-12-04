cat $1 $2 > tmp
sort -k $4 tmp > $3
rm tmp

