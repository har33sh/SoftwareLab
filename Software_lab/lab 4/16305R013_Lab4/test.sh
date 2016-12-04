#!/bin/bash

if [ -f structure_check.sh ]
then
	echo -en "Structure Check: "
	if [ `bash structure_check.sh` == "OK" ]
	then
		echo -e "\e[1;32mOK\e[0m"
		echo "------------------------------"
	else
		echo -e "\e[1;31mInvalid Structure\e[0m"
		exit
	fi
else
	echo -e "\e[1;31mstructure_check.sh missing\e[0m"
	exit
fi

for i in 1 2 3 4 5 6 7 8 9 10 11
do
	echo -n "Script $i: "
	cd script$i
	if [ -f test.sh ]
	then 
		if [ `bash test.sh` == "success" ]
		then
			echo -e "\e[1;32mSuccess\e[0m"
		else
			echo -e "\e[1;31mFail\e[0m"
		fi
	else
		echo -e "\e[1;31mNo test file present\e[0m"
	fi
	cd .. > /dev/null
done
