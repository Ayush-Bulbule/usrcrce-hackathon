<?= view("/client/navbar") ?>
<div class="container" style="margin-top:4rem;">
    <div class="row">
        <div class="col-lg-10 h-screen mx-auto " style="min-height: 70vh;">
            <h3 class="text-center pt-3">Find Hands!</h3>

            <div class="row">
                <?php for ($i = 0; $i < count($workers); $i++) { ?>

                    <div class="col-lg-3 g-3 col-sm-6">
                         <div class="animate__animated animate bounce card ">
                                <div class="container mt-3">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2922/2922506.png" class="card-img-top " alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title ms-1"><?php echo $workers[$i]['name']; ?></h5>
                                    <p class="card-text  ms-1">Profession: <?php echo $workers[$i]['work_cat']; ?></p>
                                    <p class="card-text ms-1">Address: <?php echo $workers[$i]['address']; ?></p>

                                    <a href="" class=" btn card-btn btn-primary mb-1 mt-1 ">Contact</a>
                                </div>
                            </div>
                    </div>
                <?php } ?>
            </div>





            </tbody>
            </table>

        </div>
    </div>
</div>


<?= view("/client/footer") ?>