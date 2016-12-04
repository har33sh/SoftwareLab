def pick (L, c):
	return set ( filter (lambda x : x[0]==c,L))


print ( pick (["hello", "how", "are", "you","how"], "h"))
