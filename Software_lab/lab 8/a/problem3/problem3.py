import sys
class count:
	i=10

def make_list():
	#Code to process the input file and return a list l
	f=open(sys.argv[1])
	l=[]
	for i in f:
		t=i.split(' ')
		k=[]
		for j in t:
			k.append(int(j))
		l.append(list(k))
	return l


def coll():
	x=0
	l=make_list()
	print l
	for lis in l:
		if(len(lis)>x):
			x =len(lis);
	
	for lis in l:
		if(len(lis)<x):
			for i in range(len(lis),x):
				lis.append(0)	

	print l 	

coll()
