BEGIN{
process[$2]=$1;
ppid[$2]=$3;
}
END{
tmp=ppid[p];
while(p!=tmp){
	p=tmp;
	tmp=ppid[p];
	}
}




