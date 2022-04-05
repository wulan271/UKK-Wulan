<section class="page-section bg-ligh" id="login">
    <div class="container">
        <center>
            <h2 class="section-heading text-uppercase">Login</h2>
            <h6>Belum Punya Akun</h6> <a href="<?= base_url('index.php/auth/from_register') ?>">Klik Disini</a>
        </center>
        <form action="<?= base_url('index.php/auth/proses_login') ?>" method="post">
            <div class="container">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="container">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="container form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>