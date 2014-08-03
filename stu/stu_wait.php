<?php 
require_once '../medoo/medoo.php';
$database = new medoo('cunxiao');
$datas = $database->select("stu_offer", array( "stu_name", "stu_school" ), array( "LIMIT" => 50 ));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>壹个村小-草根公益项目</title>
<link href="/new/stucss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
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
-->
</style>
<link href="/new/stulink.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE2 {color: #FF0000; font-weight: bold; }
-->
</style>
<link href="/new/stuline.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE3 {
	font-size: 10px;
	color: #FF0000;
}
-->
</style>
</head>

<body class="stucss">
<p>&nbsp;</p>
<% 
While ((Repeat1__numRows <> 0) AND (NOT Recordset1.EOF)) 
%>
    <table width="738" border="0" class="newmail">
    <tr>
      <td width="200" height="118" valign="top"><%=(Recordset1.Fields.Item("stu_imag").Value)%></td>
      <td width="30">&nbsp;</td>
      <td width="1016" align="left" valign="top"><p><span class="stulink STYLE1"><strong><%=(Recordset1.Fields.Item("stu_name").Value)%></strong></span>&nbsp;&nbsp;&nbsp;<%=(Recordset1.Fields.Item("stu_school").Value)%>&nbsp;&nbsp;&nbsp;&nbsp;<%=(Recordset1.Fields.Item("stu_grade").Value)%>&nbsp;&nbsp;&nbsp;&nbsp;<strong>村小编号</strong>：<%=(Recordset1.Fields.Item("stu_number").Value)%><span class="STYLE1"><strong>（</strong></span><A HREF="/plant/one2one/o2otable.asp?<%= Server.HTMLEncode(MM_keepURL) & MM_joinChar(MM_keepURL) & "stu_number=" & Recordset1.Fields.Item("stu_number").Value %>" target="_blank" class="STYLE2">我要资助</A><span class="STYLE1"><strong>）</strong></span></p>
        <p><%=HTMLEncode(Recordset1.Fields.Item("stu_base").Value)%></p></td>
    </tr>
    <tr class="stuline">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right" ><span class="STYLE3"><%=(Recordset1.Fields.Item("stu_maney").Value)%></span></td>
    </tr>
  </table>
  <table width="738" border="0" class="stuline">
    <!--DWLayoutTable-->
    <tr>
      <td height="3"></td>
    </tr>
  </table>
  <br />
  <% 
  Repeat1__index=Repeat1__index+1
  Repeat1__numRows=Repeat1__numRows-1
  Recordset1.MoveNext()
Wend
%>
  <table width="585" border="0">
    <tr>
      <td width="223" height="45">&nbsp;</td>
      <td width="352" class="stucss"><table border="0" width="66%" align="left">
  <tr>
    <td width="26%" align="center"><% If MM_offset <> 0 Then %>
          <a href="<%=MM_moveFirst%>">首页</a>
          <% End If ' end MM_offset <> 0 %>
    </td>
    <td width="25%" align="center"><% If MM_offset <> 0 Then %>
          <a href="<%=MM_movePrev%>">前页</a>
          <% End If ' end MM_offset <> 0 %>
    </td>
    <td width="25%" align="center"><% If Not MM_atTotal Then %>
          <a href="<%=MM_moveNext%>" target="_self">下页</a>
          <% End If ' end Not MM_atTotal %>
    </td>
    <td width="24%" align="center"><% If Not MM_atTotal Then %>
          <a href="<%=MM_moveLast%>">尾页</a>
          <% End If ' end Not MM_atTotal %>
    </td>
  </tr>
</table>&nbsp;</td>
    </tr>
</table>
 <% If Recordset1.EOF And Recordset1.BOF Then %>
    <form id="form1" name="form1" method="POST" action="<%=MM_editAction%>">
      <table width="607" border="0">
        <tr>
          <td colspan="5"><span class="STYLE1">很抱歉，现有学生已全部获得资助！新的访查行动正在筹备中，你可将联系方式留给我们，如有新学生资料上线，义工会第一时间通知你，谢谢。</span></td>
        </tr>
        <tr>
          <td width="50">&nbsp;</td>
          <td width="168">&nbsp;</td>
          <td width="46">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>姓名：</td>
          <td><input name="one_name" type="text" id="one_name" /></td>
          <td>城市：</td>
          <td colspan="2"><input name="one_city" type="text" id="one_city" /></td>
        </tr>
        <tr>
          <td>电话：</td>
          <td><input name="one_tel" type="text" id="one_tel" /></td>
          <td>邮箱：</td>
          <td><input name="one_email" type="text" id="one_email" /></td>
          <td><input name="Submit" type="submit" class="stucss" value="提交" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="170" align="right">&nbsp;</td>
          <td width="151">&nbsp;</td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1">
    </form>
    <% End If ' end Recordset1.EOF And Recordset1.BOF %>
<p>&nbsp;</p>
</body>
</html>
<%
Recordset1.Close()
Set Recordset1 = Nothing
%>
<%
Recordset2.Close()
Set Recordset2 = Nothing
%>
