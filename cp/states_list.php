<?php include 'header.php';?>
<script type="text/javascript">

	document.getElementsByClassName("menuList")[1].classList.add("active");
		document.getElementsByClassName("submenu")[1].classList.add("menu-open");
document.getElementsByClassName("toggolMenu")[0].classList.add("menu-is-opening");
document.getElementsByClassName("toggolMenu")[0].classList.add("menu-open");

</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <span class='btn btn-info' onclick='addNew("form/add_state.php")' >Add New</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">states_list</li>
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
                    <th>Country</th>
                    <th>Code</th>
                    <th>State</th>
                    <th>State Code</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Afghanistan</td>
                    <td align="center">AF</td>
                    <td align="center"><img src="https://www.sunrise-escortprofiles.com/country_flags/Afghan_Flag_Wallpaper_(2).jpg" style="width: 70px; height: 50px"></td>
                    <td align="center">+93</td>
                    <td align="center"><a href="#"  onclick='addNew("form/add_state.php")'  data-toggle="tooltip" title="" data-original-title="Edit"><i style="color: blue" class="far fa-edit"></i></a>&nbsp;
                    <a href="#myModal1" data-toggle="modal" title="Delete"><i style="color: red" class="fa fa-trash"></i></a>
                                            </td>
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