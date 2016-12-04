BEGIN{
printf("digraph  M  {");
}
{
if(NR==1)  {
 	gsub("nodes={","");
 	gsub("}","");
 	gsub(",","|");     
	split($0,a,"|"); 
	for  (w  in  a) 
		print  a[w]  "  [shape=circle];"  
	  }
  
if(NR==2)  { 
  	gsub("edges={",""); 
	gsub("}",""); 
	gsub(/[()]/,"");  
	gsub("  $","");  
	gsub("  ","|");    
	split($0,array,"|");
	  }
}  
END{  
  	for  (w  in  array){
	  	split(array[w],arr,",");
	  	print  arr[1]  "  ->  "arr[2]"  [label  =  \""arr[3]  "\"];"
	}
printf("}");
}
