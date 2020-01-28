<?php
 $con = mysqli_connect('localhost','root','','alumni');
if($con== false)
  {
  echo "Connection error ";
  }
else
  {
  echo " Connection is successfull!!";
  }



?>