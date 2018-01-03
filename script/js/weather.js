// Weather - Openweathermap.org API - Markle
$.getJSON('http://api.openweathermap.org/data/2.5/weather?id=4923226&units=imperial&APPID=180f0c84f43029018bef20431f8b0416', function(data) {
  console.log(data.name);
  $('#currentTemp').text(data.main.temp + '°');
  $('#description').text(data.weather[0].main);
})
