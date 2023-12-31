<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script defer type="text/javascript" src="javascript.js"></script>
</head>

<body onload=dateTime();>
    <div class=wrapper>
        <div class=desktop>
            <div class="apps">
                <?php
                require_once "backend/connection.php";
                $id = 0;
                $stmt = $con->prepare("SELECT `id`, `type`, `inside`, `location`, `filename`, `content` FROM `content` where `inside` = 'desktop' and `disabled` = '0'");
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    $id++;
                    $databaseId = $row['id'];
                    $type = $row['type'];
                    $inside = $row['inside'];
                    $location = $row['location'];
                    $filename = $row['filename'];
                    $content = $row['content'];


                    switch ($type) {
                        case 'pdf':
                            echo '<div class="icon" id="icon' . $id . '">
                            <img src="./images/application-pdf.svg" alt="PDF Icon">
                            <p>' . $filename . '</p>
                        </div>';
                            echo '<div class="pdf-overlay" id="overlay' . $id . '">
                            <div class="pdf-overlay-window">
                                <div class="overlay-content-topbar">
                                    <div class="overlay-content-topbar-icon">
                                        <img src="./images/application-pdf.svg" alt="PDF Icon">
                                    </div>
                                    <div class="overlay-content-topbar-closebutton">
                                        <button class="closeButton" id="closeOverlay' . $id . '"><img src="./images/cross.svg" alt="Close button"></button>
                                    </div>
                                </div>
                                <h2>' . $filename . '</h2>
                                <div class="pdf-overlay-content">
                                    <p>' . $content . '</p>
                                </div>
                            </div>
                        </div>';
                            break;

                        case 'explorer':

                            echo '<div class="icon" id="icon' . $id . '">
                            <img src="./images/system-file-manager.svg" alt="PDF Icon">
                            <p>' . $filename . '</p>
                        </div> <div class="explorer-overlay" id="overlay' . $id . '">
                            <div class="explorer-overlay-window">
                                <div class="explorer-overlay-grid">
                                    <div class="explorer-overlay-ribbon">
                                        <div class="overlay-content-topbar">
                                            <div class="overlay-content-topbar-icon">
                                                <img src="./images/system-file-manager.svg" alt="PDF Icon">
                                            </div>
                                            <button class="closeButton" id="closeOverlay' . $id . '"><img src="./images/cross.svg" alt="Close button"></button>
                                        </div>
                                    </div>
                                    <div class="explorer-overlay-navigationPane"></div>
                                    <div class="explorer-overlay-content">';

                            $statement = $con->prepare("SELECT `id`, `type`, `inside`, `location`, `filename`, `content` FROM `content` where `inside` = 'explorer' and `location` = ?  and `disabled` = '0'");
                            $statement->bind_param("i", $databaseId);
                            $statement->execute();
                            $results = $statement->get_result();
                            while ($row = $results->fetch_assoc()) {
                                $id++;
                                $type = $row['type'];
                                $inside = $row['inside'];
                                $location = $row['location'];
                                $filename = $row['filename'];
                                $content = $row['content'];
                                echo '<div class="icon" id="icon' . $id . '">
                                        <img src="./images/application-pdf.svg" alt="PDF Icon">
                                        <p>' . $filename . '</p>
                                    </div> <div class="pdf-overlay" id="overlay' . $id . '">
                                    <div class="pdf-overlay-window">
                                        <div class="overlay-content-topbar">
                                            <div class="overlay-content-topbar-icon">
                                                <img src="./images/application-pdf.svg" alt="PDF Icon">
                                            </div>
                                            <div class="overlay-content-topbar-closebutton">
                                                <button class="closeButton" id="closeOverlay' . $id . '"><img src="./images/cross.svg" alt="Close button"></button>
                                            </div>
                                        </div>
                                        <h2>' . $filename . '</h2>
                                        <div class="pdf-overlay-content">
                                            <p>' . $content . '</p>
                                        </div>
                                    </div>
                                </div>';
                            };
                            echo '</div>
                                    </div>
                                </div>
                            </div>';
                            break;

                        case 'desktop':

                            break;

                        default:
                            break;
                    }
                }
                $id++;
                echo '<div class="icon" id="icon' . $id . '">
                <img src="./images/info.svg" alt="Info center Icon">
                <p>Info center</p>
            </div>';

                echo '<div class="info-overlay" id="overlay' . $id . '">
                <div id="closeOverlay' . $id . '">
                    <div class="infoText">
                        <h3>Welcome to my website</h3>
                        <p>To learn more about Lily you can open the pdf\'s and explorer by clicking them.</p>
                        <p>To close this info popup, click on me!</p>
                    </div>
                </div>
            </div>';

                ?>
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