import sys
class count:
	i=10

def make_list():
	#Code to process the input file and return a list l
	f=open(sys.argv[1])
	l=[]
	for i in f:
		l.append(int(i))
	return l


def binsearch(l,x):
#	if(count.i==1):
#		return
#	count.i-=1
	#Code to search the number x in l.
	#print the number of steps taken to reach x
	mid=int((len(l))/2)
#	print (l,x,l[mid])
	if( (len(l)==0) and (l[len(l)-1]!=x)):
		return -1
	if(l[mid]==x):
		return 1;
	if(l[mid]>x):
		return 1+binsearch(l[:mid],x)
	else :
		return 1+binsearch(l[mid:],x)

s=int(sys.argv[2])
print (binsearch(make_list(),s))
