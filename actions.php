<?php
    session_start();
    $fullAll = $_POST['fullAll'];
    $fullSend = $_POST['fullSend'];
    $email = $_POST['email'];
    $idDel = $_POST['idDel'];
    $idNo = $_POST['idNo'];
    $idYes = $_POST['idYes'];
    $fio = $_POST['fio'];
    $fioC = $_POST['fioC'];
    $passwordC = $_POST['passwordC'];
    $password = $_POST['password'];
    $checkLog = $_POST['checkLog'];
    $work = $_POST['work'];
    $admin = "boss@shop.ru";
    $dateandtime = $_POST['datetime'];
    $msg = $_POST['msg'];
    $saveID = $_POST['saveID'];
    $link = mysqli_connect("localhost", "root", "root", "ferrari");
    $link->set_charset("utf8");


    if ($_GET['action'] == "Logout") { 

        session_unset();
    
    }

    $query = "INSERT INTO mails (email,sender,dateandtime,mail,work,status,rad) VALUES('$admin','".$_SESSION['log']."','$dateandtime','$msg','$work','ОБРАБАТЫВАЕТСЯ...','$rad')";

    if ($_GET['action'] == "save") { 
        $session = $_SESSION["log"];
        $error3 = array();
        $query = "UPDATE mails SET dateandtime = '$dateandtime', mail = '$msg', work = '$work' WHERE id = '$saveID'";
                mysqli_query($link, $query);
                $error[] = 'Данные сохранены';
                header('Location: ?page=main.php');
                if ($error3 != "") {
                    echo array_shift($error3);
                    exit();
                    
                }
            } 



                  

             if ($_GET['action'] == "delete2") { 
                $session = $_SESSION["log"];
                $error3 = array();
                $query = "DELETE FROM mails WHERE id = '$idDel'";
                         mysqli_query($link, $query);
                         $error[] = 'Данные удалены';
                         header('Location: ?page=main.php');
                         if ($error3 != "") {
                             echo array_shift($error3);
                             exit();
                             
                         }
                     }

    
    
    if ($_GET['action'] == "send") {
       $error2 = array();
       
                $query = "INSERT INTO mails (email,sender,dateandtime,mail,work) VALUES('$admin','".$_SESSION['log']."','$dateandtime','$msg','$work')";
                mysqli_query($link, $query);
                $error[] = 'Письмо отправлено';
                header('Location: ?page=main.php');
                if ($error2 != "") {
                    echo array_shift($error2);
                    exit();
                    
                }
            }
    
 
          
                


    if ($_GET['action'] == "login") {
        $error = array();
        if ($checkLog == 0) {
                 $query = "SELECT * FROM users WHERE email = '$email'";
                 $result = mysqli_query($link, $query);
             if (mysqli_num_rows($result) > 0) {
                 $error[] = 'Вы уже зарегестрированы';
             } 
             else {
                 $query = "INSERT INTO users (email, password) VALUES('$email','$password')";
                 mysqli_query($link, $query);
                 $_SESSION['log'] = $email;
                 $query = "INSERT INTO mails (email) VALUES('$email')";
                 mysqli_query($link, $query);
                 $error[] = 'Вы зарегестрированы';
                 header('Location: ?page=main.php');
             }
     } else if ($checkLog == 1) {
                 $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
                 $result = mysqli_query($link, $query);
             if (mysqli_num_rows($result) > 0) {
                 $_SESSION['log'] = $email;
                 header('Location: ?page=main.php');
                 $error[] = 'Вы вошли';
             }
             else {
                 $error[] = 'Данные введены не верно';
             }
     
 }
 
 if ($error != "") {
     echo array_shift($error);
     exit();
     
 }

     }



    


     if ($_GET['action'] == "showAll") {
        $show1 = array();     
        $session = $_SESSION["log"];
        if ($session == $admin) {
            $query = "SELECT * FROM mails WHERE id = '$fullAll'";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) > 0) {
          while($rowMail = mysqli_fetch_assoc($result)) {
              
              $show1[] = 
              '<tr>'.
              '<td>Почта: </td>'.
              '<td>'.$rowMail["sender"].'</td>'.
              '</tr>'.
              '<tr>'.
              '<td>Дата: </td>'.
              '<td><input type="datetime" value="'.$rowMail["dateandtime"].'"></td>'.
              '</tr>'.
              '<tr>'.
              '<td>Модель: </td>'.
              '<td id="from"><input type="text" value="'.$rowMail["work"].'"></td>'.
              '</tr>'.
              '<tr>'.
              '<td>Пожелания: </td>'.
              '<td><input type="text" value="'.$rowMail["mail"].'"></td>'.
              '</tr>';
            
         
      }
          }
          echo array_shift($show1);
      }
        
    
        else {
      $query = "SELECT * FROM mails WHERE sender = '$session' AND id = '$fullAll'";
      $result = mysqli_query($link, $query);
        if ($_SESSION['log']){
            if (mysqli_num_rows($result) > 0) {
          while($rowMail = mysqli_fetch_assoc($result)) {
              
              $show1[] = 
              '<tr>'.
              '<td>Дата, когда вы хотели бы забрать автомобиль: </td>'.
              '<td><input type="datetime" id="date-time1" value="'.$rowMail["dateandtime"].'"></td>'.
              '</tr>'.
              '<tr>'.
              '<td>Модель: </td>'.
              '<td id="from"><input type="text" id="work-name1" value="'.$rowMail["work"].'"></td>'.
              '</tr>'.
              '<tr>'.
              '<td>Пожелания: </td>'.
              '<td><input type="text" id="message-text1" value="'.$rowMail["mail"].'"></td>'.
              '</tr><input type="hidden" class="saveID" value="'.$rowMail["id"].'">';
              
          }
         
      }
          }
          echo array_shift($show1);
      }
     }



      





?>