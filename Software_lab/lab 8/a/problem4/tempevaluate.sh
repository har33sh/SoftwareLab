test1=$(python3.4 problem4.py testcase1)
#diff -Z -B output expected1 > /dev/null
if [[ $test1 -eq 77 ]]; then
	echo "Test Case 1: Pass"
else
	echo "Test Case 1: Fail"
fi

test2=$(python3.4 problem4.py testcase2)

if [[ $test2 -eq -337 ]]; then
	echo "Test Case 2: Pass"
else
	echo "Test Case 2: Fail"
fi

