<?php   
if ($_SESSION['log']){ 
  ?>
<div id="nomodal">
 
        <h5>Заказать FERRARI</h5>

      <div class="modal-body">
        <form>
        <div class="form-group">
            <label for="date-time" class="col-form-label">Дата, когда вы хотели бы забрать автомобиль:</label>
            <input type="date" class="form-control" id="date-time">
          </div>
          <div class="form-group">
            <label for="work-name" class="col-form-label">Модель:</label>
          <select class="form-control" id="work-name"> 
            <option value="
FERRARI 430" selected>
FERRARI 430</option> 
            <option value="FERRARI 458 ITALIA">FERRARI 458 ITALIA</option>
            <option value="FERRARI 458 SPECIALE">FERRARI 458 SPECIALE</option>
            <option value="FERRARI 488 GTB">FERRARI 488 GTB</option>
            <option value="FERRARI 488 PISTA">FERRARI 488 PISTA</option>
            <option value="FERRARI 488 SPIDER">FERRARI 488 SPIDER</option>
          </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Пожелания:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary" id='sendMail'>Отправить</button>
      </div>
</div>

<?php } else { ?>


<div id="nomodal">
        <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
      <div class="modal-body">
      <form id='logs'>
  <div class="form-group">
    <input type="hidden" value="1" id="checkLog">
    <label for="exampleInputEmail1">Почта</label>
    <input type="email" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div><?php if ($error != "") {
            
            echo $error;
            exit();
            
        }?></div>
</div>
<div >
        <button type="button" class="btn btn-secondary" id="Signup-small">Регистрация</button>
        <button type="submit" class="btn btn-primary" id="Login-small">Вход</button>
      </div>
</form>
  
</div>
</div>
    
    <?php }?>
    
    <?php   
if ($_SESSION['log']){ 
  if ($_SESSION['log'] == $admin) {?>
  <style> .container {display:none} 
  #nomodal {display:none}
  </style> 
  <?php }?>

  
    <table class="table">
  <tbody id="mailsMain">
  <?php 
  $session = $_SESSION["log"];
  if ($session == $admin) {
    $query = "SELECT * FROM mails";
    $result = mysqli_query($link, $query);
  
    if ($_SESSION['log']){ 
        if (mysqli_num_rows($result) > 0) {
      while($rowMail = mysqli_fetch_assoc($result)) {
          if ($rowMail['email']) {
      
          echo 
  '<tr data-id="'.$rowMail['id'].'">'.
  '<td>'.$rowMail['work'].'</td>'.
  '<td>'.$rowMail['dateandtime'].'</td>'.
  '<td><button data-btn-id="'.$rowMail['id'].'" type="button"  class="btn btn-primary fullAll" data-toggle="modal" data-target="#exampleModal3">Посмотреть</button></td>'.
  '<td><button type="button" class="btn btn-danger delBtn2" id="'.$rowMail['id'].'" onclick="del2(this)">Удалить</button></td>'.
  '</tr><tr style="border:none;height:100px;"></td></tr>'; 
          }
          }
      }
  }
    
  } else {
$query = "SELECT * FROM mails WHERE sender = '$session'";
$result = mysqli_query($link, $query);
  
  if ($_SESSION['log']){ 
      if (mysqli_num_rows($result) > 0) {
    while($rowMail = mysqli_fetch_assoc($result)) {
        if ($rowMail['email']) { 
  
         
        echo 
'<tr data-id="'.$rowMail['id'].'">'.
'<td>'.$rowMail['work'].'</td>'.
'<td>'.$rowMail['dateandtime'].'</td>'.
'<td><button data-btn-id="'.$rowMail['id'].'" type="button" class="btn btn-primary fullAll" data-toggle="modal" data-target="#exampleModal3">Посмотреть</button></td>'.
'<td><button type="button" class="btn btn-danger delBtn2" id="'.$rowMail['id'].'" onclick="del2(this)">Удалить</button></td>'.
'</tr><tr style="border:none;height:100px;"></td></tr>';  }
        }
    }
}
}?>

  </tbody>
</table>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заказ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
      <tbody id="showAll">
    
 </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" id='saveBtn' class="btn btn-primary" data-toggle="modal"  data-whatever="@fat">Сохранить</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
