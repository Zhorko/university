import math
import matplotlib.pyplot as plt
import numpy as np

def func(x):
    return (x + math.sin(x))

n=10
a=1
b=2
xValues=np.zeros(n)
yValues=np.zeros(n)
i=0
while i<n:
    xValues[i]=i
    i=i+1
i=1
while i < n:
    yValues[i] = func(xValues[i])
    i=i+1
i=0
def Lagrange(xlist,ylist,t):
    z=0
    for j in range(len(ylist)):
        pol1=1
        pol2=1
        for i in range(len(xlist)):
                if i==j:
                    pol1=pol1*1
                    pol2=pol2*1
                else:
                    pol1=pol1*(t-xlist[i])
                    pol2=pol2*(xlist[j]-xlist[i])
        z=z+ylist[j]*(pol1/pol2)
    return z
fig=plt.figure()
ax1=fig.add_axes([0.6,0.4,0.4,0.5])
ax2=fig.add_axes([0.1,0.4,0.4,0.5])
ax1.set_title('Func')
ax2.set_title('Lagrange')
ax1.plot(xValues,yValues,"-o")
xnew=np.linspace(np.min(xValues),np.max(xValues),10)
ynew=[Lagrange(xValues,yValues,j)for j in xnew]
ax2.plot(xnew,ynew,"-ro")
ax1.grid()
ax2.grid()
plt.show()
