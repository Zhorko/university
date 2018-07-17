import matplotlib.pyplot as plt
import math
def function(x):
        return (math.log(2 + x, 10) + 2*x - 3)
def der_function(x):
    return (1/(2+x*math.log(10)) + 2)
def Newton(x,eps):
    y=x
    x=x-(function(x))/der_function(x)
    if (math.fabs(y-x)>=eps):
        return Newton(x,eps)
    else:
        return x
i=0
eps = 0.005
print(Newton(i,eps))
print(function(Newton(i,eps))*1000)