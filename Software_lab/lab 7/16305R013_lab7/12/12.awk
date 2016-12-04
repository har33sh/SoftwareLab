BEGIN{printf("digraph N { End [shape=doublecircle]"); FS="|";x=-1;}
{   
	for (i=1; i<=NF; i++) {    
		for (j=1; j <= length($i);j++) {         
			if(j==1){   
			  x++;   
			  printf "S -> P%d [label =\"%s\"];\n",x, substr($i, j, 1);     
			}    
    			else { 
			   temp=substr($i, j+1, 1);      
			  if(temp=="*" || temp =="+"){      
				if(temp=="*")        
				{printf "P%d -> P%d [label =\"%s\"];\n",x,x,substr($i, j, 1);}   
				else  
				{printf "P%d -> P%d [label =\"%s\"];\n",x,x,substr($i, j, 1);  
			    	printf "P%d -> P%d [label =\"%s\"];\n",x,x+1,substr($i, j, 1);x++;}         
			  j++;  
			  }  
			  else{  
				printf "P%d -> P%d [label =\"%s\"];\n",x,x+1,substr($i, j, 1);           
			  	x++;  
			  }  
			}  
			if(j== length($i))  
			  printf "P%d -> End\n",x;  
		}  
	}  
}  
END{printf("}");}  
