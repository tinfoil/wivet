<?php
  require_once('../genclude.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <link type="text/css" href="../style.css" rel="stylesheet"/>
  <script>
    function go1(){
      window.location = "../innerpages/9_1a1b2.php";
    }
    function go2(){
      window.location.href = "../innerpages/9_2ff21.php";
    }
    function go3(){
      document.location.href = "../innerpages/9_3a2b7.php";
    }
    function go4(){
      document.location = "../innerpages/9_4b82d.php";
    }
    function genericGo(i){
      window.location.href = "../innerpages/9_" + i + "ee31.php";
    }
    function go5(){
      document.location = "../innerpages/9_26dd2e.php";
    }
  </script>
  </head>
  <body  class="body">   
    <!-- span -->
    <span onclick="go1()">click here </span> 
    <span onmouseout="go2()">click here </span>
    <span onmousedown="go3()">click here </span>
    <span onmouseup="go4()">click here </span>
    <!-- p -->
    <p onclick="genericGo(5)">click here </p> 
    <p onmouseout="genericGo(6)">click here </p>
    <p onmousedown="genericGo(7)">click here </p>
    <p onmouseup="genericGo(8)">click here </p>
    <br/>
    <!-- div -->
    <div onclick="genericGo(9)">click here</div>
    <div onmouseout="genericGo(10)">click here</div>
    <div onmousedown="genericGo(11)">click here</div>
    <div onmouseup="genericGo(12)">click here</div>
    <br/>
    <!-- tr and td -->
    <table>
      <tr>
        <td onclick="genericGo(13)">click here</td>
        <td onmouseout="genericGo(14)">click here</td>
        <td onmousedown="genericGo(15)">click here</td>
        <td onmouseup="genericGo(16)">click here</td>
      </tr>
      <tr onclick="genericGo(17)">
        <td>click here</td>
      </tr>
      <tr onmouseout="genericGo(18)">
        <td>click here</td>
      </tr>
      <tr onmousedown="genericGo(19)">
        <td>click here</td>
      </tr>
      <tr onmouseup="genericGo(20)">
        <td>click here</td>
      </tr>
    </table>
    <br/>
    <!-- ol -->
    <ol>
      <li onclick="genericGo(21)">click here</li>      
      <li onmouseout="genericGo(22)">click here</li>
      <li onmousedown="genericGo(23)">click here</li>
      <li onmouseup="genericGo(24)">click here</li>
    </ol>
    <!-- radio buttons -->
    <input onclick="genericGo(25)"type=radio name="myradio" value="1"/>select this 1<br/>
    <input type=radio name="myradio" value="2"/>select this 2<br/>
    <input type=radio name="myradio" value="3"/>select this 3
  </body>
</html>
