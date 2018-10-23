#adjacency.dict.py
#directed graph

#nodes
a, b, c, d, e, f, g, h = range(8)

#Adjacency dicts with Edge Weights 
N = [
	{b:2, c:1, d:3, e:9, f:4},    	# a     
	{c:4, e:3},             		# b     
	{d:8},                			# c     
	{e:7},               		 	# d     
	{f:5},                			# e     
	{c:2, g:2, h:2},          		# f     
	{f:1, h:6},             		# g     
	{f:9, g:8}              		# h 
	]

#b is connected with a?
print("b is connected with a?",b in N[a])
#degree of node f (indegree + outdegreee)
print("degree of node f:",len(N[f]))
#Edge weight for (a, b)
print("Edge weight for (a, b):",N[a][b])

