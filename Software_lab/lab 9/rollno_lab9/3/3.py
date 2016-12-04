from functools import reduce
def Lcollapse(L):
    i=reduce (lambda x,y:x+y,L)
    return  reduce(lambda x,y : x+" "+y,i)


x=Lcollapse ([ ["there","will"], ["be", "a", "python"], ["quiz", "next", "week."]])

print (x)
print (type (x))
