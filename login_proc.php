<?php

  $id=$_POST['id'];
  $password=$_POST['password'];

  $conn = mysql_connect("localhost", "webadmin","qwer1234");

  if(!$conn){
    echo "connect fail";
    exit;
  }

  mysql_select_db("webhacktest");
  $sql = "select * from member where id='$id' and password ='$password' ";
  $return = mysql_query($sql);
  $result = mysql_fetch_array($return);


  if($result){
/* cookie start*/
    // $cookie_name = "user";
    // $cookie_value = "persistent";
    // setcookie($cookie_name, $cookie_value, time() + (86400*30));
/* cookie end*/
    session_start();
    $_SESSION['LoginID']=$id;
    echo "<script> alert(\"login Complete\");";
    echo "location.href=\"main.php\"</script>";
  }
  else {
    echo "<script> alert(\"login Fail\");";
    echo "location.href=\"login.html\"</script>";
  }
  mysql_close($conn);
 ?>
