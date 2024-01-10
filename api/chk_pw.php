<?php include_once "db.php";


$res=$Admin->count($_POST);

if($res){
    $_SESSION['user']=$_POST['acc'];
}
echo $res;
//$res=$User->count(['acc'=>$_POST['acc']],['pw'=>$_POST['pw']]);

// if($res>0){
//     echo 1;
// }else{
//     echo 0;
// }