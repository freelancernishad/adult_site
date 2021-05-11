<?php include 'header.php'; ?>
<script type="text/javascript">

	document.getElementsByClassName("menuList")[3].classList.add("active");


</script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <span class='btn btn-info' onclick='addNew("form/add_escort_profile.php")' >Add New</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">escort_profile</li>
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
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Expire Date</th>
                    <th>Action</th>
              
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                    <input type="file" hidden name='escortImage' id='escortImage'>
                    <label for="escortImage" style="cursor:pointer">
                    <img class='ProfilePiture' src="dist/img/user1-128x128.jpg" alt="">
                    </label>
                    
                    </td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 
                      <a  onclick='addNew("form/add_escort_profile.php")'  href="#"><i style='color:blue' class="far fa-edit"></i></a>
                    <a href="#"><i style='color:red'  class="fa fa-trash"></i></a>
                    <a href="#"><i style='color:lightseagreen'  class="fa fa-ban"></i></a>
                    <a href="#"><i style='color:black'  class="fa fa-lock"></i></a></td>
            
                  </tr>
                
                  </tbody>
                  <tfoot>
          
                  </tfoot>
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