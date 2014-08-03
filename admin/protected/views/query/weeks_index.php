
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>村小周记-教育是最好的慈善，自由是最大的公益</title>
<link href="/css/font.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE2 {color: #FF0000}
-->
</style>
</head>

<body class="news_con">

    <br />

	<?php 
		$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_week_view',
		'template' => '{items}{pager}',
		'pagerCssClass' => 'week_page_class',
		'pager' => array(
			'class' => 'CLinkPager',
			'nextPageLabel' => '往期',
			'prevPageLabel' => '<<',
			'header' => '',
			'maxButtonCount' => '1',
			),
		)); 
	?>

  <p>&nbsp;</p>
  <table width="753" align="center">
    <!--DWLayoutTable-->
    <tr>
      <td colspan="2"><span class="news_con STYLE2">《村小周记》</span>，内容都是摘自村小家访报告中的一些片段，家访报告，是我们提供给捐助人的学生家庭情况介绍，我们希望通过这些访问报告表达给你的，不是你常听到的，贫困、渴望读书、改变命运，这些标签式的词汇。他们和我们一样，经历着难关，有无力，有坚持。就在我们身边。</td>
      <td width="42">&nbsp;</td>
      <td width="130"><!-- #BeginLibraryItem "/Library/logo.lbi" --> <a href="/index.php"><img src="/pic/logo.jpg" alt="壹个村小" width="130" height="91" border="0" /></a><!-- #EndLibraryItem --></td>
      <td width="24"><p>&nbsp;</p>      </td>
      <td width="83"><p><img src="/pic/weekmanu.jpg" width="83" height="99" border="0" usemap="#Map" /></p>      </td>
    </tr>
    <tr>
      <td width="116">&nbsp;</td>
      <td width="330">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
</table>
<p>&nbsp;</p>

<map name="Map" id="Map"><area shape="rect" coords="1,1,84,24" href="/index.php" />
<area shape="rect" coords="1,36,82,62" href="/plant/one2one/helpchild_1.php" />
</map></body>
</html>

