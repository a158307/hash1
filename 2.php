<?php
$key = "2006";
$data = $_GET['data'];
$hash = hash('sha1',$data.$key);
echo $hash;
echo "<br>";
echo $_GET['hash'];
echo "<br>";
if($hash==$_GET['hash']){
    echo "ok";
}else{
    echo "数据格式有误";
}

