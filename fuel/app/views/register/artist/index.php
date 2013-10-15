<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>アーティスト登録</title>
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
                    <form action="confirm" method="post">
                        <table class="table">
                            <caption>アーティスト登録</caption>
                            <tr>
                                <th>ユーザー名</th>
                                <td><input type="textbox" name="name"></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><input type="textbox" name="email"></td>
                            </tr>
                            <tr>
                                <th>パスワード</th>
                                <td><input type="textbox" name="password"></td>
                            </tr>
                        </table>
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
