<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="" />
		<meta name="Keywords" content="" />

		<link rel="stylesheet" href="../css/contact.css" type="text/css" />

		<title>無料体験お申し込み</title>

	</head>
	<body>
		<div id="wrap">
			<h3>無料体験お申し込み</h3>
			<p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>

			<form action="exp_request_check.php" method="POST">
				<table>
					<tbody>
						<tr>
							<td>■お名前</td>
							<td><input type="text" name="name" size="30" /></td>
						</tr>

						<tr>
							<td>■フリガナ</td>
							<td><input type="text" name="hurigana" size="30" /></td>
						</tr>

						<tr>
							<td>■性別</td>
							<td>
								<select name="sex">
									<option value="woman">女性</option>
									<option value="man">男性</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>■生年月日</td>
							<td>
								<select name="birth_year">
									<?php 
										for ($i=1900; $i<=date('Y'); $i++) {
											if ($i == date('Y')-20) {
												echo '<option value="' .$i. '" selected>' .$i. '</option>';
											} else {
												echo '<option value="' .$i. '">' .$i. '</option>';
											}
										}
									?>
								</select>
							</td>
							<td>
								<select name="birth_month">
									<?php for ($i=1; $i<=12; $i++) {echo '<option value="' .$i. '">' .$i. '</option>';} ?>
								</select>
							</td>
							<td>
								<select name="birth_day">
									<?php for ($i=1; $i<=31; $i++) {echo '<option value="' .$i. '">' .$i.	'</option>';} ?>
								</select>
							</td>
						</tr>

						<tr>
							<td>■ご職業</td>
							<td>
								<select name="job">
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
							<td>■郵便番号</td>
							<td><input type="text" name="postal" size="8" maxlength="8"></td>
						</tr>

						<tr>
							<td>■都道府県</td>
							<td>
								<select name="prefecture">
									<?php
										echo '<optgroup label="北海道・東北">';
										$prefecture = array('北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県');
										foreach ($prefecture as $pre) {echo '<option value="' .$pre. '">' .$pre. '</option>';}
										echo '</optgroup>';

										echo '<optgroup label="関東">';
										$prefecture = array('茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県');
										foreach ($prefecture as $pre) {echo '<option value="' .$pre. '">' .$pre. '</option>';}
										echo '</optgroup>';

										echo '<optgroup label="中部">';
										$prefecture = array('新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県');
										foreach ($prefecture as $pre) {echo '<option value="' .$pre. '">' .$pre. '</option>';}
										echo '</optgroup>';

										echo '<optgroup label="近畿">';
										$prefecture = array('三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県');
										foreach ($prefecture as $pre) {
											if ($pre === '大阪府') {
												echo '<option value="' .$pre. '" selected>' .$pre. '</option>';
											} else {
												echo '<option value="' .$pre. '">' .$pre. '</option>';
											}
										}
										echo '</optgroup>';

										echo '<optgroup label="中国">';
										$prefecture = array('鳥取県', '島根県', '岡山県', '広島県', '山口県');
										foreach ($prefecture as $pre) {echo '<option value="' .$pre. '">' .$pre. '</option>';}
										echo '</optgroup>';

										echo '<optgroup label="四国">';
										$prefecture = array('徳島県', '香川県', '愛媛県', '高知県');
										foreach ($prefecture as $pre) {echo '<option value="' .$pre. '">' .$pre. '</option>';}
										echo '</optgroup>';

										echo '<optgroup label="九州・沖縄">';
										$prefecture = array('福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県');
										foreach ($prefecture as $pre) {echo '<option value="' .$pre. '">' .$pre. '</option>';}
										echo '</optgroup>';
									?>
								</select>
							</td>
						</tr>

						<tr>
							<td>■ご住所</td>
							<td><input type="text" name="address" size="40"></td>
						</tr>

						<tr>
							<td>■お電話番号</td>
							<td><input type="text" name="phone" size="15"></td>
						</tr>

						<tr>
							<td>■当校を知ったきっかけ</td>
							<td>
								<select name="search">
									<option value="">選択してください</option>
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
									<option value="introdice">どなたかの紹介</option>
									<option value="other">その他</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>■体験希望講座</td>
							<td>
								<table>
									<tr>
										<td><input type="checkbox" name="cource[]" value="mos">マイクロソフト　オフィス　スペシャリスト（MOS）</td>
										<td><input type="checkbox" name="cource[]" value="pken">Ｐ検　パソコン検定</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="cource[]" value="mot" disabled>マイクロソフト　オフィシャル　トレーナー（MOT）現在休講中</td>
										<td><input type="checkbox" name="cource[]" value="illustrator">イラストレーター</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="cource[]" value="photoshop">フォトショップ</td>
										<td><input type="checkbox" name="cource[]" value="flash">フラッシュ</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="cource[]" value="dreamwever">ドリームウィーバー</td>
										<td><input type="checkbox" name="cource[]" value="hpbuilder">ホームページビルダー</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="cource[]" value="wcb">Web Creators Basic</td>
										<td><input type="checkbox" name="cource[]" value="network">ネットワーク</td>
									</tr>
									<tr>
										<td><input type="checkbox" name="cource[]" value="db">データベース</td>
										<td><input type="checkbox" name="cource[]" value="homework" disabled>在宅ワーク　現在休講中</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td>■メールアドレス</td>
							<td><input type="text" name="email" size="30" /></td>
						</tr>

						<tr>
							<td colspan="2">■体験希望日やご連絡事項等をご記入ください</br>
							<textarea name="message" cols="60" rows="5"></textarea></td>
						</tr>
					</tbody>
				</table>

				<p><input type="submit" value="　確認　" /></p>
			</form>

		</div>
	</body>
</html>