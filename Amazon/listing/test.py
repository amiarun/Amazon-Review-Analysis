# import nltk
# nltk.download('averaged_perceptron_tagger')
import pandas as pd
import numpy as np
from nltk.tokenize import word_tokenize
from nltk import pos_tag
from nltk.corpus import stopwords
from nltk.stem import WordNetLemmatizer
from collections import defaultdict
from nltk.corpus import wordnet as wn
import pickle
import sklearn.svm 
import matplotlib.pyplot as plt

#Set Random seed
np.random.seed(500)

# Add the Data using pandas
Corpus1 = pd.read_csv(R"C:\xamppnew\htdocs\Amazon\listing\reviews.csv",encoding='latin-1')

#Data Pre-processing - This will help in getting better results through the classification algorithms

#Remove blank rows if any.
Corpus1['text'].dropna(inplace=True)

#Change all the text to lower case. This is required as python interprets 'dog' and 'DOG' differently
Corpus1['text'] = [entry.lower() for entry in Corpus1['text']]

#Tokenization : In this each entry in the corpus will be broken into set of words
Corpus1['text']= [word_tokenize(entry) for entry in Corpus1['text']]

#Remove Stop words, Non-Numeric and perfom Word Stemming/Lemmenting.
# WordNetLemmatizer requires Pos tags to understand if the word is noun or verb or adjective etc. By default it is set to Noun
tag_map = defaultdict(lambda : wn.NOUN)
tag_map['J'] = wn.ADJ
tag_map['V'] = wn.VERB
tag_map['R'] = wn.ADV


for index,entry in enumerate(Corpus1['text']):
    # Declaring Empty List to store the words that follow the rules for this step
    Final_words = []
    # Initializing WordNetLemmatizer()
    word_Lemmatized = WordNetLemmatizer()
    # pos_tag function below will provide the 'tag' i.e if the word is Noun(N) or Verb(V) or something else.


    for word, tag in pos_tag(entry):
        # Below condition is to check for Stop words and consider only alphabets
        if word not in stopwords.words('english') and word.isalpha():
            word_Final = word_Lemmatized.lemmatize(word,tag_map[tag[0]])
            Final_words.append(word_Final)
    # The final processed set of words for each iteration will be stored in 'text_final'
    Corpus1.loc[index,'text_final'] = str(Final_words)


#Split the model into Train and Test Data set
Test_X1 = Corpus1['text_final']

#Vectorize the words by using TF-IDF Vectorizer - This is done to find how important a word in document is in comaprison to the corpus
Tfidf_vect = pickle.load(open(R'C:\xamppnew\htdocs\Amazon\listing\tfidf.sav', 'rb'))

Test_X_Tfidf1 = Tfidf_vect.transform(Test_X1)

SVM = pickle.load(open(R'C:\xamppnew\htdocs\Amazon\listing\model_svm.sav', 'rb'))

predictions_SVM1 = SVM.predict(Test_X_Tfidf1)

#print(predictions_SVM1)
Encoder = pickle.load(open(R'C:\xamppnew\htdocs\Amazon\listing\label.sav', 'rb'))
op=Encoder.inverse_transform(predictions_SVM1)

file=open(R"C:\xamppnew\htdocs\Amazon\listing\polarity.txt","w",encoding="utf-8")
for i in range(len(op)):
    file.write(str(op[i]))
    file.write("\n")
file.close()

#Polarity Calculation
pscore=0
nscore=0
for i in range(len(op)):
    if(op[i]=='Positive'):
        pscore=pscore+1
    else:
        nscore=nscore+1
pos=round(pscore/len(op)*10,2)
neg=nscore/len(op)*10

file=open(R"C:\xamppnew\htdocs\Amazon\listing\pscore.txt","w",encoding="utf-8")
file.write(str(pos))
file.write(" out of 10 \n")
file.close()
#Figure
fig = plt.figure()
ax = fig.add_axes([0,0,1,1])
ax.axis('equal')
langs = ['Positive','Negative']
students = [pos,neg]
ax.pie(students, labels = langs,autopct='%1.2f%%')
plt.savefig(R"C:\xamppnew\htdocs\Amazon\listing\pie.png")
