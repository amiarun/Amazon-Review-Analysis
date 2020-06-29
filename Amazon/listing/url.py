import re
import requests
from bs4 import BeautifulSoup
from nltk.stem import PorterStemmer 
from nltk.tokenize import word_tokenize 
ps = PorterStemmer() 

# enter the url of product
file=open(R"C:\xamppnew\htdocs\Amazon\listing\t1.txt","r",encoding="utf-8")
URL=file.readline()
file.close()

# URL=input("Enter An Amazon URL : ")
# print(URL)
headers = {"User-Agent": 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36'}
page = requests.get(URL, headers=headers)
soup = BeautifulSoup(page.content, 'lxml')
# fecth the name of product
name = soup.find(id="productTitle").text
print("Name:",name.strip())
# print("\n")

# fecth price of product
price=soup.find(id="priceblock_ourprice").text
# print("Price:",price.strip())
# print("\n")


# prod Rating
rating=soup.find('span',attrs={'class':'a-size-medium a-color-base'}).text
# print(rating)
# print("\n")

#product detail and Tecnology
detail=soup.find(id="feature-bullets").text
# print("Product Details:",detail)
# tech=soup.find('div',attrs={'class':'content pdClearfix'}).text
# print("product Technical:",tech)

# fecth review and discription of product
discription=soup.find(id="productDescription").text
revdiv=soup.find('div',attrs={'class':'a-section a-spacing-large'})
reviews=[]
for row in revdiv.findAll('a',attrs={'class':'a-size-base a-link-normal review-title a-color-base review-title-content a-text-bold'}):
    reviews.append(row.text.replace("\n",""))
# print("reviews :",reviews) 
# print("\n") 
revdetail=[]
for row in revdiv.findAll('div',attrs={'class':'a-expander-content reviewText review-text-content a-expander-partial-collapse-content'}):
    revdetail.append(row.text.replace("\n",""))
# print("reviews in detail :",revdetail) 



#more reviews from next page
URL1=URL.replace(R"/dp/","/product-reviews/")+'&pageNumber=2'
# print(URL1)
page1=requests.get(URL1,headers=headers)
soup1 = BeautifulSoup(page1.content, 'lxml')
#new reviews
revdiv1=soup1.find('div',attrs={'class':'a-section a-spacing-small page-content page-min-width'})
# reviews=[]
for row in revdiv1.findAll('a',attrs={'class':'a-size-base a-link-normal review-title a-color-base review-title-content a-text-bold'}):
    reviews.append(row.text.replace("\n",""))
# print("reviews :",reviews) 
# print("\n") 
# revdetail=[]
for row in revdiv1.findAll('div',attrs={'class':'a-row a-spacing-small review-data'}):
    revdetail.append(row.text.replace("\n",""))
# print("reviews in detail :",revdetail) 
# writing to file
#with open('C:\xamppnew\htdocs\Amazon review\listing\out.txt','w') as f:
file=open(r"C:\xamppnew\htdocs\Amazon\listing\name.txt","w",encoding="utf-8")
file.write(str(name))
file.write("\n")
file=open(r"C:\xamppnew\htdocs\Amazon\listing\price.txt","w",encoding="utf-8")
file.write(price.replace('₹',''))
file.write("\n")
file=open(r"C:\xamppnew\htdocs\Amazon\listing\rate.txt","w",encoding="utf-8")
file.write(str(rating))
file.write("\n") 
file=open(r"C:\xamppnew\htdocs\Amazon\listing\detail.txt","w",encoding="utf-8")
file.write(str(detail))
file.write("\n")
file=open(r"C:\xamppnew\htdocs\Amazon\listing\reviews.csv","w",encoding="utf-8")
file.write("text,label")
file.write("\n")
for i in range(len(reviews)):
    file.write(str(reviews[i]))
    file.write("\n")
file=open(r"C:\xamppnew\htdocs\Amazon\listing\revdetail.txt","w",encoding="utf-8")   
for i in range(len(revdetail)):
    file.write(str(revdetail[i]))
    file.write("\n")
file.close()
# print(reviews)
# print(revdetail)
# print(tech)
# print("reviwes to be proccesed\n")
# # after stemming
# for r in reviews: 
#     print(r, " : ", ps.stem(r)) 
# for r in revdetail:
#     print(r, " : ", ps.stem(r))