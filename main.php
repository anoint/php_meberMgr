<?php
/*cookie start*/
  // if($_COOKIE['user']=="persistent")
  // {
  //   echo "not display<br>";
  // }
  // else {
  //   echo "display<br>";
  // }
  // session_start();
/*cookie end*/
    if($_SESSION['LoginID'])
      echo $_SESSION['LoginID']."님";
?>
접속을 환영합니다.<br>
<?php
    if($_SESSION['LoginID']) {
?>
    <a href="member_modi.php">회원정보 수정</a><br>
    <a href="member_out.php">회원정보 탈퇴</a><br>
    <a href="logout.php">로그아웃</a><br>
<?php
}
 ?>
<a href="board.php">게시판</a><br>
<a href="webhard.php">웹하드</a><br>
<a href="member_out.php">회원탈퇴</a><br>
