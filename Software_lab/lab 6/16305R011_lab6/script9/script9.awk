BEGIN{}
{ 
a[$1]=$2;
b[$1]=$3;
}
END{
for(i in a)
{
 for (i in a)
   {
     if (p == a[i])
     {
        printf i
        p = b[i];
        break;
     }
   }
   if (p!=0)
   {
      printf  "->"
   }
   else 
   {
   break;
   }

}
}
