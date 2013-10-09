<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="" />
		<meta name="Keywords" content="" />

		<link rel="stylesheet" href="./contact.css" type="text/css" />

		<title>お問い合わせ</title>

	</head>
	<body>
		<div id="wrap">
			<h3>お問い合わせ</h3>
			<p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>

			<form action="inquiry_checkForm.php" method="POST">
				<table>
					<tr>
						<th>■お名前</th>
						<td><input type="text" name="name" /></td>
					</tr>

					<tr>
						<th>■フリガナ</th>
						<td><input type="text" name="huribana" /></td>
					</tr>

					<tr>
						<th>■性別</th>
						<td>
							<select name="sex">
								<option value="woman">女性</option>
								<option value="man">男性</option>
							</select>
						</td>
					</tr>

					<tr>
						<th>■？</th>
						<td>
							<select name="search">
								<option value="google">Google</option>
								<option value="yahoo">Yahoo!</option>
								<option value="bing">Bing</option>
								<option value="goo">goo</option>
								<option value="biglobe">BIGLOBE</option>
								<option value="nifty">@nifty</option>
								<option value="jword">jword</option>
								<option value="myhp">当校のホームページを見て</option>
								<option value="leaflet">チラシを見て</option>
								<option value="hotpepper">HOTPEPPER</option>
								<option value="introdice">人の紹介</option>
								<option value="other">その他</option>
							</select>
						</td>
					</tr>

					<tr>
						<th>■メールアドレス</th>
						<td><input type="text" name="mail_address" /></td>
					</tr>

					<tr>
						<th>■お問い合わせ内容</th>
						<td><textarea name="inquiry_contents" cols="60" rows="5"></textarea></td>
					</tr>
				</table>

				<p><input type="submit" value="　確認　" /></p>
			</form>

		</div>
	</body>
</html>