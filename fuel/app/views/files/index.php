<meta charset="utf-8">
<form action="upload" method="post" enctype="multipart/form-data">
    <p>アップロードファイルを選択</p>
    <p>ジャンル</p>
    <p><?php echo Form::input('genre', Input::post('genre', isset($genre) ? $genre->genre : ''), array('class' => 'span6')); ?>
        &nbsp;</p>
    <input type="file" name="upload_file"><br />
    <input type="submit" name="submit" value="送信">
</form>
