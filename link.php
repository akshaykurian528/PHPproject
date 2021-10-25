<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script language="JavaScript">
function mmLoadMenus() {
  if (window.mm_menu_1118162615_0) return;
  window.mm_menu_1118162615_0 = new Menu("root",80,18,"",12,"#000000","#FFFFFF","#CCCCCC","#000084","left","middle",3,0,1000,-5,7,true,false,true,0,true,true);
  mm_menu_1118162615_0.addMenuItem("Course","location='course.php'");
  mm_menu_1118162615_0.addMenuItem("Student","location='student.php'");
  mm_menu_1118162615_0.addMenuItem("Mark","location='student.php'");
   mm_menu_1118162615_0.fontWeight="bold";
   mm_menu_1118162615_0.hideOnMouseOut=true;
   mm_menu_1118162615_0.bgColor='#555555';
   mm_menu_1118162615_0.menuBorder=1;
   mm_menu_1118162615_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1118162615_0.menuBorderBgColor='#777777';

mm_menu_1118162615_0.writeMenus();

}

</script>
<script language="JavaScript" src="mm_menu.js"></script>
</head>

<body>


<form id="form1" name="form1" method="post" action="">
  <table width="100%" height="42" border="0">
    <tr>
      <td bgcolor="#DAF7A6"><a href="adminhome.php"><strong>Home</strong></a></td>
	 <td bgcolor="#DAF7A6"><a href="#" name="link1" id="link1" onclick="MM_showMenu(window.mm_menu_1118162615_0,118,16,null,'link1')" onmouseout="MM_startTimeout();"><strong>Registration</strong></a></td>
	
	  <!--<td bgcolor="#DAF7A6"><a href="course.php"><strong>Course Registration</strong></a></td>
	  <td bgcolor="#DAF7A6"><a href="student.php"><strong>Student Registration</strong></a></td>-->
	  
	  <td bgcolor="#DAF7A6"><a href="studentview.php"><strong>View Students</strong></a></td>
      <!--<td bgcolor="#FF0000"><a href="#" name="link1" id="link1" onclick="MM_showMenu(window.mm_menu_1118162615_0,118,16,null,'link1')" onmouseout="MM_startTimeout();"><strong>REGISTRATIONS</strong></a></td>-->
      <td bgcolor="#DAF7A6"><a href="login.php"><strong>Logout</strong></a></td>
    </tr>
  </table>
</form>
<script language="JavaScript1.2">mmLoadMenus();</script>

</body>
</html>
