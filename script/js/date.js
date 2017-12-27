var n = new Date();
var d = n.getDate();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
var day = days[n.getDay()];
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var m = months[n.getMonth()];
var y = n.getFullYear();
var h = n.getHours();
var min = n.getMinutes();

// Format Fix
if (min < 10) {
  min = "0" + min;
}

document.getElementById("time").innerHTML = h + ":" + min;
document.getElementById("day-of-week").innerHTML = day;
document.getElementById("date").innerHTML = d + " " + m + " " + y;
