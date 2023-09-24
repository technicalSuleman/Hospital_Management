<?php
$servername='localhost';
$username='root';
$password='';
$databse='project';
$con=new mysqli($servername,$username,$password,$databse);
if($con->connect_error){
    echo 'connection faild';
}



?>