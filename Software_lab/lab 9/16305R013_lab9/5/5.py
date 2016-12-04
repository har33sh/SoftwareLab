import  itertools
def powerset(s):
   x = list(s)
   return set(itertools.chain.from_iterable(itertools.combinations(x, r) for r in range(len(x)+1)))

print (powerset((1,3,5,7)))
