#use python 3.4 for the correct output

def pick (L, c):
   r=filter(lambda x : x[0]==c,L)
   print(set(r))
   return set(r)


#pick (["hello", "how", "are", "you","how"], "h")
