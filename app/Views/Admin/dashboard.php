
<?= view("/admin/components/header") ?>

      <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
      <div class="content-wrapper">
        <div class="content">

        <div class="row">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-default card-mini">
                        <div class="card-header">
                          <h2>$124</h2>
                          <div class="dropdown">
                          
                          </div>
                          <div class="sub-title mt-5">
                            <span class="mr-1">Workers</span> |
                            <span class="mx-1">45%</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                          </div>
                        </div>
                        
                      </div>
                    </div>
</div> 



          <!-- Footer -->
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright <a class="text-primary" href="" target="_blank">PICTIAN</a>.
              </p>
            </div>
            <script>
              var d = new Date();
              var year = d.getFullYear();
              document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

        </div>
      </div>



      <?= view("/admin/components/footer") ?>