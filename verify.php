
    <?php
       @include('layouts/header.php');
    ?>



    <main role="main">

<!--<img src="img/quickfixverify.jpg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 verify2 contentmiddle">
      <div class="contentmiddle">
        <div class="column mcb-column one column_column  column-margin-20px">
          <div class="column_attr clearfix" style="">
            <h2>VERIFY YOUR PRODUCT</h2>
            <p class="big">Please fill in the form below and submit for verification. You should see a verification success message if this is original quickfix.</p>
          </div>
        </div>
        <div class="column mcb-column one-second column_column  column-margin-">
          <div class="column_attr clearfix" style="">




          </div>
        </div>

      </div>


    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 verify">
      <form id="verificationForm" action="#">
        <fieldset disabled>
          <div class="form-group">
            <label for="productid">Product ID</label>
            <input type="text" class="form-control" readonly id="productid" value="<?php echo $_GET['code']; ?>" required>
          </div>
        </fieldset>

        <div class="form-row form-inline">
          <div class="form-group col-md-6">
            <label class="mr-sm-2" for="vehicletype">Select your Vehicle Type*</label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="vehicletype">
              <option value="MOTORCYCLE">Motorcycle</option>
              <option value="CAR">Car</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="verifyname">Name*</label>
            <input type="text" class="form-control" id="verifyname" placeholder="Name" required>
          </div>
        </div>


        <div class="form-group">
          <label for="inputemailverify">Email</label>
          <input type="email" class="form-control" id="inputemailverify" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="inputODO">Current ODO</label>
          <input type="number" class="form-control" id="inputODO" required placeholder="How many KM did your vehicle run so far?">
        </div>
        <div class="form-group">
          <label for="mobileinputverify">Mobile*</label>
          <input type="text" class="form-control" id="mobileinputverify" placeholder="+8801XXXXXXXXX" required>
        </div>



        <div style="text-align: center;">
          <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Submit</button>
        </div>
      </form>

    </div><!-- /.adv -->

  </div>



</div><!-- /.container -->




    <?php
        @include('layouts/footer.php');
    ?>