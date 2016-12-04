import sys
def sort(l):
	l.sort()
f = open (sys.argv[1])
l=[]
for i in f:
	l.append(int(i))
#print l
sort(l)
print l
