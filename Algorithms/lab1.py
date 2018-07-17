
import math
import numpy as np

def function(x):
    return (math.log(2 + x, 10) + 2*x - 3)

eps=0.000001
x= np.zeros(10)
i=0
x[1]=8
x[0]=3
i=1

while (math.fabs(x[i]-x[i-1])<eps or i<9):
    x[i+1]=x[i-1]-(function(x[i-1])*((x[i])-(x[i-1])))/(function(x[i])-function(x[i-1]))
    i=i+1
    print(x[i])

