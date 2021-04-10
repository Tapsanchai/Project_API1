import requests
import json 

#AQI_PM2.5
PM_2_5_url = "http://api.airvisual.com/v2/city?city=Chiang Rai&state=Chiang Rai&country=Thailand&key=eb400bfd-3588-4482-9411-5fd3d7d434a8"
response3 = requests.get(PM_2_5_url)
result3 = json.loads(response3.text)

Now_AQI = result3['data']['current']['pollution']['aqius']
#print("ดัชนี AQI(PM2.5): ", Now_AQI)
