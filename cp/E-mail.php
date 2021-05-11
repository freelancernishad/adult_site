<?php include 'header.php';?>
<script type="text/javascript">

	document.getElementsByClassName("menuList")[7].classList.add("active");


</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Email</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">E-mail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">


          <div class="col-12 col-md-3"></div>
          <div class="col-12 col-md-6">
            <div class="card">

              <!-- /.card-header -->
          
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="toEmail">To Email <span style="color:red;">*</span></label>
                    <input type="email" class="form-control" id="toEmail" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="Subject">Subject <span style="color:red;">*</span></label>
                    <input type="text" class="form-control" id="Subject" placeholder="Enter Subject">
                  </div>
                  <div class="form-group">
                    <label for="Subject">Message <span style="color:red;">*</span></label>
                   <textarea name="" class="form-control fontSize" id="" cols="30" rows="4" spellcheck="false"></textarea>
                 
               </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
          
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-md-3"></div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include 'footer.php';?>