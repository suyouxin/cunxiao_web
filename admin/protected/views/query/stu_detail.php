<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我捐助的孩子</title>
<link href="/css/news_con.css" rel="stylesheet" type="text/css" />
<link href="/css/stuline.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #FF0000;
	font-weight: bold;
	font-family: "华文细黑";
	font-size: 13px;
}
-->
</style></head>

<body class="news_con">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="840" align="center" class="stuline_down">
  <tr>
    <td width="197" valign="top"><?php echo $rawData->stu_imag; ?></td>
    <td width="70">&nbsp;</td>
    <td width="557"><p><span class="STYLE1"><?php echo $rawData->stu_name; ?></span>，家住：<?php echo $rawData->stu_add; ?></p>
    <p>从就读<?php echo $rawData->stu_school; ?>，<?php echo $rawData->stu_grade; ?>，时开始捐助。</p>
    <p><?php echo $rawData->stu_base; ?></p>    </td>
  </tr>
 
</table>
<p>&nbsp;</p>

<?php
	foreach($feedbackArray as $data){  
		echo '<table width="840" align="center">';
		if(strlen(trim($data->stu_feedback_image)) > 0)
			echo '<tr> <td colspan="2">'.$data->stu_feedback_image.'</td> </tr>';
		if(strlen(trim($data->stu_feedback_image2)) > 0)
			echo '<tr> <td colspan="2">'.$data->stu_feedback_image2.'</td> </tr>';
		if(strlen(trim($data->stu_feedback_image3)) > 0)
			echo '<tr> <td colspan="2">'.$data->stu_feedback_image3.'</td> </tr>';
		echo '<tr valign="top"> <td width="567">'.$data->stu_feedback_info.'<p>&nbsp;</p>        <p>&nbsp;</p></td> <td width="261">&nbsp;</td> </tr>';
		echo '</table>';
	}
?>
  <p>&nbsp;</p>
  <table width="840" align="center">
    <tr valign="bottom">
      <td width="566"><!-- #BeginLibraryItem "/Library/newunder1.lbi" --> <img src="/pic/under_r1_c1.jpg" width="399" height="24" border="0" usemap="#Map_under" />
          <map name="Map_under" id="Map_under">
            <area shape="rect" coords="297,2,347,26" href="/aboutme/connectme/connectme.htm" target="_blank" />
            <area shape="rect" coords="354,1,402,25" href="/qa/qa.htm" />
          </map>
      <!-- #EndLibraryItem --></td>
      <td width="128"><!-- #BeginLibraryItem "/Library/newunder2.lbi" --> <img src="/pic/under_r1_c3.jpg" width="304" height="21" /><!-- #EndLibraryItem --></td>
      <td width="130"><!-- #BeginLibraryItem "/Library/logo.lbi" --> <a href="/index.php"><img src="/pic/logo.jpg" alt="壹个村小" width="130" height="91" border="0" /></a><!-- #EndLibraryItem --></td>
    </tr>
  </table>
</body>
</html>


