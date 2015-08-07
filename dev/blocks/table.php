<?php $array = json_decode('{"thead":[{"attr":"","name":""}],"table":[
{"h2":"","href":"","thead":[{"attr":"","name":""}],"tbody":[{"attr":"","tr":[{"name":"","href":""}, ]}]}
]}',true); ?>

    <div id="tables" class="col-md-10 col-md-offset-1">
<?php foreach($array["table"] as $table) { ?>
		<h2><?php echo $table['h2'];?></h2>
		<table class="table">
		<thead><tr>
	<?php if (isset($table['thead'])) {$theads=$table['thead'];} else {$theads=$array['thead'];}
	foreach($theads as $thead) { ?>
				<td <?php echo $thead['attr'];?>><?php echo $thead['name'];?></td>
	<?php}} ?>
		</tr></thead>
		<tbody>
	<?php foreach($table['tbody'] as $tbody) { ?>
			<tr <?php echo $tbody['attr'];?>>
		<?php foreach($tbody['tr'] as $tr) { ?>
				<td>
		<?php if (isset($tr['href'])) {echo '<a href="'.HTTP_SERVER.$row['href'].'/'.$tr['href'].'">'.$tr['name'].'</a>';}
			else {echo $tr;} ?>
				</td>
		<?php } ?>
			</tr>
	<?php } ?>
		</tbody>
		</table>
<?php } ?>
	</div>