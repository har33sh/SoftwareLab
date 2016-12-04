from collections import Counter
def make_list():
        pass

def freqcount(L):
	#freqcount() takes list of lists and saves each distint string with the count into a dictionary 
	#return dictionary
	c=Counter([])	
	for i in L:
		c+= Counter(i)	
	return dict(c)
	pass

