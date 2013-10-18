<?php
/*
<h2>Listing <span class='muted'>音楽投稿</span></h2>
<br>
<?php if ($musictables): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Path</th>
			<th>Genre</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($musictables as $musictable): ?>		<tr>

			<td><?php echo $musictable->title; ?></td>
			<td><?php echo $musictable->path; ?></td>
			<td><?php echo $musictable->genre; ?></td>
			<td>
				<?php echo Html::anchor('musictable/view/'.$musictable->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('musictable/edit/'.$musictable->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('musictable/delete/'.$musictable->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Musictables.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('musictable/create', 'Add new Musictable', array('class' => 'btn btn-success')); ?>

</p>
 
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<div id="header">
		<div class="row">
			<div id="logo"></div>
		</div>
	</div>
	<div class="container">
		<div class="hero-unit">
                    <form action="upload" method="post" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <th>ジャンル</th>
                                <td><p><?php echo Form::input('genre', Input::post('genre', isset($genre) ? $genre->genre : '')); ?>
        &nbsp;</p></td>
                            </tr>
                            <tr>
                                <th>ファイル</th>
                                <td><input type="file" name="upload_file"></td>
                            </tr>
                        </table>
                        <div id="btn-group">
                            <input class="btn-primary btn-large btn-group" type="submit" value="投稿">
                            <input class="btn-primary btn-large btn-group" type="button" value="キャンセル">
                        </div>
                    </form>
		</div>
		<div class="row">
		</div>
		<hr/>
		<footer>
                        <p>© 2013 b1225</p>
		</footer>
	</div>
</body>
</html>
