<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-4 text-gray-800"><?= $title; ?></h1>

    <h2 class="h3 mb-4">Data User</h2>
    <div class="row">
        <?php foreach ($all_user as $users) : ?>
            <div class="card mb-3 col-lg-6">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <img src="<?= base_url('assets/img/profile/') . $users['image']; ?>" alt="" class="card-img">
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <p class="card-text">
                                Full Name : <?= $users['name']; ?>
                            </p>
                            <p class="card-text">
                                Email : <?= $users['email']; ?>
                            </p>
                            <p class="card-text">
                                Username : <?= $users['username']; ?>
                            </p>
                            <p class="card-text">
                                <small class="text-muted"> Member since <?= date('d F Y', $users['date_created']); ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->