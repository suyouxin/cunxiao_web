<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stucss.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stuline.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/weekreports.css" />

	<style type="text/css">
	body {
		font-family: "华文细黑";
		font-size: 13px;
		line-height: 150%;
		font-weight: normal;
		margin-left: 0px;
		margin-right: 0px;
		margin-top: 0px;
		margin-bottom: 0px;
	}
	a:link {
		color: #FF0000;
		text-decoration: none;
	}
	a:visited {
		text-decoration: none;
		color: #FF0000;
	}
	a:hover {
		text-decoration: underline;
	}
	a:active {
		text-decoration: none;
	}
	.STYLE1 {color: #FF0000}
	.STYLE2 {color: #FF0000; font-weight: bold; }
	.STYLE3 {font-size: 10px; color: #FF0000; }
	</style>
</head>

<body>

<div class="container" id="page">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div><!-- page -->

</body>
</html>
