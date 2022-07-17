<div class="row">

    <div class="col-md-3">

    </div>
    <div class="col-sm-6" data-aos="zoom-in-up">
        <div class="box box-solid">
            <div class="box-header with-border bg-purple">
                <h3 class="box-title"><?= $title; ?></h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert bg-purple" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>

                <div class="row">
                    <div class="col-md-12">
                        <p>Terima Kasih Sudah Melakukan Pendaftaran <strong>DIFEST 2022</strong> Di Jenis Perlombaan <strong>Desain Poster</strong></p>
                        <p>Untuk informasi lebih lanjut Anda bisa hubungi kontak kami di halaman Home paling bawah.</p>
                        <p>Dan untuk memastikan Anda sudah melakukan pendaftaran, Anda wajib melakukan klik tombol button Whatsapp di bawah untuk menghubungi kami !!!</p>
                    </div>
                </div>
                <br>
                <div class="row JustifyCenter">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <center>
                            <a href="https://wa.link/3ib61e" class="btn btn-social btn-success" width="50%">
                                <img src="<?= base_url('gambar/whatsapp.png') ?>" alt=""> Kirim Whatsapp
                            </a>
                        </center>
                    </div>
                    <div class="col-md-4"></div>
                </div>



                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3">

        </div>
    </div>