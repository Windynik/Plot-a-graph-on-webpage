import matplotlib.pyplot as plt, mpld3
import numpy
import matplotlib.animation as animation
from matplotlib import style
import os
lol=plt.figure()
fig=lol.add_subplot(1,1,1)
dir_path = os.path.dirname(os.path.realpath("kek.py"))
def animate(i):
    
    graph_data=open(dir_path+'\data.txt','r').read()
    lines=graph_data.split("\n")
    objects = ["Marks"]
    marks = []
    for line in lines:
        if len(line)>1:
            y=line
            marks.append(int(y))
    fig.clear()
    y_pos=numpy.arange(len(objects))
    fig.set_xticks(y_pos)
    fig.set_xticklabels(objects)
    # fig.set_xlabel("Names")
    fig.set_ylabel("Marks")
    fig.set_title("Comparison of marks that shouldn't be done ofc :P")
    fig.set_ylim([0,50])
    fig.set_xlim(0, 1)
    fig.bar(y_pos,marks,width=0.5,align='center')
    lol.savefig('lol.png')
  
ani=animation.FuncAnimation(lol,animate,interval=1000)

plt.show()
