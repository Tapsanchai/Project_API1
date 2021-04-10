import requests
import json 

#WeatherForecast7Days
WeatherForecast7Days_url = "http://data.tmd.go.th/api/WeatherForecast7Days/V1/?type=json"
response2 = requests.get(WeatherForecast7Days_url)
result2 = json.loads(response2.text)

#Value of WeatherForecast7Days
Forecast = result2['Provinces'][0]['SevenDaysForecast']
Forecast_City = result2['Provinces'][0]['ProvinceNameTh']
Forecast_Datetime = result2['Provinces'][0]['SevenDaysForecast'][0]['Date']
Data_WeatherForecast7Days = {"Forecast":Forecast, "Forecast_City":Forecast_City, "Forecast_Date":Forecast_Datetime}