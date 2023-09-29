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
                <div class="icon" id="icon1">
                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                    <p>About me.pdf</p>
                </div>
                <div class="icon" id="icon2">
                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                    <p>Projects summary.pdf</p>
                </div>
                <div class="icon" id="icon3">
                    <img src="./images/system-file-manager.svg" alt="PDF Icon">
                    <p>All projects</p>
                </div>
                <div class="icon" id="icon4">
                    <img src="./images/info.svg" alt="Info center Icon">
                    <p>Info center</p>
                </div>
                <div>

                    <div class="info-overlay" id="overlay4">
                        <div id="closeOverlay4">
                            <div class="infoText">
                                <h3>Welcome to my website</h3>
                                <p>To learn more about Lily you can open the pdf's and explorer by clicking them.</p>
                                <p>To close this info popup, click on me!</p>
                            </div>
                        </div>
                    </div>

                    <div class="pdf-overlay" id="overlay1">
                        <div class="pdf-overlay-window">
                            <div class="overlay-content-topbar">
                                <div class="overlay-content-topbar-icon">
                                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                                </div>
                                <div class="overlay-content-topbar-closebutton">
                                    <button class="closeButton" id="closeOverlay1"><img src="./images/cross.svg" alt="Close button"></button>
                                </div>
                            </div>
                            <h2>About me</h2>
                            <div class="pdf-overlay-content">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                <img src="images/personal-picture.jpg" alt="Picture of myself">
                            </div>
                        </div>
                    </div>

                    <div class="pdf-overlay" id="overlay2">
                        <div class="pdf-overlay-window">
                            <div class="overlay-content-topbar">
                                <div class="overlay-content-topbar-icon">
                                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                                </div>
                                <button class="closeButton" id="closeOverlay2"><img src="./images/cross.svg" alt="Close button"></button>
                            </div>
                            <h2>My projects</h2>
                            <div class="pdf-overlay-content">
                                <p>This website</p>
                            </div>
                        </div>
                    </div>

                    <div class="explorer-overlay" id="overlay3">
                        <div class="explorer-overlay-window">
                            <div class="explorer-overlay-grid">
                                <div class="explorer-overlay-ribbon">
                                    <div class="overlay-content-topbar">
                                        <div class="overlay-content-topbar-icon">
                                            <img src="./images/system-file-manager.svg" alt="PDF Icon">
                                        </div>
                                        <button class="closeButton" id="closeOverlay3"><img src="./images/cross.svg" alt="Close button"></button>
                                    </div>
                                </div>
                                <div class="explorer-overlay-navigationPane">

                                </div>
                                <div class="explorer-overlay-content">
                                    <div class="icon" id="icon6">
                                        <img src="./images/application-pdf.svg" alt="PDF Icon">
                                        <p>Test.pdf</p>
                                    </div>
                                    <div class="icon" id="icon7">
                                        <img src="./images/info.svg" alt="Info center Icon">
                                        <p>Info center</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pdf-overlay" id="overlay6">
                        <div class="pdf-overlay-window">
                            <div class="overlay-content-topbar">
                                <div class="overlay-content-topbar-icon">
                                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                                </div>
                                <div class="overlay-content-topbar-closebutton">
                                    <button class="closeButton" id="closeOverlay6"><img src="./images/cross.svg" alt="Close button"></button>
                                </div>
                            </div>
                            <h2>About me</h2>
                            <div class="pdf-overlay-content">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                <img src="images/personal-picture.jpg" alt="Picture of myself">
                            </div>
                        </div>
                    </div>
                    <div class="pdf-overlay" id="overlay7">
                        <div class="pdf-overlay-window">
                            <div class="overlay-content-topbar">
                                <div class="overlay-content-topbar-icon">
                                    <img src="./images/application-pdf.svg" alt="PDF Icon">
                                </div>
                                <div class="overlay-content-topbar-closebutton">
                                    <button class="closeButton" id="closeOverlay7"><img src="./images/cross.svg" alt="Close button"></button>
                                </div>
                            </div>
                            <h2>About me</h2>
                            <div class="pdf-overlay-content">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                <img src="images/personal-picture.jpg" alt="Picture of myself">
                            </div>
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