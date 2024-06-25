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
		<title>送信内容確認画面：資料ダウンロード｜BUILD SCALE｜ビルドスケール</title>
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
					<li class="c-breadcrumb__item"><a href="/download/" class="c-breadcrumb__link">資料ダウンロード</a></li>
					<li class="c-breadcrumb__item">送信内容確認</li>
				</ul>
			</nav>
			<!-- /.c-breadcrumb -->
			
			<!-- .l-contents -->
			<div class="l-contents">
				
				<div class="c-contact-form__inner" id="form">
					<p class="u-mb-m u-al-c _sm-al-l_">ご入力内容を確認いただき、よろしければ「入力内容を送信する」ボタンを、<br class="u-sm-min">
						修正する場合は「修正する」ボタンをクリックしてください。</p>

					<form method="post">
						<table class="m-table _sp-col1_ u-mb-m">
							<tbody class="m-table--body">
								<tr>
									<th class="_p-t_">お名前</th>
									<td class="_border_"><?php echo e($form->get('name')); ?></td>
								</tr>
								<tr>
									<th class="_p-t_">メールアドレス</th>
									<td class="_border_"><?php echo e($form->get('email')); ?></td>
								</tr>
								<tr>
									<th class="_p-t_">電話番号</th>
									<td class="_border_"><?php echo e($form->get('tel')); ?></td>
								</tr>
								<tr>
									<th class="_p-t_">会社名</th>
									<td class="_border_"><?php echo e($form->get('company')); ?></td>
								</tr>
								<tr>
									<th class="_p-t_">従業員規模（単体）</th>
									<td class="_border_"><?php echo e($form->get('employee')); ?></td>
								</tr>
							</tbody>
						</table>
						<div class="u-al-fc">
							<button type="button" class="e-btn-arrow _gray_ _p-30_ _w-l_ _order2_" onclick="window.location='./#form';">
								<span class="__ico __left">
									<img src="/common/img/common/ico_arrow_white.svg" alt="" class="lazyload u-w100p">
								</span>
								<span class="__txt">修正する</span>
							</button>
							<button type="submit" class="e-btn-arrow _p-30_ _w-l_ _order1_">
								<span class="__txt">入力内容を送信する</span>
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