from dict import freqcounter

res = freqcounter([['a','a','bc','ac','ab'],['bc','ac','bc'],['ab','ac','cc']])
expected = {'a': 2, 'cc': 1, 'ac': 3, 'ab': 2, 'bc': 3}
if res.keys() == expected.keys():
	print ("Test Case 1: Pass")
else:
	print ("Test Case 1: Fail")