BEGIN{}
{
if(NF!=0){
for(i=1;i<NF;i++){
printf $i " " }
printf $NF
printf "\n"
}
#here script runs for each line & lines containing blank newline has NF=0
}
