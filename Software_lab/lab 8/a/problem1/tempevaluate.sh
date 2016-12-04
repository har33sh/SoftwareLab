python3.4 problem1.py data1 > output
diff -Z -B output expected > /dev/null
if [[ '$?' -eq 0 ]];then
	echo "success"
else
	echo "failed"
