BEGIN {RS="!";FS=","}
{

print $1"\t"$2
}
