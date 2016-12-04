cat $1>t
#sed -i "s/\. / /g" t >t1
sed -i "s/\. / /g" t
sed -n "/\([A-Za-z0-9\._]\+\@[A-Za-z]\+\.[A-Za-z\.]\+\)/ p" t > t1
sed -i "s/[,;:]/\n/g" t1
sed -i "s/[ ]\+//g" t1


cat t1 > $2
#sed -i "s/\([A-Za-z0-9\.\@_]\+\)[\.]/XX/" t1
#sed -i "s/\([A-Za-z0-9._-]\+@[A-Za-z0-9]\+\.[A-Za-z0-9]\+[.A-Za-z0-9]*\b\)[\.]/\1/" t1
rm t1 t
