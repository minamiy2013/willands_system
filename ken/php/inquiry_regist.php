<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="../css/inquiry_regist.css" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>

		<title>お問い合わせ</title>

	</head>
	<body>
		<div id="wrap">
			<h3>お問い合わせ</h3>
			<p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>

			<form action="form_check.php" method="POST">
				<table>
					<tbody>
						<tr>
							<td><label for="name">■お名前</label>※必須</td>
							<td><input type="text" id="name" name="お名前" size="30" /></td>
						</tr>

						<tr>
							<td><label for="hurigana">■フリガナ</label>※必須</td>
							<td><input type="text" id="hurigana" name="フリガナ" size="30" /></td>
						</tr>

						<tr>
							<td><label for="sex">■性別</label></td>
							<td>
								<select id="sex" name="性別">
									<option value="woman">女性</option>
									<option value="man">男性</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="reason">■当校を知ったきっかけ</label></td>
							<td>
								<select id="reason" name="当校を知ったきっかけ">
									<option value="">選択してください</option>
									<option value="Google">Google</option>
									<option value="Yahoo!">Yahoo!</option>
									<option value="Bing">Bing</option>
									<option value="goo">goo</option>
									<option value="BIGLOBE">BIGLOBE</option>
									<option value="@nifty">@nifty</option>
									<option value="jword">jword</option>
									<option value="当校のホームページを見て">当校のホームページを見て</option>
									<option value="チラシを見て">チラシを見て</option>
									<option value="HOTPEPPER">HOTPEPPER</option>
									<option value="人の紹介">人の紹介</option>
									<option value="その他">その他</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="email">■メールアドレス</label>※必須</td>
							<td><input type="text" id="email" name="メールアドレス" size="30" /></td>
						</tr>

						<tr>
							<td colspan="2"><label for="message">■お問い合わせ内容</label></br>
							<textarea id="message" name="お問い合わせ内容" cols="60" rows="6"></textarea></td>
						</tr>
					</tbody>
				</table>

				<p><input type="submit" name="inq" value="　確認　" /></p>
			</form>

		</div>
	</body>
</html>