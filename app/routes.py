# app/routes.py: default route page
from app import app
from flask import render_template
from app.all_process_api import *


@app.route("/")
@app.route("/index")
def Show_Index():
    return render_template("index.php",Value_PM = Now_AQI,Value_WToday = Data_WeatherToday, Value_WForcast = Data_WeatherForecast7Days)


if __name__ == "__Main__":
    #app.debug = True
    #app.run(host='localhost', port=80)
    #app.debug = True
    app.run(debug=True) 
