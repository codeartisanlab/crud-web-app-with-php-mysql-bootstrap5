<?php include('header.php'); ?>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              <h5>PHP CRUD LIST
                 <a href="add.php" class="btn btn-primary float-end">Add / Register</a>
              </h5>
              
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll No</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit / Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i=1;
                    $students=fetch_all($conn);
                    if($students['bool']==true){
                      foreach ($students['alldata'] as $student) {
                       
                         // _p($student);
                      ?>
                        <tr>
                          <th scope="row"><?php echo $i; $i++; ?></th>
                          <td><?php echo $student[1]; ?></td>
                          <td><?php echo $student[2]; ?></td>
                          <td><?php echo $student[3]; ?></td>
                          <td><?php echo $student[4]; ?></td>
                          <td><?php echo $student[5]; ?></td>
                          <td>
                            <a href="edit.php?id=<?php echo $student[0]; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $student[0]; ?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>

                  <?php

                  }

                    }
                  ?>
                  

                 
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('footer.php'); ?>