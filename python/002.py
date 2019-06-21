# Project Euler Problem 002

first = 1
second = 2
next = 0
sum = second
while next < 4000000:
	if(next%2==1):
		sum += next
	next = first + second	
	first =  second
	second =  next
print(sum)