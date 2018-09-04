<?php
require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';
?>               

<div class="guest">
    <div class="guesttop"></div>
    <div class="guestleft"></div>
    <div class="login1">
      <form class="login" method="POST">
        <div class="title">
            <p>Вход</p>
        </div>
        <div class="passwords">

            <input name="login" type="text" id="input-login" placeholder=" login">
            <input name="pass" type="password" id="input-password" placeholder=" Password">
        </div>
        <div class="button">
            <input name="button_log" type="submit" id="login-button" value="Login">
        </div>
    </form>
    </div>
    <div class="guestright"></div>
    <div class="guestbase"></div>
    
    
</div>
</body>
</html>