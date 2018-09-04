<?php
require_once VIEWS.("shared/head.php");
require_once VIEWS.("shared/navigation.php");
?>



<form enctype="multipart/form-data" method="post">
            <div class=creative>
                <div class="newpost">
                    <input name="name" type="text" id="input-name" placeholder=" Name">
                    <input name="mail" type="mail" id="input-email" placeholder=" Email">
                </div>
                <div class="text">
                     <textarea name="task" id="input-task" placeholder="Задание"></textarea>
                
                </div>
                <div class="foto_creative">
                    <input name="foto" type="file" id="input-foto" >
                    
                </div>
            </div>
            <div class="buttoncreative">
                <input type="button" value="предварительный просмотр" id="button_watch">
                <input type="submit" value="Загрузить" id="button_save"/>
            </div></form>
