
from functools import reduce 

def Lcollapse(L):
    i=reduce (lambda x,y:x+y,L)
    r= reduce(lambda x,y : x+" "+y,i)
    #print r
    return r

#Lcollapse ([ ["there","will"], ["be", "a", "python"], ["quiz", "next", "week."]])


