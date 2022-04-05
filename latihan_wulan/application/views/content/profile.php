<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Profile</h2>
            <h3 class="section-subheading text-muted">selamat datang di hotel wulan</h3>

            <table class="tabel tabel-bordered tabel-hover">
                <thead>
                    <tr>
                        <td class="text-start" width="15%">Email</td>
                        <td>:</td>
                        <td class="text-start"><?= $user['email'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-start">Nama Lengkap</td>
                        <td>:</td>
                        <td class="text-start"><?= $user['nama_lengkap'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-start">No Hp</td>
                        <td>:</td>
                        <td class="text-start"><?= $user['no_hp'] ?></td>
                    </tr>
                    </tbody>
                </thead>
            </table>
            Klik<a href="<?= base_url("index.php/profile/update_profile") ?>">disini</a>untuk update profile anda<br>
            Klik<a href="<?= base_url("index.php/auth/ganti_password") ?>">disini</a>untuk mengganti password anda<br>


        </div>
    </div>
</section>