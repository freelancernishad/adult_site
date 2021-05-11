<?php include 'header.php';?>
<script type="text/javascript">

	document.getElementsByClassName("menuList")[11].classList.add("active");


</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">account_setting</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">


    
        <div class="col-12">
        <div style="padding: 32px 0px;" class="card">

              <!-- /.card-header -->
          <div class="row">
          <div class="col-md-4 d-flex  align-items-start justify-content-center">
          <div class="accountImage" style='width:200px'>
          <img width="100%" src="dist/img/user2-160x160.jpg" alt="">
          <form action="" method="post" enctype="multipart/form">
            <input type="file" onchange='submit()' hidden name='AccountImage' id="AccountImage">
            <label class='AccountImage' for="AccountImage"> Upload Account Image</label>
            </form>
          </div>
          
          </div>
          <div class="col-md-8">
          <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="toEmail">Username</label>
                    <input type="email" class="form-control" id="toEmail" value='Admin' placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="Subject">Email</label>
                    <input type="text" class="form-control" id="Subject" value='freelancernishad123@gmail.com' placeholder="Enter email">
                  </div>
            
                  <button type="submit" class="btn btn-primary float-right">Update</button>
                </div>
                <!-- /.card-body -->

            
                 
             
              </form>
          
          </div>
          
          </div>
              
              </div>
              <!-- /.card-body -->
          
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->

             
          <div class="col-12">
        <div style="padding: 32px 0px;" class="card">

              <!-- /.card-header -->
  <div class="row">
   
              <div class="col-12 col-md-3"></div>
              <div class="col-12 col-md-6">
          <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="oldPass">Old Password</label>
                    <input type="password" class="form-control" id="oldPass" placeholder="Enter Old Password">
                  </div>
                  <div class="form-group">
                    <label for="NewPass">New Password</label>
                    <input type="password" class="form-control" id="NewPass" placeholder="Enter New Password">
                  </div>
                  <div class="form-group">
                    <label for="Conpass">Confirm Password</label>
                    <input type="password" class="form-control" id="Conpass"  placeholder="Enter Confirm Password">
                  </div>
            
                  <button type="submit" class="btn btn-primary float-right">Update</button>
                </div>
                <!-- /.card-body -->
                
            
                 
             
              </form>
              </div>
              <div class="col-12 col-md-3"></div>
              </div>
          
         
              
              </div>
              <!-- /.card-body -->
          
            <!-- /.card -->


            <!-- /.card -->
          </div>
         
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include 'footer.php';?>