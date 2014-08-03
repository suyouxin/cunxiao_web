<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>壹个村小-教育是最好的慈善，自由是最大的公益</title>
<link href="/css/stucss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE7 {
	color: #FF0000;
	font-size: 14;
}
.STYLE4 {
	font-size: 14;
	font-weight: bold;
}
a:link {
	color: #565656;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #565656;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<link href="/css/mystu.css" rel="stylesheet" type="text/css" /><style type="text/css">
<!--
body {
	margin-bottom: 0px;
}
-->
</style>
<link href="/css/newmail.css" rel="stylesheet" type="text/css" />
<link href="/css/seach.css" rel="stylesheet" type="text/css" />
</head>

<body class="stucss">

<p>&nbsp;</p>
<table width="807" border="0" align="center">
  <tr>
    <td width="192"><!-- #BeginLibraryItem "/Library/logo.lbi" -->
<a href="/index.php"><img src="/pic/logo.jpg" alt="壹个村小" width="130" height="91" border="0" /></a><!-- #EndLibraryItem --></td>
    <td width="605"><span class="STYLE4">感谢所有有心人，已经有( &nbsp;&nbsp;<span class="STYLE7"><?php echo $total ?></span>          &nbsp;&nbsp;)个孩子，我们一起在支持。</span></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl('/query/mystu'),
	'method'=>'get',
	));
	$model = StuOffer::model();
?>
	<table width="810" align="center" class="seach">
    <tr>
      <td width="526" align="right"><span class="STYLE7"><a name="seachstu" id="seachstu"></a>输入你认捐时留下的邮箱，可查看你正捐助的孩子 &gt;&gt;&nbsp;</span> </td>
      <td width="217" align="left"><?php echo $form->textField($model,'stu_offer_email', array('placeholder'=>'请输入你的邮箱', 'width'=>217, 'size'=>36, 'id'=>'seach_stukey', 'name'=>'stu_offer_email')); ?></div></td>
      <td width="5">&nbsp;</td>
      <td width="42"><?php echo CHtml::submitButton('查找'); ?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>

<?php $this->endWidget(); ?>


<p>&nbsp;</p>
<table width="818" align="center">
  <tr>
    <td width="810" height="39">

		<?php 
			foreach($rawData as $data){  
				if(strlen(trim($data->stu_imag)) < 1)
					continue;
				echo '<table width="201" height="133" class="mystu"> <tr> <td align="left" valign="top">';
				echo $data->stu_imag;
				echo '</td> </tr> </table>';
			}
		?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="810" align="center">
  <tr>
    <td height="76" align="center"><table border="0" width="52%" align="center">
        <tr>
		  <?php 
		  if ($offset > 0) {
              echo '<td width="13%" align="center"> <a href="/admin/index.php/query/stufunded?offset=0';
			  echo '">首页</a> </td>';
		  }
		  if ($offset - $queryNum >= 0) {
              echo '<td width="13%" align="center"> <a href="/admin/index.php/query/stufunded?offset=';
		      echo $offset - $queryNum;
			  echo '">上页</a> </td>';
		  } ?>
          <td width="48%" align="center">当前 <?php echo ($offset + 1) ?>-<?php if ($offset + $queryNum < $total) echo ($offset + $queryNum); else echo $total; ?> 总计 <?php echo $total ?> </td>
		  <?php 
		  if ($offset + $queryNum <= $total) {
              echo '<td width="13%" align="center"> <a href="/admin/index.php/query/stufunded?offset=';
		      echo $offset + $queryNum;
			  echo '">下页</a> </td>';
		  }
	      $lastIndex=floor($total/$queryNum)*$queryNum;
		  if ($offset < $lastIndex) {
              echo '<td width="13%" align="center"> <a href="/admin/index.php/query/stufunded?offset=';
		      echo $lastIndex;
			  echo '">末页</a> </td>';
		  }
		  ?>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

<p>&nbsp;</p>
<table width="713" align="center">
  <tr>
    <td width="428"><!-- #BeginLibraryItem "/Library/newunder1.lbi" -->
<img src="/pic/under_r1_c1.jpg" width="399" height="24" border="0" usemap="#Map_under" />
<map name="Map_under" id="Map_under"><area shape="rect" coords="297,2,347,26" href="/aboutme/connectme/connectme.htm" target="_blank" />
<area shape="rect" coords="354,1,402,25" href="/qa/qa.htm" />
</map>
<!-- #EndLibraryItem --></td>
    <td width="370" align="right"><!-- #BeginLibraryItem "/Library/newunder2.lbi" -->
<img src="/pic/under_r1_c3.jpg" width="304" height="21" /><!-- #EndLibraryItem --></td>
  </tr>
</table>
</body>
</html>


