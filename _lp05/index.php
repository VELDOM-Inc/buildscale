<?php
require_once("../src/bootstrap.php");
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>BUILD SCALE｜ビルドスケール</title>
		<meta name="description" content="ビルドスケールは、調達の成果を見える化するツールです。仕入れ先や協力会社のデジタル対応に悩まされていませんか？発注書から請求書の受領を連携することで協力会社の請求書作成業務を削減できます！">
		<meta name="keywords" content="">
		<meta property="og:title" content="BUILD SCALE｜ビルドスケール">
		<meta property="og:description" content="ビルドスケールは、調達の成果を見える化するツールです。仕入れ先や協力会社のデジタル対応に悩まされていませんか？発注書から請求書の受領を連携することで協力会社の請求書作成業務を削減できます！">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://buildscale.jp/">
		<meta property="og:image" content="http://buildscale.jp/common/img/common/og_image.png">
		<meta property="og:image:alt" content="BUILD SCALE｜ビルドスケール">
		<!--============================================== html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head.html'; ?>
		<!--============================================== /html_head -->
	</head>

	<body>
		<!--============================================== body_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/body_head.html'; ?>
		<!--============================================== /body_head -->

		<div class="t-wrap">
			<!--============================================== header -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/header03.html'; ?>
			<!--============================================== /header -->
			
			<!-- .c-index-visual -->
			<div class="c-index-visual">
				<div class="c-index-visual__inner">
					<div class="c-index-visual__txt">
						<h1 class="__ttl">建設業界特化</h1>
						<p class="__detail">技術者の即戦力化を支援<br>
							保有資格と連動した人員配置や<br>
						知見の蓄積・若手の育成が可能</p>
						<a href="#contact" class="e-btn-arrow _m-0_">
							<span class="__txt">無料で<br>資料ダウンロード</span>
							<span class="__ico">
								<img src="/common/img/common/ico_arrow_white.svg" alt="" class="lazyload">
							</span>
						</a>
					</div>
					<div class="c-index-visual__img">
						<img src="/common/img/index/img_visual02.png" alt="建設業界特化" class="__elem lazyload u-w100p">
					</div>
				</div>
			</div>
			<!-- /.c-index-visual -->
			
			<!-- .c-index-issues -->
			<section class="c-index-issues" id="issues">
				<h2 class="e-h2 _blue_">こんな課題はありませんか？</h2>
				<div class="c-index-inner">
					<ul class="c-index-issues__list">
						<li class="c-index-issues__item">
							<div class="c-index-issues__img">
								<img src="/common/img/index/img_issues07.png" alt="現場担当者の人員配置計画・変更が煩雑で時間がかかっている" class="__elem lazyload u-w100p">
							</div>
							<p class="c-index-issues__txt">現場技術者の<br class="u-sm-min">人員配置計画・変更業務が<br class="u-sm-min">煩雑で時間がかかっている</p>
						</li>
						<li class="c-index-issues__item">
							<div class="c-index-issues__img">
								<img src="/common/img/index/img_issues05.png" alt="工種ごとの協力会社の手配状況が分からず工程管理ができていない" class="__elem lazyload u-w100p">
							</div>
							<p class="c-index-issues__txt">若手技術者育成のための<br class="u-sm-min">知見・ノウハウの<br class="u-sm-min">蓄積や活用ができていない</p>
						</li>
						<li class="c-index-issues__item">
							<div class="c-index-issues__img">
								<img src="/common/img/index/img_issues08.png" alt="現場担当者と協力会社の保有資格が人員配置と一致していない" class="__elem lazyload u-w100p">
							</div>
							<p class="c-index-issues__txt">現場技術者の<br class="u-sm-min">保有資格や過去の実績が<br class="u-sm-min">人員配置と一致していない</p>
						</li>
					</ul>
				</div>
			</section>
			<!-- /.c-index-issues -->
			
			<!-- .c-index-what -->
			<section class="c-index-what" id="what">
				<h2 class="e-h2 _white_">ビルドスケールとは？</h2>
				<div class="c-index-inner">
					<div class="c-index-what__box">
						<p class="c-index-what__txt">ビルドスケールは<br>
							<span class="__blue">現場技術者の即戦力化を支援する</span><br>ツールです！</p>
					</div>
				</div>
			</section>
			<!-- /.c-index-what -->

			<!-- .c-index-function -->
			<section class="c-index-function" id="function">
				<h2 class="e-h2 _white_">提供中の機能</h2>
				<div class="c-index-inner">
					<ul class="c-index-function__list">
						<li class="c-index-function__item">
							<div class="c-index-function__img">
								<img src="/common/img/index/img_function09.png" class="__elem lazyload u-w100p" alt="部署や担当者ごとの調達成果を定量的に可視化">
							</div>
							<div class="c-index-function__detail">
								<h3 class="e-h3">
									<span class="__number">01</span>
									<span class="__ttl">保有資格や過去の実績と連動し<br>現場技術者の人員配置計画・変更を効率化</span>
								</h3>
								<p class="__txt">自社の現場技術者が保有している資格や過去の現場実績と連動した人員配置が可能です。一度作成した人員配置の計画もシステム上でリアルタイムに変更でき、実績に基づいた最適な配置を実現できます。<br>4週8閉所の設定や残業時間との紐付け、現場工数の管理など2024年問題にも対応した運用が可能です。</p>
							</div>
						</li>
						<li class="c-index-function__item">
							<div class="c-index-function__img">
								<img src="/common/img/index/img_function11.jpg" class="__elem lazyload u-w100p" alt="請求書受領サービスや原価管理ソフト、会計ソフトからインポートするだけで自動集計し原価の内訳までを見える化">
							</div>
							<div class="c-index-function__detail">
								<h3 class="e-h3">
									<span class="__number">02</span>
									<span class="__ttl">工事受注前の見込みから情報管理できる<br class="u-sm-min">工事案件管理</span>
								</h3>
								<p class="__txt">工事受注前の見込みの状態から情報管理し、そのまま配置計画に自動反映が可能です。<br class="u-sm-min">工事受注前の見込みのステータス管理も粒度細かく管理でき、<br>現在お使いの工事案件管理ソフトや顧客管理システムとの連携も可能です。</p>
							</div>
						</li>
						<li class="c-index-function__item">
							<div class="c-index-function__img">
								<img src="/common/img/index/img_function07.png" class="__elem lazyload u-w100p" alt="見積書受領〜発注書作成送付〜請求書受領まで一気通貫で提供">
							</div>
							<div class="c-index-function__detail">
								<h3 class="e-h3">
									<span class="__number">03</span>
									<span class="__ttl">稼働予測機能で<br class="u-sm-min">先読みして技術者を確保</span>
								</h3>
								<p class="__txt">自社の技術者や派遣技術者がいつ不足するのかを事前に予測することが可能になり、<br class="u-sm-min">数ヶ月先、数年先を先読みして技術者を確保することができます。</p>
							</div>
						</li>
						<li class="c-index-function__item">
							<div class="c-index-function__img">
								<img src="/common/img/index/img_function10.jpg" class="__elem lazyload u-w100p" alt="仕入れ先となる協力会社のデータ化も実現">
							</div>
							<div class="c-index-function__detail">
								<h3 class="e-h3">
									<span class="__number">04</span>
									<span class="__ttl">クラウド上で知見やノウハウを蓄積し<br>技術者育成に活用するナレッジマネジメント</span>
								</h3>
								<p class="__txt">これまでの工事の知見やノウハウをクラウド上に蓄積することで可能です。<br>具体的には労災事例や工法などの技術者ごとの工事実績に基づく作業ノウハウ・工事ケースが照会できることで若手技術者の人材育成や技術力向上の底上げにも活用が可能です。</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- /.c-index-function -->
			
			<!-- .c-index-introduction -->
			<section class="c-index-introduction" id="introduction">
				<h2 class="e-h2">導入から運用まで<br class="u-sm-max"><span class="__blue">伴走</span>いたします</h2>
				<div class="c-index-inner">
					<h3 class="e-h3 _center_">ツールの提供だけではなく<br class="u-sm-max">各社の事情に合わせた<br class="u-sm-min">必要な<br class="u-sm-max">デジタル化を伴走支援します</h3>
					<ul class="c-index-introduction__list">
						<li class="c-index-introduction__item">
							<h4 class="e-h4 c-index-introduction__ttl _num1_">初期設定登録は丸投げOK</h4>
							<p class="c-index-introduction__txt">現在使われている書式や業務フローに応じて、運用開始するまでの初期設定は丸投げで構いません。</p>
						</li>
						<li class="c-index-introduction__item">
							<h4 class="e-h4 c-index-introduction__ttl _num2_">導入から運用まで<br class="u-sm-min">伴走して支援</h4>
							<p class="c-index-introduction__txt">御社が目指すゴールを設定した上で導入から安定した運用まで伴走してお手伝いいたします。</p>
						</li>
						<li class="c-index-introduction__item">
							<h4 class="e-h4 c-index-introduction__ttl _num3_">御社専属チームでサポート</h4>
							<p class="c-index-introduction__txt">御社専属のチームで運用をサポートさせていただきます。運用に関わる不明点や細かい質問でも対応いたします。</p>
						</li>
					</ul>
					
					<h3 class="e-h3 _blue_ _center_">建設業界の中でも<br class="u-sm-max">多くの業種の企業様に<br class="u-sm-max">ご利用いただけます</h3>
					<ul class="c-index-example _col3_">
						<li class="c-index-example__item _new-house_">
							<p class="c-index-example__txt">建築工事</p>
						</li>
						<li class="c-index-example__item _geotechnical_">
							<p class="c-index-example__txt">土木工事</p>
						</li>
						<li class="c-index-example__item _renovation_">
							<p class="c-index-example__txt">設計・測量</p>
						</li>
						<li class="c-index-example__item _plant_">
							<p class="c-index-example__txt">プラント</p>
						</li>
						<li class="c-index-example__item _facilities_">
							<p class="c-index-example__txt">電気・衛生・空調</p>
						</li>
						<li class="c-index-example__item _trade_">
							<p class="c-index-example__txt">その他専門工事</p>
						</li>
					</ul>
				</div>
			</section>
			<!-- /.c-index-introduction -->
			
			<!-- .c-index-works -->
			<!--<section class="c-index-works" id="works">
				<h2 class="e-h2 _white_">導入事例</h2>
				<div class="c-index-inner">
					<p class="c-index-works__txt">COMING SOON…</p>
				</div>
			</section>-->
			<!-- /.c-index-works -->

			<!-- .c-index-contact -->
			<section class="c-index-contact" id="contact">
				<h2 class="e-h2 _blue_" id="form">資料ダウンロード</h2>
				<div class="c-index-inner _small_">
					<?php if ($form->is_error()) : ?>
						<div class="m-box _red_ u-mb-m u-c-red">
							<p class="u-c-red u-mb-xxxs">※入力内容にエラーがあります。</p>
							<?php echo $form->errors() ?>
						</div>
					<?php endif; ?>
					
					<form method="post" enctype="multipart/form-data" autocomplete="off" action="#form" class="h-adr">
						<table class="m-table _sp-col1_">
							<tbody class="m-table--body">
								<tr>
									<th><span class="e-label _blue_ _ml0_">必須</span></th>
									<td class="<?php if ($form->is_error('class')) : ?>error<?php endif; ?>">
										<?php foreach($form->get_options('class') as $class) : ?>
										<label class="e-form-radio u-mr-xxs">
											<input type="radio" name="class" value="<?php echo $class ?>" class="__elem" <?php echo $form->checked('class', $class) ?>>
											<span class="__txt"><?php echo $class ?></span>
										</label>
										<?php endforeach; ?>
										<?php echo $form->error('class', '<div class="e-alert">', '</div>'); ?>
									</td>
								</tr>
								<tr>
									<th>お名前<span class="e-label _blue_">必須</span></th>
									<td class="<?php if ($form->is_error('name')) : ?>error<?php endif; ?>">
										<input type="text" name="name" class="e-form-text" value="<?php echo e($form->get('name')); ?>" placeholder="山田 太郎">
										<?php echo $form->error('name', '<div class="e-alert">', '</div>'); ?>
									</td>
								</tr>
								<tr>
									<th>メールアドレス<span class="e-label _blue_">必須</span></th>
									<td class="<?php if ($form->is_error('email')) : ?>error<?php endif; ?>">
										<input type="email" class="e-form-text" name="email" value="<?php echo e($form->get('email')); ?>" placeholder="info@buildscale.jp">
										<?php echo $form->error('email', '<div class="e-alert">', '</div>'); ?>
									</td>
								</tr>
								<tr>
									<th>電話番号<span class="e-label _blue_">必須</span></th>
									<td class="<?php if ($form->is_error('tel')) : ?>error<?php endif; ?>">
										<input type="tel" class="e-form-text" name="tel" value="<?php echo e($form->get('tel')); ?>" placeholder="0312345678">
										<?php echo $form->error('tel', '<div class="e-alert">', '</div>'); ?>
									</td>
								</tr>
								<tr>
									<th>会社名<span class="e-label _blue_">必須</span></th>
									<td class="<?php if ($form->is_error('company')) : ?> error<?php endif; ?>">
										<input type="text" name="company" class="e-form-text" value="<?php echo e($form->get('company')); ?>" placeholder="ZIDAI株式会社">
										<?php echo $form->error('company', '<div class="e-alert">', '</div>'); ?>
									</td>
								</tr>
								<tr>
									<th>従業員規模（単体）</th>
									<td class="<?php if ($form->is_error('employee')) : ?>error<?php endif; ?>">
										<select class="e-form-select" name="employee">
											<option value="" selected>選択してください</option>
											<option value="1〜5人"<?php if ($form->get('employee') == '1〜5人' ) : ?> selected<?php endif; ?>>1〜5人</option>
											<option value="6〜10人"<?php if ($form->get('employee') == '6〜10人' ) : ?> selected<?php endif; ?>>6〜10人</option>
											<option value="11〜50人"<?php if ($form->get('employee') == '11〜50人' ) : ?> selected<?php endif; ?>>11〜50人</option>
											<option value="51〜100人"<?php if ($form->get('employee') == '51〜100人' ) : ?> selected<?php endif; ?>>51〜100人</option>
											<option value="101〜200人"<?php if ($form->get('employee') == '101〜200人' ) : ?> selected<?php endif; ?>>101〜200人</option>
											<option value="201〜500人"<?php if ($form->get('employee') == '201〜500人' ) : ?> selected<?php endif; ?>>201〜500人</option>
											<option value="501〜1000人"<?php if ($form->get('employee') == '501〜1000人' ) : ?> selected<?php endif; ?>>501〜1000人</option>
											<option value="1001人以上"<?php if ($form->get('employee') == '1001人以上' ) : ?> selected<?php endif; ?>>1001人以上</option>
										</select>
										<?php echo $form->error('employee', '<div class="e-alert">', '</div>'); ?>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<p class="u-mb-xxxs">「<a href="https://zidai-inc.co.jp/privacy/" target="_blank">プライバシーポリシー</a>」をお読みいただき、同意いただいた上で確認画面へお進みください。</p>
										<?php foreach($form->get_options('agreement') as $agreement) : ?>
										<label class="e-form-check">
											<input type="checkbox" name="agreement" class="__elem" value="<?php echo $agreement ?>"<?php echo $form->checked('agreement', $agreement) ?>>
											<span class="__txt"><?php echo $agreement ?></span>
										</label>			
										<?php endforeach; ?>
										<?php if($form->error('agreement')) : ?><p class="e-alert u-mt-xxxs u-c-red">※プライバシーポリシーについてご同意いただけない場合は、ご利用いただけません。</p><?php endif; ?>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="u-al-fc">
							<button class="e-btn-arrow _w-l_">
								<span class="__txt">確認画面へ</span>
								<span class="__ico">
									<img src="/common/img/common/ico_arrow_white.svg" alt="" class="lazyload u-w100p">
								</span>
							</button>
						</div>
					</form>
				</div>
			</section>
			<!-- /.c-index-contact -->
			
			<!--============================================== footer -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/footer03.html'; ?>
			<!--============================================== /footer -->
		</div>
		
		<!--============================================== html_foot -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_foot.html'; ?>
		<!--============================================== /html_foot -->
	</body>
</html>