<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/js/bootstrap.min.js">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div id="content" class="col-lg-6">
                <h1>CI/CD DEMO</h1>
                <div class="marquee">
                    <div>
                        <span>Mandatory silly marquee. Actually done with CSS.</span>
                        <span>Mandatory silly marquee. Actually done with CSS.</span>
                    </div>
                </div>
                <?php
                    if (!isset($_SESSION["count"])) {
                        $_SESSION["count"] = 0;
                    }

                    $count = $_SESSION["count"]++;

                    print("<span>You have visited $count times recently.</span>\n")
                ?>
                <ul>
                <?php
                    for ($i = 0; $i < $count; $i++) {
                        print("<li>$i</li>\n");
                    }
                ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>