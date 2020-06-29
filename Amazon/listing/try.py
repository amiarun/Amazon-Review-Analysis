a = ['egwevrev','avavvaav','vvVWEVVSS']
b = ['fff','efrfrf','fefeffe']
f=open('try.txt','w')
for i in range(len(a)):
    f.write(str(a[i]))
    f.write('\b')
    f.write(str(b[i]))
    f.write('\n')

f.close()
