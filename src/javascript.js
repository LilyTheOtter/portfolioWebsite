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
    date.getHours().toString().padStart(2, "0") +
    ":" +
    date.getMinutes().toString().padStart(2, "0");
  // Inserts date and time into html document
  document.getElementById("display_date").innerHTML = day;
  document.getElementById("display_time").innerHTML = time;
  // start 1 second timer before repeating
  refresh_dateTime();
}

document.addEventListener("DOMContentLoaded", function () {
  // Get the overlay and close button elements
  const overlay = document.getElementById("overlay");
  const closeOverlayButton = document.getElementById("closeOverlay");
  const overlayTaskbar = document.querySelector('.aboutme-overlay-content-topbar');

  let isDragging = false;
  let offsetX, offsetY;

  // Get the icon elements
  const aboutmeIcon = document.getElementById("aboutmeIcon");
  // Add click event listener to open the overlay
  aboutmeIcon.addEventListener("click", function () {
    overlay.style.display = "flex";
  });

  // Add click event listener to close the overlay
  closeOverlayButton.addEventListener("click", function () {
    overlay.style.display = "none";
  });

  document.addEventListener("mousemove", function (e) {
    if (isDragging) {
      overlay.style.left = e.clientX - offsetX + "px";
      overlay.style.top = e.clientY - offsetY + "px";
    }
  });

  document.addEventListener("mouseup", function () {
    overlayTaskbar.style.removeProperty("cursor")
    isDragging = false;
  });

  overlayTaskbar.addEventListener("mousedown", function (e) {
    overlayTaskbar.style.cursor = "grabbing"
    isDragging = true;
    offsetX = e.clientX - overlay.offsetLeft;
    offsetY = e.clientY - overlay.offsetTop;
  });
});