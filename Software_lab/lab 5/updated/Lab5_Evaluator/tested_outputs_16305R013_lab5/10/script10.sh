cat $1 > t
cat $2 > t1
sed -i '/^$/d' t1
while read curline; do
   IFS=" " read -ra array <<< $curline
   a=${array[1]}
   b=${array[2]}
   sed -i 's/'${a}'/'${b}'/gi' t
done < t1
cat t>$3
rm t t1
