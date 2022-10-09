import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestClassifier    # Read data into pandas dataframe
#Serialize the model and save
import joblib


df=pd.read_csv(r'E:\python iti\graduation project\another v1\diabetes.csv')
#Define Feature Matrix (X) and Label Array (y)
X=df.drop(['Outcome'],axis=1)
y=df['Outcome']
# train model
lr=RandomForestClassifier(n_estimators=53, n_jobs=1,random_state=8)
lr.fit(X,y)

joblib.dump(lr, 'randomfs.pkl')
print("Random Forest Model Saved")#Load the model
lr = joblib.load('randomfs.pkl')# Save features from training
rnd_columns = list(X.columns)
joblib.dump(rnd_columns, 'rnd_columns.pkl')
print("Random Forest Model Colums Saved")