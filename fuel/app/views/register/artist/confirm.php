<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登録確認</title>
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
                    <form action="exe" method="post">
                        <table class="table">
                            <caption>登録確認</caption>
                            <tr>
                                <th>ユーザー名</th>
                                <td><?php echo Input::post('name')?></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><?php echo Input::post('email')?></td>
                            </tr>
                            <tr>
                                <th>パスワード</th>
                                <td><?php echo Input::post('password')?></td>
                            </tr>
                        </table>
                        <input type="hidden" name="name" value="<?php echo Input::post('name')?>">
                        <input type="hidden" name="email" value="<?php echo Input::post('email')?>">
                        <input type="hidden" name="password" value="<?php echo Input::post('password')?>">
                        <div id="btn-group">
                            <input class="btn-primary btn-large btn-group" type="submit" value="登録">
                            <input class="btn-primary btn-large btn-group" type="button" value="キャンセル">
                        </div>
                    </form>
		</div>
		<div class="row">
		</div>
		<hr/>
		<footer>
                        <p>© 2013 dvlpyeti.</p>
		</footer>
	</div>
</body>
</html>

