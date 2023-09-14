<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script type="text/javascript">
        function display_dateTime() {
            var refresh = 1000; // Refresh rate in milli seconds
            mytime = setTimeout('dateTime()', refresh)
        }

        function dateTime() {
            var date = new Date()
            var day = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
            var time = date.getHours() + ":" + date.getMinutes();
            document.getElementById('display_date').innerHTML = day;
            document.getElementById('display_time').innerHTML = time;
            display_dateTime();
        }
    </script>
</head>

<body onload=dateTime();>
    <div class=wrapper>
        <div class=desktop>

        </div>
        <div class=taskbar>
            <div class="taskbarLeft">
                <div class=startMenuButton>
                    <img src="./images/wip-icon.png" alt="Start menu button">
                </div>
            </div>
            <div class="taskbarRight">
                <div class=time>
                    <span id='display_time'></span><br>
                    <span id='display_date'></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>