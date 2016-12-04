
{
gsub(/[A-Z][a-z]*/,"& ",$0);
gsub(/[ \t]+$/,"",$0)
print $0;
}
