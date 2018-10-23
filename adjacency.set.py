#adjacency.set.py
#directed graph

#nodes
a, b, c, d, e, f, g, h = range(8)

#branches
N = [
	{b, c, d, e, f},    # a     
	{c, e},             # b     
	{d},                # c     
	{e},                # d     
	{f},                # e     
	{c, g, h},          # f     
	{f, h},             # g     
	{f, g}              # h 
	]

#b is connected with a?
print("b is connected with a?",b in N[a])
#degree of node f (indegree + outdegreee)
print("degree of node f:",len(N[f]))


