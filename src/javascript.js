// TIME AND DATE SCRIPT

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


// OVERLAY SCRIPT

document.addEventListener("DOMContentLoaded", function () {
  // Get all elements with the class "icon"
  const icons = document.querySelectorAll(".icon");

  icons.forEach((icon, index) => {
    const overlay = document.getElementById(`overlay${index + 1}`);
    const closeOverlayButton = document.getElementById(
      `closeOverlay${index + 1}`
    );
    const overlayTaskbar = overlay.querySelector(
      ".overlay-content-topbar"
    );
    const closeButton = overlay.querySelector(".overlay-content-topbar-closebutton");
    const iconButton = overlay.querySelector(".overlay-content-topbar-icon");

    let isDragging = false;
    let offsetX, offsetY;

    icon.addEventListener("click", function () {
      overlay.style.display = "flex";
    });

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
      overlayTaskbar.style.removeProperty("cursor");
      isDragging = false;
    });

    overlayTaskbar.addEventListener("mousedown", function (e) {
      if (e.target !== closeButton && e.target !== iconButton) {
        overlayTaskbar.style.cursor = "grabbing";
        isDragging = true;
        offsetX = e.clientX - overlay.offsetLeft;
        offsetY = e.clientY - overlay.offsetTop;
        // Prevent text selection while dragging
        document.body.style.userSelect = "none";
      }
    });

    document.addEventListener("mouseup", function () {
      overlayTaskbar.style.removeProperty("cursor");
      isDragging = false;
      // Restore text selection
      document.body.style.userSelect = "auto";
    });
  });
});