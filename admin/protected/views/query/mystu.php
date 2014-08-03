<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>壹个村小-我捐助的孩子</title>
<link href="/css/newmail.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="/css/stuline.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>

<p>&nbsp;</p>
<table width="810" align="center" class="newmail">
  <tr>
    <td width="183">&nbsp;</td>
    <td width="197"><!-- #BeginLibraryItem "/Library/logo.lbi" --> <a href="/index.php"><img src="/pic/logo.jpg" alt="壹个村小" width="130" height="91" border="0" /></a><!-- #EndLibraryItem --></td>
    <td width="53">&nbsp;</td>
    <td width="357">
        <p><img class="STYLE1" src="/pic/stuimage/title.jpg" alt="这是我捐助的孩子" width="115" height="22" /></p>
        </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

<?php
	foreach($rawData as $data){  

		$detailPage = '/admin/index.php/query/stu_detail?stu_id='.$data->stu_id;
        echo '<table width="810" align="center" class="newmail"> <tr> <td width="183">&nbsp;</td>';
        echo '<td width="197"><p><span class="STYLE1"> <a href="'.$detailPage.'">'; 
		echo $data->stu_imag;
		echo '</a></span></p></td><td width="53">&nbsp;</td>';

		echo '<td width="357"><span class="STYLE1">';
		echo $data->stu_name;
		echo '</span> &nbsp;村小编号：';
		echo $data->stu_number;
		echo '&nbsp;。<a href="'.$detailPage.'">更多她/他的信息&gt;&gt;</a></td></tr> </table>';
	}
?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="810" align="center">
    <tr>
      <td width="446" align="right"><!-- #BeginLibraryItem "/Library/newunder1.lbi" -->
<img src="/pic/under_r1_c1.jpg" width="399" height="24" border="0" usemap="#Map_under" />
<map name="Map_under" id="Map_under"><area shape="rect" coords="297,2,347,26" href="/aboutme/connectme/connectme.htm" target="_blank" />
<area shape="rect" coords="354,1,402,25" href="/qa/qa.htm" />
</map>
<!-- #EndLibraryItem --></td>
      <td width="352"><!-- #BeginLibraryItem "/Library/newunder2.lbi" -->
<img src="/pic/under_r1_c3.jpg" width="304" height="21" /><!-- #EndLibraryItem --></td>
    </tr>
  </table>
</body>
</html>


