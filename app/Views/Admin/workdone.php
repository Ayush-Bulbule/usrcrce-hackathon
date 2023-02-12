
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
        <h2>Requests Completed</h2>
      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-table-1">
          <pre class="language-html mb-4">

        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Task</th>
              <th scope="col">Posted BY</th>
              <th scope="col">Completed BY</th>
              <th scope="col">Quoted Price</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //print_r($data);
            foreach($data as $r)
            {
              echo"
            <tr>
            <td>1</td>
            <td>".$data['task']['title']."</td>
            <td>".$data['client']['name']."</td>
            <td>".$data['worker']['name']."</td>
            <td>".$data['quote']['amount']."</td>
            </tr>
            ";
            }
            
            ?>
          </tbody>
        </table>
      </div>
    </div>


 
<?= view("/admin/components/footer") ?>