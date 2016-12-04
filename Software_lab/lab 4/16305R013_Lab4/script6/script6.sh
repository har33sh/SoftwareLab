rm ls_sort
echo -e "File name\tTime\t\t\tPermission"  >>ls_sort
stat --printf="%n\t%x\t%A\n" $(ls) >>ls_sort

