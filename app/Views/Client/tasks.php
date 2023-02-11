<?= view("/client/navbar") ?>
<div class="container" style="margin-top:4rem;">
    <div class="row">
        <div class="col-lg-8 h-screen mx-auto " style="min-height: 70vh;">
            <h4 class="text-center pt-3">Your Tasks</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Quotes</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($tasks); $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo$i+1; ?></th>
                        <td><?php echo $tasks[$i]['title'] ;?></td>
                        <td><?php echo $tasks[$i]['quotes']; ?></td>
                        <td><?php echo $tasks[$i]['status']; ?></td>
                        <td><a href="<?= base_url('client/task/'.$tasks[$i]['id']) ?>" class="btn btn-primary btn-sm">View</a>
                        <a href="<?= base_url('client/delete/'.$tasks[$i]['id']) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    <?php } ?>
                   
                   
                </tbody>
            </table>

        </div>
    </div>
</div>


<?= view("/client/footer") ?>