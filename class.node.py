#class.node.py
class Node:
	def __init__(self, value, next=None):
	    self.value = value
	    self.next = next 

#You construct a list by specifying all the nodes: 

L = Node("a", Node("b", Node("c", Node("d"))))
v=L.value
print(v)
# a
v=L.next.value
print(v)
# b
v=L.next.next.value
print(v)
# c
v=L.next.next.next.value
print(v)
# d
