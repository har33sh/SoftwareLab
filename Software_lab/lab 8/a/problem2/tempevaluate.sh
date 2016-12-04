test1=$(python3.4 problem2.py data2 3)
if [[ $test1 -ne 5 ]];then
	echo "Testcase 1 failed"

test2=$(python3.4 problem2.py data2 91)
if [[ $test2 -ne 6 ]];then
	echo "Testcase 2 failed"

test3=$(python3.4 problem2.py data2 90)
if [[ $test3 -ne -1 ]];then
	echo "Testcase 3 failed"
