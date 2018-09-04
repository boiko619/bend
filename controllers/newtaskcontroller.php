<?php

$name=NULL;
$mail=NULL;
$task=NULL;
$foto=NULL;
$result = false;


if (!empty($_POST)){
    if ( !$_POST['name'] or !$_POST['mail'] or !$_POST['task'] or !$_POST['foto']){
        echo "Заполните все поля";
    }
    else{ //подключение  
        $conn = mysqli_connect(HOST, DBUSER, DBPASSWORD,
        DATABASE) or die("Ошыбка" . mysqli_error($conn));
    
        
        if (isset($_FILES['foto'])) {
            //Каталог загрузки картинок
            $uploadDir = 'media';
                
            //Вывод ошибок
            $errors = array();
            // pathinfo — Возвращает информацию о пути к файлу
            $type = pathinfo($_FILES['foto']['name']);
            $file_ext = strtolower($type['extension']);

            $expensions= array("jpeg","jpg","png",'gif');
            //Определяем типы файлов для загрузки
            $fileTypes = array(
                'jpg' => 'image/jpeg',
                'png' => 'image/png',
                'gif' => 'image/gif'
            );

            //Проверяем пустые данные или нет
            if (empty($_FILES)) {
                $errors[] = 'File name must have name';
            } elseif ($_FILES['foto']['error'] > 0) {
                // Проверяем на ошибки
                $errors[] = $_FILES['foto']['error'];
            } elseif ($_FILES['foto']['size'] > 2097152) {
                // если размер файла превышает 2 Мб
                $errors[] = 'File size must be excately 2 MB';
            } elseif (in_array($file_ext, $expensions)=== false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            } elseif (!in_array($_FILES['foto']['type'], $fileTypes)) {
                // Проверяем тип файла
                $errors[] = 'Запрещённый тип файла';
            }
            
            if (empty($errors)) {
            
                $type = pathinfo($_FILES['foto']['name']);
                $name = uniqid('files_') .'.'. $type['extension'];
                move_uploaded_file($_FILES['foto']['tmp_name'], $uploadDir.'/'.$name);
               

             
           
 
                $opts['foto_id'] = (int)Product::lastId();
                $opts['foto'] = $this->_resource;
                Picture::store($opts);

            } else {
                print_r($errors);
            }
        }
        


        $name = htmlspecialchars($_POST['name']);
        $mail = htmlspecialchars($_POST['mail']);
        $task = htmlspecialchars($_POST['task']);
        
            
                    
               
        $sql = "INSERT INTO newpost(name, mail, task)
        VALUES('$name','$mail','$task')" ;     
        $result=mysqli_query($conn, $sql);
        if($result == 'TRUE'){
        echo"Спасибо за регистрацию, чтобы  <a href='/login'>Войти</a>" ; 
                     }
          
            
      

   
        mysqli_close($conn);
    
    }


}
require_once VIEWS.'newtask/newtask.php';

  