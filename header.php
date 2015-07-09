<?php  
?>
        <div id ="header" >
            <div id="login">
                
                
                
                
                    <p class="loggedIn2" hidden>user name</p> 
                    <input class="loginBox loggedIn1" type="text" id="username"  placeholder='User name' onchange="loginCheck()">
                    <input class="loginBox loggedIn1" type="text" id="password"  placeholder='Password' onchange="loginCheck()">
                    <input class="loginBox loggedIn2" hidden type="button" name="logOff" value="Log Off" onclick="login()">
                
                 
            </div>
            <div id="titleOfPage">
                <h1><?php echo $pageTitle;  ?></h1> 
            
            </div>
            
            
            
        </div><!-- /container -->