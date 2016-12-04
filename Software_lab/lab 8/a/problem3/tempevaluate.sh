python3.4 problem3.py input1 > output1
diff -Z -B output1 expected1 > /dev/null
if [[ '$?' -eq 0 ]];then
	echo "success"
else
	echo "Testcase1 failed"

python3.4 problem3.py input2 > output2
diff -Z -B output2 expected2 > /dev/null
if [[ '$?' -eq 0 ]];then
	echo "success"
else
	echo "Testcase2 failed"
