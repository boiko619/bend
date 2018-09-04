<?php
require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';
?>
        
        <form  method="post">
        
        <fieldset>
        <legend>Оставьте сообщение:</legend>
        Ваше имя: 
        
        <input type="text" name="name">
        <textarea rows="10" cols="45" name="message"></textarea>
        
        <input type="submit" value="Отправить сообщение">
        </fieldset>
        </form>
        <div class=all>
            <div class="sort">
                    <div class="fotosort">

                        </div>
                        <div class="namesort">
        
                        </div>
                        <div class="emailsort">
        
                        </div>
                        <div class="tasksort">
        
                        </div>
                        <div class="statussort">
        
                        </div>
                        <div class="viewsort">
        
                        </div>
            </div>
            <div class=center>
                <div class="foto">

                </div>
                <div class="name">

                </div>
                <div class="email">

                </div>
                <div class="task">

                </div>
                <div class="status">

                </div>
                <div class="view">

                </div>

            </div>
        </div>