
<?= view("/admin/components/header") ?>

      <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
      <div class="content-wrapper">
        <div class="content">


        <div class="col-xl-12">
    <!-- Basic Table-->
    <div class="card card-default">
      <div class="card-header">
        <h2>Workers Information</h2>
      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-table-1">
          <pre class="language-html mb-4">

        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Age</th>
              <th scope="col">Work Category</th>
              <th scope="col">Address</th>
              <th scope="col">Id</th>
            </tr>
          </thead>
          <tbody>
            <?php
          foreach($results as $row)
            {
              echo"
              <tr>
              <td scope='row'>".$row['id']."</td>
              <td>".$row['name']."</td>
              <td>".$row['email']."</td>
              <td>".$row['phone']."</td>
              <td>".$row['age']."</td>
              <td>".$row['work_cat']."</td>
              <td>".$row['address']."</td>
              <td><a download href='/uploads/".$row['idproof']."'><i class='mdi mdi-download'></a></td>
            </tr>";
            }
           
          ?>
            
          </tbody>
        </table>
      </div>
    </div>


 
<?= view("/admin/components/footer") ?>