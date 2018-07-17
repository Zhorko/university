import matplotlib.pyplot as plt
import math
import numpy as np

import matplotlib as mpl
def mnkGP(x,y):
    n=len(x)
    s=sum(y)
    s1=sum([1/x[i] for i in  range(0,n)])
    s2=sum([(1/x[i])**2 for i in  range(0,n)])
    s3=sum([y[i]/x[i]  for i in range(0,n)])
    a= round((s*s2-s1*s3)/(n*s2-s1**2),3)
    b=round((n*s3-s1*s)/(n*s2-s1**2),3)
    s4=[a+b/x[i] for i in range(0,n)]
    so = round(sum([abs(y[i] - s4[i]) for i in range(0, n)]) / (n * sum(y)) * 100, 3)
    plt.plot(x, y, color='b',  marker='x')
    plt.plot(x, s4, color='r', linewidth=2)
    plt.grid(True)
    print(so)
    plt.show()

def g(x,A,B):
    return A*x/(x+B)
i=0
xValues=np.zeros(10)
while i<10:
    xValues[i]=1+i*(1/8)
    i=i+1
yValues=np.zeros(10)
i=0
while i<10:
    yValues[i]=g(i,3,3)
    i=i+1
j=0
mnkGP(xValues,yValues)
