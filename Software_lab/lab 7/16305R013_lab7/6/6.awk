{
gsub(/[^[:alnum:]_\'[:blank:]]/, "", $0)
for (i = 1; i <= NF; i++)
	array[$i]++
}
END {
for (element in array)
	printf "%s %d\n", element, array[element]

}


