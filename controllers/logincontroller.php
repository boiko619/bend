<?php




$login = null;
$pass = null;
$result = false;

if (!empty($_POST)){
    if ( !$_POST['login'] or !$_POST['pass']){
        echo "Заполните все поля";
    }
    else{ //подключение  
        $conn = mysqli_connect(HOST, DBUSER, DBPASSWORD,
        DATABASE) or die("Ошыбка" . mysqli_error($conn));
    
    
        


 
        $login = htmlspecialchars($_POST['login']);
        $pass = htmlspecialchars($_POST['pass']);
        
        $checklogin=mysqli_query($conn,"SELECT * FROM admin WHERE login='".$login."' 
        AND pass='".$pass."' ");
        $numrows=mysqli_num_rows($checklogin);    
        if($numrows!=0) { 
              while ($row=mysqli_fetch_assoc($checklogin)){
                    $dblogin = $row['login'];
                    $dbpass = $row['pass'];
                }
                if($login==$dblogin && $pass==$dbpass){
                    session_start();//стартуем сессию
                    $_SESSION['$logSESS'] = $row[login];//создаем глобальную переменную
                    header("location: closeadminclose");//переносим пользователя на главную страницу
                    exit;	

                    } 
                else{
                    echo"Ошибка";
                }
                
                    
                
                } 
               
                   
                              
            
      

   
        mysqli_close($conn);
    
    }
}
require_once VIEWS.'login/login.php';
