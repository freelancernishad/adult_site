<?php include('header.php'); ?>

<h1 class="sectionTitle"><strong>Search <span style='color:#28a7e9;'>Models</span> </strong></h1>

<div class="container">

<form action="" method="post">

 <div class="row">
 <div class="col-md-3">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Country</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-md-3">
    <label class="mr-sm-2" for="inlineFormCustomSelect">City</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-md-3">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Please Select</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Transsexual</option>
      </select>
    </div>
    <div class="col-md-3">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Race</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">White</option>
        <option value="2">Asian</option>
        <option value="3">Indian</option>
        <option value="3">Mixed Race</option>
        <option value="3">African</option>
        <option value="3">Latin</option>
        <option value="3">Other</option>
       
      </select>
    </div>

 
 </div>


 <div class="form-row align-items-center">
 <div class="d-flex justify-content-center align-items-center">
      <button type="submit" class="btn btn-primary searchBtn">SEARCH</button>
 </div>
 </div>
</form>


</div>


<?php include('footer.php'); ?>