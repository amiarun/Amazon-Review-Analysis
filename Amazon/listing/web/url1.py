import re
import requests
from bs4 import BeautifulSoup
from nltk.stem import PorterStemmer 
from nltk.tokenize import word_tokenize 
ps = PorterStemmer() 
# enter the url of product
file=open(R"C:\xamppnew\htdocs\Amazon\listing\c1.txt","r",encoding="utf-8")
URL1=file.readline()
file.close()
# URL1=input("Enter An Amazon URL : ")
print(URL1)
headers = {"User-Agent": 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36'}
page = requests.get(URL1, headers=headers)
soup = BeautifulSoup(page.content, 'lxml')
# fetch the name of product
name1 = soup.find(id="productTitle").text
# print(name1)
# print("\n")
# fecth price of product
price1=soup.find(id="priceblock_ourprice").text
# print("Price:",price1.strip())
# print("\n")
# prod Rating
rating1=soup.find('span',attrs={'class':'a-size-medium a-color-base'}).text
revdiv1=soup.find('div',attrs={'class':'a-section a-spacing-large'})
reviews1=[]
for row in revdiv1.findAll('a',attrs={'class':'a-size-base a-link-normal review-title a-color-base review-title-content a-text-bold'}):
    reviews1.append(row.text.replace("\n",""))
# print(rating1)
# print("\n")

# 2nd url
file=open(R"C:\xamppnew\htdocs\Amazon\listing\c2.txt","r",encoding="utf-8")
URL2=file.readline()
file.close()
# URL2=input("Enter An Amazon URL : ")
# print(URL2)
page1=requests.get(URL2,headers=headers)
soup1 = BeautifulSoup(page1.content, 'lxml')
name2 = soup1.find(id="productTitle").text
# print("Name:",name2.strip())
price2=soup1.find(id="priceblock_ourprice").text
# print("Price:",price2.strip())
rating2=soup1.find('span',attrs={'class':'a-size-medium a-color-base'}).text
revdiv2=soup1.find('div',attrs={'class':'a-section a-spacing-large'})
reviews2=[]
for row in revdiv2.findAll('a',attrs={'class':'a-size-base a-link-normal review-title a-color-base review-title-content a-text-bold'}):
    reviews2.append(row.text.replace("\n",""))
# print(rating2)
#3rd url
file=open(R"C:\xamppnew\htdocs\Amazon\listing\c3.txt","r",encoding="utf-8")
URL3=file.readline()
file.close()
# URL3=input("Enter An Amazon URL : ")
# print(URL3)
page2=requests.get(URL3,headers=headers)
soup2 = BeautifulSoup(page2.content, 'lxml')
name3 = soup2.find(id="productTitle").text
# print("Name:",name3.strip())
price3=soup2.find(id="priceblock_ourprice").text
# print("Price:",price3.strip())
rating3=soup2.find('span',attrs={'class':'a-size-medium a-color-base'}).text
revdiv3=soup2.find('div',attrs={'class':'a-section a-spacing-large'})
reviews3=[]
for row in revdiv3.findAll('a',attrs={'class':'a-size-base a-link-normal review-title a-color-base review-title-content a-text-bold'}):
    reviews3.append(row.text.replace("\n",""))
# print(rating3)
#4th url
file=open(R"C:\xamppnew\htdocs\Amazon\listing\c4.txt","r",encoding="utf-8")
URL4=file.readline()
file.close()
# URL4=input("Enter An Amazon URL : ")
# print(URL4)
page3=requests.get(URL4,headers=headers)
soup3 = BeautifulSoup(page3.content, 'lxml')
name4 = soup3.find(id="productTitle").text
# print("Name:",name4.strip())
price4=soup3.find(id="priceblock_ourprice").text
# print("Price:",price4.strip())
rating4=soup3.find('span',attrs={'class':'a-size-medium a-color-base'}).text
revdiv4=soup3.find('div',attrs={'class':'a-section a-spacing-large'})
reviews4=[]
for row in revdiv4.findAll('a',attrs={'class':'a-size-base a-link-normal review-title a-color-base review-title-content a-text-bold'}):
    reviews4.append(row.text.replace("\n",""))
# print(rating4)


# writing to file
#with open('C:\xamppnew\htdocs\Amazon review\listing\out.txt','w') as f:
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cname1.txt","w",encoding="utf-8")
file.write(str(name1))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cprice1.txt","w",encoding="utf-8")
file.write(price1.replace('₹',''))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\crate1.txt","w",encoding="utf-8")
file.write(str(rating1))
file.write("\n") 

file=open(r"C:\xamppnew\htdocs\Amazon\listing\reviews1.csv","w",encoding="utf-8")
file.write("text,label")
file.write("\n")
for i in range(len(reviews1)):
    file.write(str(reviews1[i]))
    file.write("\n")


# writing to file
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cname2.txt","w",encoding="utf-8")
file.write(str(name2))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cprice2.txt","w",encoding="utf-8")
file.write(price2.replace('₹',''))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\crate2.txt","w",encoding="utf-8")
file.write(str(rating2))
file.write("\n") 

file=open(r"C:\xamppnew\htdocs\Amazon\listing\reviews2.csv","w",encoding="utf-8")
file.write("text,label")
file.write("\n")
for i in range(len(reviews2)):
    file.write(str(reviews2[i]))
    file.write("\n")

# writing to file
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cname3.txt","w",encoding="utf-8")
file.write(str(name3))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cprice3.txt","w",encoding="utf-8")
file.write(price3.replace('₹',''))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\crate3.txt","w",encoding="utf-8")
file.write(str(rating3))
file.write("\n") 

file=open(r"C:\xamppnew\htdocs\Amazon\listing\reviews3.csv","w",encoding="utf-8")
file.write("text,label")
file.write("\n")
for i in range(len(reviews3)):
    file.write(str(reviews3[i]))
    file.write("\n")

# writing to file
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cname4.txt","w",encoding="utf-8")
file.write(str(name4))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\cprice4.txt","w",encoding="utf-8")
file.write(price4.replace('₹',''))
file.write("\n")
file=open(R"C:\xamppnew\htdocs\Amazon\listing\crate4.txt","w",encoding="utf-8")
file.write(str(rating4))
file.write("\n") 

file=open(r"C:\xamppnew\htdocs\Amazon\listing\reviews4.csv","w",encoding="utf-8")
file.write("text,label")
file.write("\n")
for i in range(len(reviews4)):
    file.write(str(reviews4[i]))
    file.write("\n")