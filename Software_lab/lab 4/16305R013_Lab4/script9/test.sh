./script9.sh testcase/ > out1
echo 18 > out2
diff out1 out2 > result

if [[ -s result ]];
then
	echo fail
else
	echo success
fi
rm out1 out2 result
