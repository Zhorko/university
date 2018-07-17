import matplotlib.pyplot as plt
import math
import numpy as np

def func(x):
    return x + math.sin(x)

def funcd(x):
    return math.sin(x)
n=3
x=np.zeros(n)
y=np.zeros(n)
i=0

while i<n:
    x[i]=i
    i=i+1
i=0
while i < n:

    y[i] = func(x[i])
    i=i+1
i=0

def Ermit(x,x0,x1,y0,y1):
    h=x1-x0
    result = y0*((((x1-x)*(x1-x))*(2*(x-x0)+h)))/(h*h*h)+(funcd(x0)*((((x1-x)*(x1-x))*(x-x0))/(h*h)))+(y1*((x-x0)*(x-x0)*(2*(x1-x)+h))/(h*h*h))+(funcd(x1)*(((x-x0)*(x-x0)*(x-x1))/(h*h)))
    return result

xnew=np.linspace(0,1,40)
ynew=[Ermit(j,0,1,func(0),func(1)) for j in xnew]
plt.plot(xnew,ynew,'r')
plt.grid(True)
xnew=np.linspace(1,2,40)
ynew=[Ermit(j,1,2,func(1),func(2)) for j in xnew]
plt.plot(x,y,"ro",xnew,ynew,'r')
plt.show()