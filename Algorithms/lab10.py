import math
import matplotlib.pyplot as plt
import numpy as np
from numpy import linalg as LA
import random

n=3
x=np.zeros((n**4,n))
p=np.zeros((n,n+1))
solve = np.zeros(n+1)
i=0
j=0
# задаем коэффициенты
p[0]=[10,2,1,12]
p[1]=[2,11,1,13]
p[2]=[2,2,10,14]
# задаем начальное приближение
x[0]=[1.2,1.3,1.4]
i=0
j=0
k=1
bug=0
while i<n:
    buf = p[i][i]
    while j<n+1:
        p[i][j]=p[i][j]/buf
        j=j+1
    j=0
    i=i+1
i=0
j=0
k=1

print(p)
print("\n")
while k<n**4:
    while i<n:
        while j<n:
            if(j==0):
                x[k][i] = p[i][n]

            if(i!=j):
                x[k][i]-=p[i][j]*x[k-1][j]
            j=j+1
        j=0
        i=i+1

    i=0
    k=k+1
print(x)

