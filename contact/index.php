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
		<title>お問い合わせ｜BUILD SCALE｜ビルドスケール</title>
		<meta name="description" content="お問い合わせのページです。ビルドスケールは、発注書の作成送付から請求書の受領までをデジタル化するツールです。仕入れ先や協力会社のデジタル対応に悩まされていませんか？発注書から請求書の受領を連携することで協力会社の請求書作成業務を削減できます！">
		<meta name="keywords" content="">
		<meta property="og:title" content="お問い合わせ｜BUILD SCALE｜ビルドスケール">
		<meta property="og:description" content="お問い合わせのページです。ビルドスケールは、発注書の作成送付から請求書の受領までをデジタル化するツールです。仕入れ先や協力会社のデジタル対応に悩まされていませんか？発注書から請求書の受領を連携することで協力会社の請求書作成業務を削減できます！">
		<meta property="og:type" content="article">
		<meta property="og:url" content="http://buildscale.jp/contact/">
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
				<span class="__txt">お問い合わせ</span>
			</h1>
			
			<!-- .c-breadcrumb -->
			<nav class="c-breadcrumb">
				<ul class="c-breadcrumb__inner">
					<li class="c-breadcrumb__item"><a href="/" class="c-breadcrumb__link">トップ</a></li>
					<li class="c-breadcrumb__item">お問い合わせ</li>
				</ul>
			</nav>
			<!-- /.c-breadcrumb -->
			
			<!-- .l-contents -->
			<div class="l-contents">
				<div class="c-index-inner _small_ contact-inner" id="form">
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
											<option value="1～49人"<?php if ($form->get('employee') == '1～49人' ) : ?> selected<?php endif; ?>>1～49人</option>
											<option value="50～99人"<?php if ($form->get('employee') == '50～99人' ) : ?> selected<?php endif; ?>>50～99人</option>
											<option value="100～299人"<?php if ($form->get('employee') == '100～299人' ) : ?> selected<?php endif; ?>>100～299人</option>
											<option value="300～499人"<?php if ($form->get('employee') == '300～499人' ) : ?> selected<?php endif; ?>>300～499人</option>
											<option value="500～999人"<?php if ($form->get('employee') == '500～999人' ) : ?> selected<?php endif; ?>>500～999人</option>
											<option value="1000人～"<?php if ($form->get('employee') == '1000人～' ) : ?> selected<?php endif; ?>>1000人～</option>
										</select>
										<?php echo $form->error('employee', '<div class="e-alert">', '</div>'); ?>
									</td>
								</tr>
								<tr>
										<th>お問い合わせ内容</th>
										<td class="<?php if ($form->is_error('comment')) : ?>error<?php endif; ?>">
											<textarea name="comment" cols="50" rows="4" class="e-form-textarea"><?php echo e($form->get('comment')); ?></textarea>
											<?php echo $form->error('comment', '<div class="e-alert">', '</div>'); ?>
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
							<button class="e-btn-arrow _w-l_">
								<span class="__txt">確認画面へ</span>
								<span class="__ico">
									<img src="/common/img/common/ico_arrow_white.svg" alt="" class="lazyload u-w100p">
								</span>
							</button>
						</div>
					</form>
				</div>
			
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