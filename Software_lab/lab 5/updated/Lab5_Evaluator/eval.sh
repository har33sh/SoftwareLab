for i in $(ls *.tar.gz)
do

	printf "\n\n--------------------------------- NEW STUDENT EVALUATION ---------------------------------\n\n"			

	printf "\n\n------------If you have errors between HERE------------\n\n"

	printf $i > tmp
	roll=$(cut -d'_' -f1 tmp)
	fname=$(cut -d'.' -f1 tmp)
	rm tmp

	tar -xzf $i

	tar -xzf testcases/tested_outputs.tar.gz
	rm -rf tested_outputs\_$fname
	mv tested_outputs tested_outputs\_$fname

	cp $fname/1/script1.sh tested_outputs\_$fname/1/
	cp $fname/2/script2.sh tested_outputs\_$fname/2/
	cp $fname/3/script3.sh tested_outputs\_$fname/3/
	cp $fname/4/script4.sh tested_outputs\_$fname/4/

	cp $fname/5/script5.sed tested_outputs\_$fname/5/
	cp $fname/6/script6.sed tested_outputs\_$fname/6/
	cp $fname/7/script7.sed tested_outputs\_$fname/7/
	cp $fname/8/script8.sed tested_outputs\_$fname/8/
	cp $fname/9/script9.sed tested_outputs\_$fname/9/

	cp $fname/10/script10.sh tested_outputs\_$fname/10/
	cp $fname/11/script11.sh tested_outputs\_$fname/11/
	cp $fname/12/script12.sh tested_outputs\_$fname/12/
	cp $fname/13/script13.sh tested_outputs\_$fname/13/

	rm -rf $fname

	printf "\n------------------------HERE-------------------------\n"
	printf "\nOnly There is something wrong with your directory structure, else you are good to go ! (errors only above this) \n\n\n"

	printf "\n\nSTUDENT ROLL-NO: %s" $fname 

	cd tested_outputs\_$fname
	printf "\n\nScript1----------------------------------------\n\n" 
	cd 1

	bash script1.sh "Professor" "IIT Bombay" "Perl" "C" "Java" "long experience" "knowledge" "Raj" output1
	if [ -e output1 ]
	then	
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	bash script1.sh "HR Manager" "ABC" "Perl" "C" "Java" "long experience" "knowledge" "Uday" output2
	if [ -e output2 ]
	then	
		DIFF=$(diff sample_output2 output2)
		if ["$DIFF" == ""]
		then
			printf "Testcase 2 : Success\n\n" 
		else
			printf "TestCase 2 : Fail\n\n" 
		fi
	else
		printf "TestCase 2 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script\n"
	fi


	cd ..
	printf "\n\nScript2---------------------------------------\n\n" 
	cd 2

	cp sample_input1 input
	bash script2.sh input 
	if [ -e input ]
	then
		DIFF=$(diff sample_output1 input)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cp sample_input2 input
	bash script2.sh input 
	if [ -e input ]
	then
		DIFF=$(diff sample_output2 input)
		if ["$DIFF" == ""]
		then
			printf "Testcase 2 : Success\n\n" 
		else
			printf "TestCase 2 : Fail\n\n" 
		fi
	else
		printf "TestCase 2 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript3---------------------------------------\n\n" 
	cd 3

	bash script3.sh sample_input1 
	if [ -e output3 ]
	then
		DIFF=$(diff sample_output1 output3)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript4---------------------------------------\n\n" 
	cd 4

	bash script4.sh sample_input1 output1
	if [ -e output1 ]
	then
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript5---------------------------------------\n\n" 
	cd 5

	sed -f script5.sed sample_input1 >output1
	if [ -e output1 ]
	then
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript6---------------------------------------\n\n" 
	cd 6

	sed -f script6.sed sample_input1 >output1
	if [ -e output1 ]
	then
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript7---------------------------------------\n\n" 
	cd 7

	sed -f script7.sed sample_input1 > output1
	if [ -e output1 ]
	then
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	sed -f script7.sed sample_input2 > output2
	if [ -e output2 ]
	then
		DIFF=$(diff sample_output2 output2)
		if ["$DIFF" == ""]
		then
			printf "Testcase 2 : Success\n\n" 
		else
			printf "TestCase 2 : Fail\n\n" 
		fi
	else
		printf "TestCase 2 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript8---------------------------------------\n\n" 
	cd 8

	sed -f script8.sed sample_input1 > output1
	if [ -e output1 ]
	then
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi


	cd ..
	printf "\n\nScript9---------------------------------------\n\n" 
	cd 9

	sed -f script9.sed sample_input1 > output1
	if [ -e output1 ]
	then
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript10---------------------------------------\n\n" 
	cd 10

	bash script10.sh sample_input1 commonmistakes output1
	if [ -e output1 ]
	then	
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	bash script10.sh sample_input2 commonmistakes output2
	if [ -e output2 ]
	then	
		DIFF=$(diff sample_output2 output2)
		if ["$DIFF" == ""]
		then
			printf "Testcase 2 : Success\n\n" 
		else
			printf "TestCase 2 : Fail\n\n" 
		fi
	else
		printf "TestCase 2 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript11---------------------------------------\n\n" 
	cd 11

	bash script11.sh sample_input1 output1
	if [ -e output1 ]
	then	
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	bash script11.sh sample_input2 output2
	if [ -e output2 ]
	then	
		DIFF=$(diff sample_output2 output2)
		if ["$DIFF" == ""]
		then
			printf "Testcase 2 : Success\n\n" 
		else
			printf "TestCase 2 : Fail\n\n" 
		fi
	else
		printf "TestCase 2 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..
	printf "\n\nScript12---------------------------------------\n\n" 
	cd 12

	bash script12.sh sample_input1 output1
	if [ -e output1 ]
	then	
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	bash script12.sh sample_input2 output2
	if [ -e output2 ]
	then	
		DIFF=$(diff sample_output2 output2)
		if ["$DIFF" == ""]
		then
			printf "Testcase 2 : Success\n\n" 
		else
			printf "TestCase 2 : Fail\n\n" 
		fi
	else
		printf "TestCase 2 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	############################################################################################

	cd ..
	printf "\n\nScript13---------------------------------------\n\n" 
	cd 13

	bash script13.sh sample_input1 stopwords output1
	if [ -e output1 ]
	then
		DIFF=$(diff sample_output1 output1)
		if ["$DIFF" == ""]
		then
			printf "Testcase 1 : Success\n\n" 
		else
			printf "TestCase 1 : Fail\n\n" 
		fi
	else
		printf "TestCase 1 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	bash script13.sh sample_input2 stopwords output2
	if [ -e output2 ]
	then
		DIFF=$(diff sample_output2 output2)
		if ["$DIFF" == ""]
		then
			printf "Testcase 2 : Success\n\n" 
		else
			printf "TestCase 2 : Fail\n\n" 
		fi
	else
		printf "TestCase 2 : Script is Empty (or) Execution Error (or) Output Format error - Check Question & Script \n\n" 
	fi

	cd ..

	############################################################################################
	printf "\n"
	cd ..
done
