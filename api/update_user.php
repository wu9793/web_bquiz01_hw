<?php

include_once "db.php";
session_start();

// $sql="update `users` set `acc`='{$_POST['acc']}',
//                          `pw`='{$_POST['pw']}',
//                          `name`='{$_POST['name']}',
//                          `email`='{$_POST['email']}',
//                          `address`='{$_POST['address']}' 
//       where `id`='{$_POST['id']}'";

$res=$Admin->save($_POST);

      if($res !== false){
        $_SESSION['msg']="更新成功";
      }else{
        $_SESSION['msg']="資料無異動";
      }


to("../index.php?do=member");