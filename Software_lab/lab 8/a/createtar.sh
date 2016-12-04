echo "Enter your roll number:"
read roll
mkdir ${roll}_Lab8
for i in $(seq 1 5)
do
	if [[ ! -f problem$i ]]; then
		cp -r problem$i ${roll}_Lab8/
	else
		echo -e "\n Folder problem$i not found\n"
	fi

#	if [[ ! -x script$i/script${i}.sh ]];then
#		echo -e "\nscript$i does not have executable permission\n"
#		continue;
#	fi

done

tar -czf ${roll}_Lab8.tar.gz ${roll}_Lab8
