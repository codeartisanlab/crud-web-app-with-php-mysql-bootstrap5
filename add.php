  <?php include('header.php'); ?>

  <?php
  $addres="";
    if(isset($_POST['submit'])){
      $addres= add_data($conn,$_POST);
    }
  ?>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
            <?php
              echo $addres;
            ?>
         
          <div class="card">
            <div class="card-header">
              <h5>ADD DATA
                 
              </h5>
              
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                </div>

                <div class="mb-3">
                  <label class="form-label">Class</label>
                  <input type="text" name="class" class="form-control" placeholder="Enter Your Class">
                </div>

                <div class="mb-3">
                  <label class="form-label">Roll No</label>
                  <input type="text" name="rollno" class="form-control" placeholder="Enter Your Roll No">
                </div>

                <div class="mb-3">
                  <label class="form-label">Phone</label>
                  <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone">
                </div>

                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <a href="index.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('footer.php'); ?>