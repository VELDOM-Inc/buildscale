<?php
require_once("./src/bootstrap.php");
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>資料ダウンロード｜BUILD SCALE｜ビルドスケール</title>
		<meta name="description" content="資料ダウンロードのページです。ビルドスケールは、発注書の作成送付から請求書の受領までをデジタル化するツールです。仕入れ先や協力会社のデジタル対応に悩まされていませんか？発注書から請求書の受領を連携することで協力会社の請求書作成業務を削減できます！">
		<meta name="keywords" content="">
		<meta property="og:title" content="資料ダウンロード｜BUILD SCALE｜ビルドスケール">
		<meta property="og:description" content="資料ダウンロードのページです。ビルドスケールは、発注書の作成送付から請求書の受領までをデジタル化するツールです。仕入れ先や協力会社のデジタル対応に悩まされていませんか？発注書から請求書の受領を連携することで協力会社の請求書作成業務を削減できます！">
		<meta property="og:type" content="article">
		<meta property="og:url" content="http://buildscale.jp/download/">
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
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/header.html'; ?>
			<!--============================================== /header -->
			
			<h1 class="e-h1">
				<span class="__txt">資料ダウンロード</span>
			</h1>
			
			<!-- .c-breadcrumb -->
			<nav class="c-breadcrumb">
				<ul class="c-breadcrumb__inner">
					<li class="c-breadcrumb__item"><a href="/" class="c-breadcrumb__link">トップ</a></li>
					<li class="c-breadcrumb__item">資料ダウンロード</li>
				</ul>
			</nav>
			<!-- /.c-breadcrumb -->
			
			<!-- .l-contents -->
			<div class="l-contents _col2_">
				
				<div class="c-download-ttl">
					<div class="c-download-ttl__txt">
						<h2 class="c-download-ttl__title">建設業向け<br>電子帳簿保存法対応</h2>
						<p class="c-download-ttl__detail">2024年1月からの<br class="u-sm-min">改正電子帳簿保存法の<br class="u-sm-max">対応策がよくわかる</p>
					</div>
					<div class="c-download-ttl__img">
						<img src="/common/img/download/img_download02.png" alt="建設業向け電子帳簿保存法対応" class="lazyload u-w100p">
					</div>
				</div>

				<!-- .l-contents__inner -->
				<div class="l-contents__inner c-contact-form">
				
				<!-- .l-contents__body -->
					<div class="l-contents__body">
						
						<div class="c-contact-form__inner" id="form">
							<?php if ($form->is_error()) : ?>
								<div class="m-box _red_ u-mb-m u-c-red">
									<p class="u-c-red u-mb-xxxs">※入力内容にエラーがあります。</p>
									<div class="u-fz-16"><?php echo $form->errors() ?></div>
								</div>
							<?php endif; ?>

							<div class="m-box _line-gray_ _radius_ u-pt-l u-pb-l">
								<p class="u-mb-m u-al-c u-c-blue u-fw-b">フォームに必要事項を入力してください。</p>
								<form method="post" enctype="multipart/form-data" autocomplete="off" action="#form" class="h-adr">
									<table class="m-table _sp-col1_">
										<tbody class="m-table--body">
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
													<p class="u-mb-xxxs">「<a href="https://zidai-inc.co.jp/privacy_build/" target="_blank">プライバシーポリシー</a>」をお読みいただき、同意いただいた上で確認画面へお進みください。</p>
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
										<button class="e-btn-arrow">
											<span class="__txt">資料をダウンロードする</span>
											<span class="__ico">
												<img src="/common/img/common/ico_arrow_white.svg" alt="" class="lazyload u-w100p">
											</span>
										</button>
									</div>
								</form>
							</div>

						</div>
						<!-- /.c-contact-form -->
							
					</div>
					<!-- .l-contents__body -->
					
					<!-- .l-contents__side -->
					<aside class="l-contents__side">
						<h3 class="e-h3 _blue_ _center_">電子帳簿保存法が<br>定める保存手法が分かります</h3>
						<ol class="e-list-number _blue-number_">
							<li class="e-list-number__item">
								<h4 class="e-h3 u-fz-20 _sm-fz-18_ u-mb-xxxs">電磁的記録により保存</h4>
								<p class="u-fz-16 _sm-fz-15_">電子的に作成した帳簿・書類をデータそのまま保存</p>
							</li>
							<li class="e-list-number__item">
								<h4 class="e-h3 u-fz-20 _sm-fz-18_ u-mb-xxxs">スキャナ保存</h4>
								<p class="u-fz-16 _sm-fz-15_">紙で受領・作成した書類をスキャン文書で保存</p>
							</li>
							<li class="e-list-number__item">
								<h4 class="e-h3 u-fz-20 _sm-fz-18_ u-mb-xxxs">電子取引</h4>
								<p class="u-fz-16 _sm-fz-15_">電子データで受け取る取引情報をデータで保存</p>
							</li>
						</ol>
					</aside>
					<!-- .l-contents__side -->
			
				</div>
				<!-- /.l-contents__inner -->

			</div>
			<!-- /.l-contents -->
			
			<!--============================================== footer -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/footer.html'; ?>
			<!--============================================== /footer -->
		</div>

		<!--============================================== html_foot -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/common/inc/html_foot.html'; ?>
		<!--============================================== /html_foot -->
	</body>
</html>