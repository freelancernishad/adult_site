<?php include 'header.php';?>
<script type="text/javascript">

	document.getElementsByClassName("menuList")[5].classList.add("active");
		document.getElementsByClassName("submenu")[4].classList.add("menu-open");
document.getElementsByClassName("toggolMenu")[1].classList.add("menu-is-opening");
document.getElementsByClassName("toggolMenu")[1].classList.add("menu-open");

</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <span class='btn btn-info' onclick='addNew("form/add_regions_list.php")' >Add New</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">regions_list</li>
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
                    <th>	Region</th>
           
              
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>1</th>
                    <th>International</th>
             
            
                    <th>
                    <a href="#" onclick='addNew("form/add_regions_list.php")' ><i style='color:blue' class="far fa-edit"></i></a>
                 
  
                    
                    </th>
                  </tr>  
                  <tr>
                  <th>2</th>
                    <th>International</th>
                 
                  
                    <th>
                    <a href="#"><i style='color:blue' class="far fa-edit"></i></a>
                   
     
                    
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