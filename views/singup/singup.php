<?php
//echo "REQUEST_METHOD={$_SERVER['REQUEST_METHOD']}\r\n";
//print_r($_POST);

//exit;
require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';

?>



    
    <div class="guest">
    <div class="guesttop"></div>
    <div class="guestleft"></div>
    <div class="login1">
      <form class="login" method="POST">
        <div class="title">
            <p>Регистрация</p>
        </div>
        <div class="passwords">
            <input name="username" type="text" id="input-name-singup" placeholder=" Name">
            <input name="mail" type="email" id="input-email-singup" placeholder=" Email">
            <input name="pass" type="password" id="input-password-singup" placeholder=" Password">
        </div>
        <div class="button">
            <input name="button_singup" type="submit" id="singup-button" value="Sing Up">
        </div>
      </form>
    </div>
    <div class="guestright"></div>
    <div class="guestbase"></div>
   
    <?php
   /* if (!isset($_POST['username'])) die('Не передано имя');
    echo '<pre>';

    if ($result) {
        echo $username;
        echo $mail;
        echo $pass;
    }
    else{
        echo "dsfsd";
    }
    echo"</pre>";
    
    ?>*/
    ?>
</div>
</body>
</html>