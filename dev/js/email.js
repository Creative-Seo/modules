function send_e(e,t){
	var n=$(e).find('[name=name]').val(),
		tel=$(e).find('[name=tel]').val(),
		email=$(e).find('[name=email]').val(),
		col=$(e).find('[name=col]').val(),
		ta=$(e).find('textarea').val();
	$.post('/email.php',
			{n:n, t:t, tel:tel, email:email, col:col, ta:ta, key:'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'}
		).done(function(data) {
			$('#modal-ok').fadeIn().delay(1000).fadeOut();
		}).fail(function() {
			alert('Ошибка отправки данных.');
		});
}