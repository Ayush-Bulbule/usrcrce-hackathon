<?= view("/worker/navbar") ?>
 
<div class="container" style="margin-top:4rem;">
    <div class="row">
        <div class="col-lg-8 h-screen mx-auto " style="min-height: 70vh;">
            <h4 class="text-center pt-3">Client Requests</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Quote Price</th>

                    </tr>
                </thead>
                <tbody>
            <?php
                foreach($results as $row)
            {
                
              echo"
              <tr>
              <td scope='row'>".$row['id']."</td>
              <td>".$row['title']."</td>
              <td>".$row['description']."</td>
              <td>".$row['category']."</td>
              <td>".$row['client']."</td>
              <td><a class='btn btn-primary'>Quote</a></td>

            </tr>";
            }
           
          ?>
                   
                   
                </tbody>
            </table>

        </div>
    </div>
</div>

        
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; PICTIAN. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
