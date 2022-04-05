<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Profile</h2>
            <h3 class="section-subheading text-muted">selamat datang di hotel wulan</h3>

            <from action="<?= base_url('index.php/profile/update_data_profile') ?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-strat"><input class="from-control" name="email" type="text" value="<?= $user['email'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td class="text-start">Bassword Baru</td>
                            <td>:</td>
                            <td class="text-strat"><?= $user['nama-lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-start"><Kbd>Konfirmasi Password</Kbd></td>
                            <td>:</td>
                            <td class="text-strat"><?= $user['no_hp'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                         <button type="submit" class="btn btn-primary">Enter</button>
                    </tbody>
                    </thead>
                    </tr>
                    </tbody>
                </table>

            </from>
        </div>
    </div>
</section>