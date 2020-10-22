<?php 

$data = new database();
$query = $data->getDb()->query("SELECT * FROM mps");
$nama = $query->fetchAll();
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
        <div class="row">
            <div id="isotope-gallery-container">
                <?php 
                foreach ($nama AS $n) :
                ?>
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
                                <p><a href="#" class="btn btn-primary">VOTE</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <a href="user.php?page=pemira" class="btn btn-primary">KEMBALI KE HALAMAN PEMIRA</a>
                </div>
            </div>
        </div>
    </div>
</div>