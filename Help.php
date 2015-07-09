<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pageTitle = "Help";
?>
<html>
    <head><title><?php echo $pageTitle; ?> </title>
        <script type="text/javascript">
            var loggedIn = 0;
            function login() {
                if (loggedIn === 1) {
                    $(".loggedIn1").show();
                    $(".loggedIn2").hide();
                    loggedIn = 0;
                }
                else if (loggedIn === 0) {
                    $(".loggedIn1").hide();
                    $(".loggedIn2").show();
                    loggedIn = 1;
                }
            }
        </script>
        <?php include_once 'includeJavascript.php'; ?>
    </head>
    <body>
        <div id ="headerStyle" >
            <?php include_once 'header.php'; ?>
        </div>
        <div id ="sidebar" >
            <?php include_once 'popUpSidebar.php'; ?>
        </div>
        <div id="homePageContent">

        </div>
    </body> 
</html>