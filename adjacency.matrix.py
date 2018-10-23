#adjacency.matrix.py
#directed graph

#nodes
a, b, c, d, e, f, g, h = range(8)

#.    Adjacency matrix 
#     a b c d e f g h
N = [[0,1,1,1,1,1,0,0], # a
     [0,0,1,0,1,0,0,0], # b      
     [0,0,0,1,0,0,0,0], # c      
     [0,0,0,0,1,0,0,0], # d      
     [0,0,0,0,0,1,0,0], # e      
     [0,0,1,0,0,0,1,1], # f      
     [0,0,0,0,0,1,0,1], # g      
     [0,0,0,0,0,1,1,0]] # h


#b is connected with a?
print("b is connected with a?",b in N[a])
#degree of node f (indegree + outdegreee)
print("degree of node f:",sum(N[f]))
## Neighborhood membership
print("# Neighborhood membership for (a, b):",N[a][b])

