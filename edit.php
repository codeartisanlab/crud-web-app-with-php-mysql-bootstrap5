  <?php include('header.php'); ?>

  <?php

    $id=$_GET['id'];

    // Update Data From database
    $UpdateRes='';
    if (isset($_POST['submit'])) {
      $UpdateRes=edit_data($conn,$_POST,$id);

    }

    
    // Fetch Single data
    $student=fetch_single($conn,$id);

     // _p($student);

    if($student['bool']==false){
      die('Data not Exist');

    }
  ?>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
              <?php
                echo $UpdateRes;
              ?>
          <div class="card">
            <div class="card-header">
              <h5>EDIT DATA
                 
              </h5>
              
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $student['alldata']['name']; ?> ">
                </div>

                <div class="mb-3">
                  <label class="form-label">Class</label>
                  <input type="text" name="class" class="form-control" value="<?php echo $student['alldata']['class']; ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Roll No</label>
                  <input type="text" name="rollno" class="form-control" value="<?php echo $student['alldata']['rollno']; ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Phone</label>
                  <input type="tel" name="phone" class="form-control" value="<?php echo $student['alldata']['phone']; ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $student['alldata']['email']; ?>">
                </div>
                <a href="index.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('footer.php'); ?>