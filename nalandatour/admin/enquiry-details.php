<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Data Find Car -  Admin Nalanda Tour</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <?php include('header.php');?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('side.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Nalanda Tour</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Nalanda Tour</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>#SN.</th>
                      <th>Name </th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Mobile</th>
                      <th>Message</th>
                      <th>Dates</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 
                  		include('config.php');
                  		$i=1;
                  		$query="select *from enquiry";
                  		$row=mysqli_query($conn,$query);
                  		while($result=mysqli_fetch_assoc($row))
                  		{
                  	?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $result['name'];?></td>
                      <td><?php echo $result['email'];?></td>
                      <td><?php echo $result['subject'];?></td>
                      <td><?php echo $result['mobile'];?></td>
                      <td><?php echo $result['message'];?></td>
                      <td><?php echo $result['dates'];?></td>
                      <td><a href="delete.php?id=<?php echo $result['id'];?>&type=enquiry" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                	<?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>