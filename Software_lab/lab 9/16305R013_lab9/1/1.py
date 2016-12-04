def add (x,y):
    if type(x)== int  and type(y)==int:
        return x+y
    if(type(x)!=int):
        return y
    if(type(y)!=int):
        return x

def merge (l1,l2):
        return map (add,l1,l2)

#l=[2,3,10]
#l2=[2,5,3,2]
#r = merge(l,l2)
#print (r) 
