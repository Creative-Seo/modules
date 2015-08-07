<div class="modal fade" id="modal-zakaz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h2 class="modal-title" id="myModalLabel">Заказать <?php echo $text.' <nobr>'.$nomer.'</nobr>';?></h2>
      </div>
      <div class="modal-body">
		<form class="form-horizontal" role="form">
		  <div class="form-group">
            <label class="col-sm-4" for="name">Ваше имя:</label>
			<div class="col-sm-8">
                <input class="form-control" id="name-z" placeholder="Имя" type="name">
			</div>
          </div>
          <div class="form-group">
            <label class="col-sm-4" for="tel">Ваш телефон:</label>
            <div class="col-sm-8">
				<input class="form-control" id="tel-z" placeholder="Номер телефона" type="tel">
            </div>
          </div>
<?php if(isset($modal_dop)) {foreach($modal_dop as $row) { ?>
          <div class="form-group">
            <label class="col-sm-4" for="<?php echo $row[0];?>"><?php echo $row[1];?>:</label>
            <div class="col-sm-8">
				<input class="form-control" id="<?php echo $row[0];?>-z" placeholder="<?php echo $row[2];?>" type="text">
            </div>
          </div>
<?php }} ?>
		</form>
      </div>
      <div class="modal-footer">
        <div class="btn-modal">Отправить</div>
      </div>
    </div>
  </div>
</div>