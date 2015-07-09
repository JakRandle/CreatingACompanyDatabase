<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pageTitle = "Home Page";
?>
<html>
    <head><title><?php echo $pageTitle; ?> </title>
        <script type="text/javascript">
            var loggedIn = 0;
//            function login() {
//                if (loggedIn === 1) {
//                    $(".loggedIn1").show();
//                    $(".loggedIn2").hide();
//                    loggedIn = 0;
//                }
//                else if (loggedIn === 0) {
//                    $(".loggedIn1").hide();
//                    $(".loggedIn2").show();
//                    loggedIn = 1;
//                }
//            }
//            
        </script>
       <script type="text/javascript" >
            //function used to change a single row of the input boxes 
            function loginCheck() {
                var tmp = "#username" ;
                var tmp2 ="#password";
                var fldval = $(tmp).val();
                var fldval2 = $(tmp2).val();
                $.ajax({
                    url: "ajaxLogin.php",
                    data: {"fldval": fldval,"fldval2": fldval2},
                    dataType: "json",
                    success: function (data)
                    {
                        
                    },
                    error: function (jqo, txt, err) {
                        alert(txt);
                    }
                });
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