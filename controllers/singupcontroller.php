<?php

$username = null;
$mail = null;
$pass = null;
$result = false;



if (!empty($_POST)){
    if ( !$_POST['username'] or !$_POST['mail'] or !$_POST['pass']){
        echo "Заполните все поля";
    }
        else{
                    $pdo = makeConnection();
                    $sql = "INSERT INTO singup (username, mail, pass) VALUES(?, ?, ?)";
                    $stmt = $pdo->prepare($sql);
        
        
                    $stmt->bindParam(1, $username);
                    $stmt->bindParam(2, $mail);
                    $stmt->bindParam(3, $pass);
                
                    $username = htmlspecialchars($_POST['username']);
                    $mail = htmlspecialchars($_POST['mail']);
                    $pass = htmlspecialchars($_POST['pass']);   
                    $stmt->execute();
            }
        
        
    


        
        //подключение  
       /* $conn = mysqli_connect(HOST, DBUSER, DBPASSWORD,
        DATABASE) or die("Ошыбка" . mysqli_error($conn));
    
    
        


        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);
        $pass = htmlspecialchars($_POST['pass']);
        
        $checkmail=mysqli_query($conn,"SELECT mail FROM singup WHERE mail='".$mail."'");
        $numrows=mysqli_num_rows($checkmail);    
        if($numrows!=0) { 
              while ($row=mysqli_fetch_assoc($checkmail)){
                    $dbmail = $row['mail'];
                }
                if($mail==$dbmail){
                    

                     mysqli_close($conn);
                     print("Этот еmail уже зарегистрирован");
                
                
                    } } 
               
                      $sql = "INSERT INTO singup (username, mail, pass)
                     VALUES('$username','$mail','$pass')" ;     
                     $result=mysqli_query($conn, $sql);
                     if($result == 'TRUE'){
                        echo"Спасибо за регистрацию, чтобы  <a href='/login'>Войти</a>" ; 
                     }
          
            
      

   
        mysqli_close($conn);*/

        
    }


require_once VIEWS.'singup/singup.php';  
