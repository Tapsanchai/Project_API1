<!DOCTYPE html>
<html lang="en">

<head>
  <title>Weather API</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="../static/icon_web.png" rel="shortcut icon" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

  <!-- Owl Carousel2 CSS (Make Slider) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mitr&effect=shadow-multiple" />

  <style>
    body {
      font-family: "Mitr", serif;
    }

    .bg-image {
      background-image: url("../static/bg1.jpg");
      height: auto;
      width: 100%;
    }

    .bg-weather-size {
      width: 100px !important;
      height: auto;
    }

    .owl-carousel .owl-item img {
      display: inline !important;
    }

    @media (min-width: 350px) {
      .margin-nameproject {
        margin-top: 20px;
      }
    }

    @media (min-width: 700px) {
      .margin-nameproject {
        margin-top: 0px;
      }
    }
  </style>
</head>

<body style="background-color: #eef7ff">
  <div class="container-fluid">
    <div class="row">
      <div class="bg-image">
        <div class="container">
          <!-- 1 -->
          <div class="row mb-3">
            <div class="col-12">
              <div class="rounded-lg shadow bg-light">
                <div class="row p-3 justify-content-md-center">
                  <div class="col-sm-12 text-center">
                    <div class="margin-nameproject">
                      <div class="d-inline-flex">
                        <img class="" src="../static/logo_lanna.png" alt="" style="width: 60px; height: auto" />
                        <div class="ml-3 align-self-end text-left">
                          <h5 class="font-weight-bold">
                            การพัฒนาต้นแบบการนำเสนอข้อมูลอัตโนมัติผ่านเว็บแบบเรียลไทม์
                            โดยเทคโนโลยี API
                          </h5>
                          <h5 class="font-weight-bold">
                            Real-time web-based automated prototype
                            development By API technology
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 2 -->
          <div class="row">
            <div class="col-lg-12">
              <div class="shadow rounded-lg" style="background-color: #DEF8FF">
                <div class="p-4">
                  <h4 class="font-weight-bold font-effect-shadow-multiple">สภาพอากาศปัจจุบัน</h4>
                  <hr />
                  <div class="row justify-content-between align-items-end">
                    <div class="col-lg-5">
                      <div class="text-left pl-4">
                        {% if Value_WForcast.Forecast[0].WeatherDescriptionEn
                          == "Partly Cloudy" %}
                        <img class="bg-weather-size" src="../static//picture_Weather/PC.png" alt="" />
                        {% elif
                          Value_WForcast.Forecast[0].WeatherDescriptionEn ==
                          "Clear" %}
                        <img class="bg-weather-size" src="../static//picture_Weather/C.png" alt="" />
                        {% elif
                          Value_WForcast.Forecast[0].WeatherDescriptionEn ==
                          "Heavy Rain" %}
                        <img class="bg-weather-size" src="../static/picture_Weather/HR.png" alt="" />
                        {% endif %}
                      </div>
                      <div class="pl-4 pr-4">
                        <h5 class="font-weight-bold">
                          วัน/เดือน/ปี (เวลา):
                          <span class="text-secondary font-weight-normal">{{Value_WToday.Datetime}}</span>
                        </h5>
                        <h5 class="font-weight-bold">
                          จังหวัด:
                          <span class="text-secondary font-weight-normal">{{Value_WToday.City}}</span>
                        </h5>
                        <h5 class="font-weight-bold">
                          อุณหภูมิปัจจุบัน:
                          <span class="text-secondary font-weight-normal">{{Value_WToday.Tem}} °C</span>
                        </h5>
                        <h5 class="font-weight-bold">
                          สภาพอากาศ:
                          <span class="text-secondary font-weight-normal">{{Value_WForcast.Forecast[0].WeatherDescription}}
                            ({{Value_WForcast.Forecast[0].WeatherDescriptionEn}})</span>
                        </h5>
                        <h5 class="font-weight-bold">
                          แรงลม:
                          <span class="text-secondary font-weight-normal">{{Value_WForcast.Forecast[0].WindSpeed.Value}}
                            km/h</span>
                        </h5>
                        <h5 class="font-weight-bold">
                          ดัชนี AQI(PM2.5):
                          <span class="text-secondary font-weight-normal text-danger">{{Value_PM}}</span>
                        </h5>
                      </div>
                    </div>

                    <div class="col-lg-4 text-right">
                      <img class="img-fluid" src="../static/man_report_shadow.png" alt="" style="height: 290px; width: auto" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 ">

        <div class="mb-3">
          <h4 class="font-weight-bold font-effect-shadow-multiple">การพยากรณ์สภาพอากาศ</h4>
        </div>

        <!-- Start Loop Slider -->
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-theme">
              <!-- 1 card -->
              {% for i in Value_WForcast.Forecast if i !=
                Value_WForcast.Forecast[0] %}
              <div class="item">
                <div class="card mb-4 shadow border-light rounded-lg">
                  <div class="text-center pt-3 pl-2 pr-2 rounded-lg" style="background-color: #2561a1">
                    {% if i.WeatherDescriptionEn == "Partly Cloudy" %}
                    <img class="bg-weather-size " src="../static/picture_Weather/PC.png" alt="" />
                    {% elif i.WeatherDescriptionEn == "Clear" %}
                    <img class="bg-weather-size " src="../static/picture_Weather/C.png" alt="" />
                    {% elif i.WeatherDescriptionEn == "Heavy Rain" %}
                    <img class="bg-weather-size " src="../static/picture_Weather/HR.png" alt="" />
                    {% endif %}
                  </div>
                  <div class="card-body">
                    <h4 class="card-title font-weight-bold">{{i.Date}}</h4>
                    <h5 class="font-weight-bold">
                      จังหวัด:
                      <span class="text-secondary font-weight-normal">{{Value_WForcast.Forecast_City}}</span>
                    </h5>
                    <h5 class="font-weight-bold">
                      อุณหภูมิ:
                      <span class="text-secondary font-weight-normal">{{i.MaxTemperature.Value}} -
                        {{i.MinTemperature.Value}} °C</span>
                    </h5>
                    <h5 class="font-weight-bold">
                      สภาพอากาศ:
                      <span class="text-secondary font-weight-normal">{{i.WeatherDescription}}
                      </span>
                    </h5>
                    <h5 class="font-weight-bold">
                      แรงลม:
                      <span class="text-secondary font-weight-normal">{{i.WindSpeed.Value}} km/h</span>
                    </h5>
                  </div>
                </div>
              </div>
              {% endfor %}
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
  </div>
  <div class="container-fluid" style="background-color: #e1f4f9">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12 text-right mt-4 mb-2">
          <h5 class="font-weight-bold">จัดทำเว็บไซต์โดย</h5>
          <h5>นายธาราพิเชษฐ์ ขาวประโคน สส.2.2</h5>
          <h5>สาขาวิชาระบบสารสนเทศทางธุรกิจ (การจัดการระบบสารสนเทศ)</h5>
          <h5>
            บริหารธุรกิจบัณฑิต มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา เชียงราย
          </h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="../vendor/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 3,
          },
        },
      });
    });
  </script>
</body>

</html>