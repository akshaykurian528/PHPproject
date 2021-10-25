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
          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Registration
                <i class="right fas fa-angle-left"></i> 
				</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="staff Reg.php" class="nav-link">
                  
                  <p>Staff Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="subject Reg.php" class="nav-link">
                  
                  <p>Subject Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="hall Reg.php" class="nav-link">
                  
                  <p>Hall Registration</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="student Reg.php" class="nav-link">
                  
                  <p>Student Registration</p>
                </a>
              </li>
            </ul>
			<li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Allocation
                <i class="right fas fa-angle-left"></i>             
				 </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="staff Allocate.php" class="nav-link">
                  
                  <p>Staff Allocation</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="student allocation.php" class="nav-link">
                  
                  <p>Student Allocation</p>
                </a>
              </li>
			  </ul>
      <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                View Details
                <i class="right fas fa-angle-left"></i>             
				 </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view schedule.php" class="nav-link ">
                  
                  <p>Exam Schedule</p>
                </a>              
				</li>
				 <li class="nav-item">
                <a href="edit time table.php" class="nav-link ">
                  
                  <p>Time table Schedule</p>
                </a>              
				</li>
              </li>
		    </ul>
        <li class="nav-item">
            <a href="inbox.php" class="nav-link active">
             <p>
                Inbox
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
          <div class="col-sm-6">
          </div>
		  <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
   
      <div class="container-fluid">
         <h1 style="text-align:center"><font face="Times New Roman, Times, serif">SEM 1 Time table</font></h1>
			  <hr>
			  <?php
$sql="select * from student_visibility where sem=1";
$query=mysqli_query($conn,$sql);
if(!$query)
{
echo"Query does not working".mysqli_error($conn);
die;
}
else
{
echo "<table border='3' align='center' cellpadding='20px' cellspacing='20px'>
<tr>
<th>Sem</th>
<th>Course Title</th>
<th>Date</th>
<th>Time_Start</th>
<th>Time_End</th>
<th>Room</th>
<th>Update</th>
<th>Delete</th>
</tr>";
while($data=mysqli_fetch_array($query))
{
$a=(int)$data['id'];
echo "<tr>
<td>".$data['sem']."</td>
<td>".$data['course_title']."</td>
<td>".$data['date']."</td>
<td>".$data['time_start']."</td>
<td>".$data['time_end']."</td>
<td>".$data['room']."</td>
<td><a href='update2.php?id= $a'>Update</a></td>
<td><a href='delete2.php?id= $a'>Delete</a></td>
</tr>";
}
echo "</table>";
}
?>

<br>

<div class="container-fluid">
         <h1 style="text-align:center"><font face="Times New Roman, Times, serif">SEM 2 Time table</font></h1>
			  <hr>
			  <?php
$sql="select * from student_visibility where sem=2";
$query=mysqli_query($conn,$sql);
if(!$query)
{
echo"Query does not working".mysqli_error($conn);
die;
}
else
{
echo "<table border='3' align='center' cellpadding='20px' cellspacing='20px'>
<tr>
<th>Sem</th>
<th>Course Title</th>
<th>Date</th>
<th>Time_Start</th>
<th>Time_End</th>
<th>Room</th>
<th>Update</th>
<th>Delete</th>
</tr>";
while($data=mysqli_fetch_array($query))
{
$a=(int)$data['id'];
echo "<tr>
<td>".$data['sem']."</td>
<td>".$data['course_title']."</td>
<td>".$data['date']."</td>
<td>".$data['time_start']."</td>
<td>".$data['time_end']."</td>
<td>".$data['room']."</td>
<td><a href='update2.php?id= $a'>Update</a></td>
<td><a href='delete2.php?id= $a'>Delete</a></td>
</tr>";
}
echo "</table>";
}
?>

<br>

<div class="container-fluid">
         <h1 style="text-align:center"><font face="Times New Roman, Times, serif">SEM 3 Time table</font></h1>
			  <hr>
			  <?php
$sql="select * from student_visibility where sem=3";
$query=mysqli_query($conn,$sql);
if(!$query)
{
echo"Query does not working".mysqli_error($conn);
die;
}
else
{
echo "<table border='3' align='center' cellpadding='20px' cellspacing='20px'>
<tr>
<th>Sem</th>
<th>Course Title</th>
<th>Date</th>
<th>Time_Start</th>
<th>Time_End</th>
<th>Room</th>
<th>Update</th>
<th>Delete</th>
</tr>";
while($data=mysqli_fetch_array($query))
{
$a=(int)$data['id'];
echo "<tr>
<td>".$data['sem']."</td>
<td>".$data['course_title']."</td>
<td>".$data['date']."</td>
<td>".$data['time_start']."</td>
<td>".$data['time_end']."</td>
<td>".$data['room']."</td>
<td><a href='update2.php?id= $a'>Update</a></td>
<td><a href='delete2.php?id= $a'>Delete</a></td>
</tr>";
}
echo "</table>";
}
?>

<br>

<div class="container-fluid">
         <h1 style="text-align:center"><font face="Times New Roman, Times, serif">SEM 4 Time table</font></h1>
			  <hr>
			  <?php
$sql="select * from student_visibility where sem=4";
$query=mysqli_query($conn,$sql);
if(!$query)
{
echo"Query does not working".mysqli_error($conn);
die;
}
else
{
echo "<table border='3' align='center' cellpadding='20px' cellspacing='20px'>
<tr>
<th>Sem</th>
<th>Course Title</th>
<th>Date</th>
<th>Time_Start</th>
<th>Time_End</th>
<th>Room</th>
<th>Update</th>
<th>Delete</th>
</tr>";
while($data=mysqli_fetch_array($query))
{
$a=(int)$data['id'];
echo "<tr>
<td>".$data['sem']."</td>
<td>".$data['course_title']."</td>
<td>".$data['date']."</td>
<td>".$data['time_start']."</td>
<td>".$data['time_end']."</td>
<td>".$data['room']."</td>
<td><a href='update2.php?id= $a'>Update</a></td>
<td><a href='delete2.php?id= $a'>Delete</a></td>
</tr>";
}
echo "</table>";
}
?>

<br>

<div class="container-fluid">
         <h1 style="text-align:center"><font face="Times New Roman, Times, serif">SEM 5 Time table</font></h1>
			  <hr>
			  <?php
$sql="select * from student_visibility where sem=5";
$query=mysqli_query($conn,$sql);
if(!$query)
{
echo"Query does not working".mysqli_error($conn);
die;
}
else
{
echo "<table border='3' align='center' cellpadding='20px' cellspacing='20px'>
<tr>
<th>Sem</th>
<th>Course Title</th>
<th>Date</th>
<th>Time_Start</th>
<th>Time_End</th>
<th>Room</th>
<th>Update</th>
<th>Delete</th>
</tr>";
while($data=mysqli_fetch_array($query))
{
$a=(int)$data['id'];
echo "<tr>
<td>".$data['sem']."</td>
<td>".$data['course_title']."</td>
<td>".$data['date']."</td>
<td>".$data['time_start']."</td>
<td>".$data['time_end']."</td>
<td>".$data['room']."</td>
<td><a href='update2.php?id= $a'>Update</a></td>
<td><a href='delete2.php?id= $a'>Delete</a></td>
</tr>";
}
echo "</table>";
}
?>

<br>

<div class="container-fluid">
         <h1 style="text-align:center"><font face="Times New Roman, Times, serif">SEM 6 Time table</font></h1>
			  <hr>
			  <?php
$sql="select * from student_visibility where sem=6";
$query=mysqli_query($conn,$sql);
if(!$query)
{
echo"Query does not working".mysqli_error($conn);
die;
}
else
{
echo "<table border='3' align='center' cellpadding='20px' cellspacing='20px'>
<tr>
<th>Sem</th>
<th>Course Title</th>
<th>Date</th>
<th>Time_Start</th>
<th>Time_End</th>
<th>Room</th>
<th>Update</th>
<th>Delete</th>
</tr>";
while($data=mysqli_fetch_array($query))
{
$a=(int)$data['id'];
echo "<tr>
<td>".$data['sem']."</td>
<td>".$data['course_title']."</td>
<td>".$data['date']."</td>
<td>".$data['time_start']."</td>
<td>".$data['time_end']."</td>
<td>".$data['room']."</td>
<td><a href='update2.php?id= $a'>Update</a></td>
<td><a href='delete2.php?id= $a'>Delete</a></td>
</tr>";
}
echo "</table>";
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
