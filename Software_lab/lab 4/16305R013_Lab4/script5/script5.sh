for i in *.$1;
do
 mv "$i" "${i/.$1}"`date +%d-%m-%Y`.$1;
done


