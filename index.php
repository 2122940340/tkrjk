<?php
require 'config.php';
$mc=$_POST['mc'];
$tb=$_POST['tb'];
$js=$_POST['js'];
$ts=$_POST['ts'];
$tp1=$_POST['tp1'];
$tp2=$_POST['tp2'];
$tp3=$_POST['tp3'];
$lj=$_POST['lj'];
$sf=$_POST['sf'];
$sl=$_POST['sl'];
$fl=$_POST['fl'];


if ($tb==""){
    echo "参数错误";
}
else{

$sql ="INSERT INTO zsj (mc,tb,js,ts,tp1,tp2,tp3,lj,sf,sl,fl)
VALUES ('$mc', '$tb', '$js', '$ts', '$tp1', '$tp2', '$tp3', '$lj', '$sf', '$sl', '$fl')";

if ($conn->query($sql) === TRUE) {
    echo "成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 


}

?>