sed 's/,/, /g' $1>$2
sed -i 's/;/; /g' $2
sed -i 's/:/: /g' $2
sed -i 's/!/! /g' $2
sed -i 's/?/? /g' $2
sed -i 's/\./\. /g' $2
