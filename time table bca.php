<?php
include 'connect.php';
mysqli_select_db($conn,"exammanagemnet");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exam Management</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://admin template/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin template/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="admin template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="admin template/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="admin template/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-5">
    <!-- Brand Logo -->
     <a href="#" class="brand-link">
      <span class="brand-text font-weight-bold"><strong>Exam Management</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="img/photo_2021-09-23_20-35-38.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><strong>Admin</strong></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			   <li class="nav-item">
            <a href="adminhome page.php" class="nav-link active">
             <p>
                Home
            </p>
			  </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
             <p>
             I Semester
            </p>
			  </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
             <p>
             II Semester
            </p>
			  </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
             <p>
             III Semester
            </p>
			  </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
             <p>
             IV Semester
            </p>
			  </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
             <p>
             v Semester
            </p>
			  </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
             <p>
             VI Semester
            </p>
			  </a>
          </li>
	      <li class="nav-item">
            <a href="login page.php" class="nav-link active">
             <p>
                Log Out
            </p>
		    </a>
          </li>
          </li>                   
        </ul>
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
      <div class="container-fluid">
          <form method="post" >
			  <h1 style="text-align:center"><font face="Times New Roman, Times, serif">Student Allocation</font></h1>
			  <hr>
<table align="center"  cellpadding="20px" cellspacing="10px" border="3px">
<tr>
<th style="background-color:#FF9900""text-align:left">Course_code:</th>
<td style="background-color:#FF9900"><input type="txtCourse_code" name="txtCourse_code"></td>
</tr>
<tr>
<th style="background-color:#FF9900""text-align:left">Course_title :</th>
<td style="background-color:#FF9900">
<select name="lstSid" id="lstSid">
          <option value="0">select</option>
        <?php
        $sql="select * from subject";
		$query=mysqli_query($conn,$sql);
		while($data=mysqli_fetch_array($query))
		{
		?>
	 <option value=<?php echo $data["Sname"] ?>><?php echo $data["Sname"];?> </option>
	 <?php
		} 
		?>  
  </select>
</td>
</tr>
<tr>
<th style="background-color:#FF9900""text-align:left">Date:</th>
<td style="background-color:#FF9900"><input type="date" name="dobtxt"></td>
</tr>
<tr>
<th style="background-color:#FF9900""text-align:left">Time_Start:</th>
<td style="background-color:#FF9900"><input type="time" id="appt" name="appt"></td>
</tr>
<tr>
<th style="background-color:#FF9900""text-align:left">Time_End:</th>
<td style="background-color:#FF9900"><input type="time" id="appt" name="appt"></td>
</tr>
<tr>
<th style="background-color:#FF9900""text-align:left">Room :</th>
<td style="background-color:#FF9900">
<select name="lstHid" id="lstHid">
          <option value="0">select</option>
        <?php
        $sql="select * from hall";
		$query=mysqli_query($conn,$sql);
		while($data=mysqli_fetch_array($query))
		{
		?>
	 <option value=<?php echo $data["Hname"] ?>><?php echo $data["Hname"];?> </option>
	 <?php
		} 
		?>  
  </select>
</td>
</tr>
<tr>
<th style="background-color:#FF9900""text-align:left">Seat :</th>
<td style="background-color:#FF9900"><input type="txtnumber" name="txtnumber"></td>
</tr>
<tr>
<td align="center" background-color="blue" colspan="2"><input type="submit"  value="   Allocate   " name="btnsave"></td>
</tr>
<!--<td align="center" colspan="2"><input type="reset"  value="RESET" name="reset"></td>-->
</table>
</form>
 
<?php
if(isset($_POST["btnsave"]))
{
$Course_code=$_POST["txtCourse_code"];
$Sid=$_POST["lstSid"];
$Date=$_POST["dobtxt"];
$appt=$_POST["appt"];
$appt=$_POST["appt"];
$Hid=$_POST["lstHid"];
$Seat=$_POST["txtnumber"];
$sql="INSERT INTO timetable(CID,Course_code,Course_title,Date,Time_Start,Time_End,Room,Seat)VALUES('','$Course_code','$Sid','$Date','$appt','$appt','$Hid','$Seat')";
$query=mysqli_query($conn,$sql);
if($query)
{
echo "New record has been added successfully";
}
else
{
echo "Error :".mysqli_error($conn);
}
mysqli_close($conn);
}



?>

          <!-- ./col -->
          <!-- ./col -->
          <!-- ./col -->
          <!-- ./col -->
    </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col --><!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)--><!-- right col -->
        </div>
        <!-- /.row (main row) -->
  </div><!-- /.container-fluid --><!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="admin template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="admin template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="admin template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="admin template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="admin template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="admin template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="admin template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="admin template/plugins/moment/moment.min.js"></script>
<script src="admin template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="admin template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin template/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin template/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin template/dist/js/pages/dashboard.js"></script>
</body>
</html>
