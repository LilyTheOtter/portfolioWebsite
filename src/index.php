<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script type="text/javascript" src="javascript.js"></script>
</head>

<body onload=dateTime();>
    <div class=wrapper>
        <div class=desktop>
            <div class="apps">
                <div class="icon" id="aboutmeIcon">
                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                    <p>About me.pdf</p>
                </div>
                <div class="icon">
                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                    <p>Projects summary.pdf</p>
                </div>
                <div class="aboutme-overlay" id="overlay">
                    <div class="aboutme-overlay-window">
                        <div class="aboutme-overlay-content-topbar">
                            <button class="closeButton" id="closeOverlay"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></button>
                        </div>
                        <h2>About me</h2>
                        <div class="aboutme-overlay-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            <img src="images/personal-picture.jpg" alt="Picture of myself">
                        </div>
                    </div>
                </div>
            </div>
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