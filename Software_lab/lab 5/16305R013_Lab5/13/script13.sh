cat $1>t
sed -i 's/[ .,:;"!]/ /g' t
sed -i 's/[ .][a-z0-9]\+//g' t
sed -i 's/[ ]/\n/g' t 
sed -i /^$/d t
tr '[A-Z]' '[a-z]' < t  > t1

cat $2>t2 

sed -i 's/\([a-z]*\)/ \1 /' t1

while read curline; do
 sed -i 's/ '${curline}' //g' t1
done < t2

sed -i 's/[ ]//g' t1
sed -i /^$/d t1
sed -i "s/\b\(.\)/\u\1/g" t1
cat t1> $3
