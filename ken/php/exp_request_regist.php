<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="../css/exp_request_regist.css" type="text/css" />
		<script src="http://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3.js" charset="UTF-8"></script>

		<title>無料体験お申し込み</title>

	</head>
	<body>
		<div id="wrap">
			<h3>無料体験お申し込み</h3>
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
									<option value="女性">女性</option>
									<option value="男性">男性</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="birth_year">■生年月日</label></td>
							<td>
								<select id="birth_year" name="年">
									<?php 
										for ($i=1900; $i<=date('Y'); $i++) {
											if ($i == date('Y')-20) {
												echo '<option value="' .$i. '" selected>' .$i. '</option>';
											} else {
												echo '<option value="' .$i. '">' .$i. '</option>';
											}
										}
									?>
								</select>年
								<select name="月">
									<?php for ($i=1; $i<=12; $i++) {echo '<option value="' .$i. '">' .$i. '</option>';} ?>
								</select>月
								<select name="日">
									<?php for ($i=1; $i<=31; $i++) {echo '<option value="' .$i. '">' .$i.	'</option>';} ?>
								</select>日
							</td>
						</tr>

						<tr>
							<td><label for="job">■ご職業</label></td>
							<td>
								<select id="job" name="ご職業">
									<option value="">選択してください</option>
									<option value="個人事業主">個人事業主</option>
									<option value="法人経営者">法人経営者</option>
									<option value="農林水産業">農林水産業</option>
									<option value="自由業">自由業</option>
									<option value="お勤め・管理職">お勤め・管理職</option>
									<option value="お勤め・専門・技術職">お勤め・専門・技術職</option>
									<option value="お勤め・事務・営業職">お勤め・事務・営業職</option>
									<option value="お勤め・その他">お勤め・その他</option>
									<option value="専業主婦">専業主婦</option>
									<option value="中学生・高校生">中学生・高校生</option>
									<option value="短大・大学生・大学院生">短大・大学生・大学院生</option>
									<option value="専門学校生">専門学校生</option>
									<option value="パート・アルバイト">パート・アルバイト</option>
									<option value="無職">無職</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="zip01">■郵便番号</label></td>
							<td><input type="text" id="zip01" name="郵便番号" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','都道府県','ご住所');">※郵便番号を入力すると住所が自動入力されます</td>
						</tr>

						<tr>
							<td><label for="pref01">■都道府県</label></td>
							<td><input type="text" id="pref01" name="都道府県" size="10"></td>
						</tr>

						<tr>
							<td><label for="addr01">■ご住所</label></td>
							<td><input type="text" id="addr01" name="ご住所" size="60"></td>
						</tr>

						<tr>
							<td><label for="phone">■電話番号</label></td>
							<td><input type="text" id="phone" name="電話番号" size="15"></td>
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
							<td>■体験希望講座<br/>（複数選択可）<br/>※必須</td>
							<td>
								<table>
									<tbody>
										<tr>
											<td><input type="checkbox" name="体験希望講座[]" value="マイクロソフト　オフィス　スペシャリスト（MOS）">マイクロソフト　オフィス　スペシャリスト（MOS）</td>
											<td><input type="checkbox" name="体験希望講座[]" value="Ｐ検　パソコン検定">Ｐ検　パソコン検定</td>
										</tr>
										<tr>
											<td><input type="checkbox" name="体験希望講座[]" value="マイクロソフト　オフィシャル　トレーナー（MOT）" disabled>マイクロソフト　オフィシャル　トレーナー（MOT）現在休講中</td>
											<td><input type="checkbox" name="体験希望講座[]" value="イラストレーター">イラストレーター</td>
										</tr>
										<tr>
											<td><input type="checkbox" name="体験希望講座[]" value="フォトショップ">フォトショップ</td>
											<td><input type="checkbox" name="体験希望講座[]" value="フラッシュ">フラッシュ</td>
										</tr>
										<tr>
											<td><input type="checkbox" name="体験希望講座[]" value="ドリームウィーバー">ドリームウィーバー</td>
											<td><input type="checkbox" name="体験希望講座[]" value="ホームページビルダー">ホームページビルダー</td>
										</tr>
										<tr>
											<td><input type="checkbox" name="体験希望講座[]" value="Web Creators Basic">Web Creators Basic</td>
											<td><input type="checkbox" name="体験希望講座[]" value="ネットワーク">ネットワーク</td>
										</tr>
										<tr>
											<td><input type="checkbox" name="体験希望講座[]" value="データベース">データベース</td>
											<td><input type="checkbox" name="体験希望講座[]" value="在宅ワーク" disabled>在宅ワーク　現在休講中</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>

						<tr>
							<td><label for="email">■メールアドレス</label>※必須</td>
							<td><input type="text" id="email" name="メールアドレス" size="30" /></td>
						</tr>

						<tr>
							<td colspan="2"><label for="message">■体験希望日やご連絡事項等をご記入ください</label></br>
							<textarea id="message" name="体験希望日・ご連絡事項等" cols="82" rows="6"></textarea></td>
						</tr>
					</tbody>
				</table>

				<p><input type="submit" name="exp" value="　確認　" /></p>
			</form>

		</div>
	</body>
</html>