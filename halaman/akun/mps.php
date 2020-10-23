<?php 

$data = new database();

?>

<div class="about home-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>PEMILIHAN RAYA CALON KETUA MAJELIS PERMUSYAWARATAN SANTRI</h2>
                    <h2>MTS HUSNUL KHOTIMAH 2 KUNINGAN</h2>
                    <h3>Klik VOTE Untuk Memilih</h3>
                </div>
            </div>
        </div>
        <?php

        $query_user = $data->getDb()->query("SELECT * FROM hasil_mps WHERE siswa_user_name = '$nama'");
        $hasil_vote = $query_user->fetchAll();
        $row = count($hasil_vote);

        if ($row > 0) :
            $hitung = $data->getDb()->query("SELECT * FROM hasil_mps");
            $jml = $hitung->fetchAll();
            $total = count($jml);
        ?>
        <div class="row">
            <div class="skill-home"> 
                <div class="skill-home-solid clearfix"> 
                    <div class="col-md-12 text-center"> 
                        <span class="icons c3"><i class="fa fa-trophy"></i></span> 
                        <div class="box-area">
                            <h2>VOTE BERHASIL</h2> <h4>Selamat, VOTE Untuk Pemilihan Ketua MPS MTs Husnul Khotimah 2 Kuningan Berhasil.</h4> <h4>Jumlah suara masuk = <strong><?= $total; ?></strong></h4>
                            <br>
                            <a href="user.php?page=pemira" class="btn btn-primary"><i class="icon-bolt"></i> KEMBALI KE HALAMAN PEMIRA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else : ?>
        <div class="row">
            <div id="isotope-gallery-container">
                <?php
                $query = $data->getDb()->query("SELECT * FROM mps");
                $calon = $query->fetchAll();
                foreach ($calon AS $n) :
                ?>
                <form method="post" action="proses-mps.php">
                    <div class="col-md-6 col-sm-6 col-xs-12 gallery-item-wrapper club">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="asset/main/img/calon/<?= $n['gambar']; ?>" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="asset/main/img/calon/<?= $n['gambar']; ?>" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h4><?= $n['nama']; ?></h4>
                                    <input type="hidden" name="nama" value="<?= $nama; ?>">
                                    <input type="hidden" name="nourut" value="<?= $n['id']; ?>">
                                    <p><button type="submit" class="btn btn-primary">VOTE</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>