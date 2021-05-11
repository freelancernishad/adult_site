<?php include 'header.php';?>
<script type="text/javascript">

	document.getElementsByClassName("menuList")[2].classList.add("active");


</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <span class='btn btn-info' onclick='addNew("form/add_models_account.php")' >Add New</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">models_account_list</li>
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
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL.</th>
                    <th>Username</th>
                    <th>Registered Date</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>1</th>
                    <th>wordpress</th>
                    <th>2021-05-08</th>
                    <th>freelancernishad123@gmail.com</th>
                    <th>2000/01/11</th>
                    <th style='background:green;    color: white;'>ACTIVE</th>
                    <th>
                    <a href="#"  onclick='addNew("form/add_models_account.php")' ><i style='color:blue'class="far fa-edit"></i></a>
                    <a href="#"><i style='color:red'  class="fa fa-trash"></i></a>
                    <a href="#"><i style='color:lightseagreen'  class="fa fa-ban"></i></a>
                    <a href="#"><i style='color:black'  class="fa fa-lock"></i></a>
                    
                    </th>
                  </tr>  
                  <tr>
                    <th>2</th>
                    <th>wordpress</th>
                    <th>2021-05-08</th>
                    <th>freelancernishad123@gmail.com</th>
                    <th>2000/01/11</th>
                    <th style='background:red;    color: white;'>INACTIVE</th>
                    <th>
                    <a href="#" onclick='addNew("form/add_models_account.php")' ><i style='color:blue'class="far fa-edit"></i></a>
                    <a href="#"><i style='color:red'  class="fa fa-trash"></i></a>
                    <a href="#"><i style='color:lightseagreen'  class="fa fa-ban"></i></a>
                    <a href="#"><i style='color:black'  class="fa fa-lock"></i></a>
                    
                    </th>
                  </tr>  

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
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