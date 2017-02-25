from recommendations import *
prefs=loadMovieLens()
import pymysql
con=pymysql.connect(host='localhost', port=3306, user='root', passwd='', db='movies')
m=con.cursor()
a=m.execute("select User_id from user where Active=1")
for User_id in m:
	print (User_id)
rec=getRecommendations(prefs,str(User_id[0]))[0:15]
print (rec[0][1])
