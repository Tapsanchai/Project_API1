import requests
import json 

#WeatherToday
WeatherToday_url = "https://data.tmd.go.th/api/WeatherToday/V1/?type=json"
response1 = requests.get(WeatherToday_url)
result1 = json.loads(response1.text)

#Value of WeatherToday
Now_Datetime = result1['Header']['LastBuiltDate']
Now_City = result1['Stations'][2]['StationNameTh']
Now_Temperature = result1['Stations'][2]['Observe']['Temperature']['Value']
Data_WeatherToday = {"Datetime":Now_Datetime, "City":Now_City, "Tem":Now_Temperature}