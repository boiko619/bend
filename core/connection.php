<?php

function makeConnection()
{
  $db = include CONFIG.'db.php';

  $config = $db['database'];

  try {
    return new PDO(
      $config['connection'].';dbname='.$config['name'],
      $config['user'],
      $config['pass'],
      $config['options']
    );
  }
  catch(PDOException $e) {
      echo "SQL, у нас проблемы.\n" . $e->getMessage();
      file_put_contents('PDOErrors.log', $e->getMessage(), FILE_APPEND);
  }
}