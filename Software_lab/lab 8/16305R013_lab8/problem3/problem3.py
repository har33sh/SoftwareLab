def make_list():
	pass

def column_collapse(L):
	#Code to search the number x in l.
	#print the number of steps taken to reach x
	#return collapsed_list
	l=L
	x=0
	for lis in l :
		if(len(lis)>x):
			x =len(lis)

	for lis in l:
		if(len(lis)<x):
			for i in range(len(lis),x):
				lis.append(0)
	out=[]
	for i in range(0,x):
		tmp=0
		for j in range(0,len(L)):
			tmp+=l[j][i]
		out.append(tmp)
	return out
