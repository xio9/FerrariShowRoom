


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Новая заявка</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
            <label for="date-time" class="col-form-label">Дата, когда вы хотели бы хабрать автомобиль:</label>
            <input type="datetime-local" class="form-control" id="date-time">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary" id='sendMail'>Заказать</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>