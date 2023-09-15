// Function that refreshes the date and time in the taskbar
function refresh_dateTime() {
  var refresh = 1000; // Refresh rate in milli seconds
  mytime = setTimeout("dateTime()", refresh);
}
// Function for the date and time bottom right in the taskbar
function dateTime() {
  // get current date/time
  var date = new Date();
  // Get the current day in the format dd/mm/yyyy
  var day =
    date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
  // Get current time in format mm:ss
  var time = 
    date.getHours().toString().padStart(2, "0") + ":" + date.getMinutes().toString().padStart(2, "0");
  // Inserts date and time into html document
  document.getElementById("display_date").innerHTML = day;
  document.getElementById("display_time").innerHTML = time;
  // start 1 second timer before repeating
  refresh_dateTime();
}

