cat LetterTemplate > $9
sed -i "s/\<X\>/$1/g" $9
sed -i "s/\<Y\>/$2/g"  $9
sed -i "s/\<P\>/$3/g"  $9
sed -i "s/\<Q\>/$4/g"  $9
sed -i "s/\<R\>/$5/g"  $9
sed -i "s/\<A\>/$6/g"  $9
sed -i "s/\<B\>/$7/g"  $9
sed -i "s/\<D\>/$8/g"   $9
