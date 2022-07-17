<div class="row" id="home">
    <div class="col-sm-12">
        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert bg-purple" role="alert">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>
    </div>
    <center>
        <div class="col-sm-12" data-aos="zoom-in-up">
            <img class="img-responsive pad" width="60%" src="<?= base_url() ?>/gambar/maskot-owl.png" alt="Photo">
        </div>
    </center>
</div>

<div class="row" id="deskripsi_difest" data-aos="zoom-in-up">
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="info-box bg-purple">
            <div class="box-content" style="padding: 5px;">
                <span class="info-box-text">2022</span>
                <span class="info-box-number">DIGITAL FESTIVAL NASIONAL</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span>
                    <p>Digital Festival Nasional merupakan sebuah kegiatan
                        yang diselenggarakan oleh Himpunan Mahasiswa Manajemen Informatika Politeknik Negeri Subang (HIMMI POLSUB) dimana di dalamnya berisi lomba-lomba bidang IT, webinar nasional dan showcase.</p>
                    <p>Tema kegiatan DIFEST tahun ini yaitu <strong>“Show Your Skills And Increase Your Talent With IT”</strong> artinya dengan semakin berkembangnya teknologi diharapkan para pelajar mampu mendukung terciptanya inovasi dan mengembangkan kemampuan diri dalam bidang teknologi.</p>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>

<!-- START ACCORDION & CAROUSEL-->
<div class="row" id="deskripsi_lomba">
    <div class="col-md-6" data-aos="zoom-in-right">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Deskripsi Perlombaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Desain Web
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="box-body">
                                <p>Desain Web merupakan salah satu cabang perlombaan dalam Difest 2022 yang diadakan oleh Himpunan Mahasiswa Manajemen Informatika Politeknik Negeri Subang, di mana peserta menciptakan suatu desain atau rancangan antarmuka website yang berorientasi pada kemudahan, kenyamanan, dan memberikan pengalaman terbaik bagi pengguna.</p>
                                <p>Perlombaan ini befokus pada menciptakan desain atau rancangan website yang dapat membuat interaksi pengguna dengan website menjadi sederhana, efektif, dan efisien. Tema yang diangkat dalam perlombaan ini adalah <strong>“Penanggulangan Isu Dunia berbasis Website”</strong>. Pemanfaatan teknologi digital berupa website sebagai alat yang digunakan untuk menanggulangi isu dunia baik itu isu yang berupa bencana alam maupun isu sosial dapat ditanggulangangi dengan menggunakan website tersebut. Di mana website tersebut memiliki fitur khusus untuk memecahkan permasalahan tersebut serta memiliki tampilan menarik dan informatif yang dapat memikat banyak orang untuk turut andil dalam penanggulangan isu terkait. Serta diharapkan dapat meningkatkan tingkat melek teknologi dan internet khususnya di Negara Indonesia.</p>
                                <p>Tujuan diadakannya lomba desain web adalah memberikan kesempatan kepada para peserta untuk berkreasi dan menuangkan kreativitasnya melalui perlombaan ini. Lomba ini terbagi menjadi 2 babak, babak penyisihan berupa pengumpulan karya serta proposal denagn format yang sudah ditentukan panitia dan babak final di mana peserta yang dinyatakan lolos melakukan presentasi karya yang dilakukan secara daring melalui Video Conference Zoom Meeting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel box box-danger">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Desain Maskot
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="box-body">
                                <p>Desain Maskot adalah salah satu cabang perlombaan di difest 2022 yang di adakan oleh Himpunan Mahasiswa Management Informatika Politeknik Negeri Subang, dimana para peserta di haruskan membuat sebuah karya berupa design mascot sesuai dengan tema yang ditentukan.</p>
                                <p>Desain Maskot adalah gambar karakter yang diciptakan bisa berbentuk orang, binatang, tumbuh-tumbuhan, buah-buahan atau objek lainnya.</p>
                                <p>Dengan tema perlombaan design mascot ini adalah <b>“Show Your skill and increase your talent with Information Technology"</b>.</p>
                                <p>Tujuan diadakannya Lomba Desain mascot ini adalah untuk mengembangkan kreativitas, meningkatkan daya produktivitas, mengedukasi para peserta dan juga masyarkat sekitar terkait pemanfaatkan teknologi dan media sosial secara positif di masa pandemi. Lomba ini terbagi menjadi 2 babak, babak penyisihan berupa pengumpulan karya serta proposal denagn format yang sudah ditentukan panitia dan babak final di mana peserta yang dinyatakan lolos melakukan presentasi karya yang dilakukan secara daring melalui Video Conference Zoom Meeting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel box box-success">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Desain Poster
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="box-body">
                                <p>Desain Poster merupakan salah satu cabang perlombaan dalam Difest 2022 yang diadakan oleh Himpunan Mahasiswa Manajemen Informatika Politeknik Negeri Subang, dimana peserta membuat sebuah karya desain poster dengan tema yang sudah di tentukan.</p>
                                <p>Perlomban desain poster adalah suatu media publikasi yang memadukan antara tulisan, gambar, atau kombinasi keduanya dengan tujuan untuk memberikan informasi kepada khalayak umum.</p>
                                <p>Tema yang angkat untuk perlombaan desain poster ini adalah <strong>“Show Your skill and increase your talent with Information Technology"</strong> dengan Subtema:
                                <ol>
                                    <li>Peran teknologi di bidang pendidikan</li>
                                    <li>Peran teknologi di bidang ekonomi</li>
                                    <li>Peran teknologi di bidang sosial budaya</li>
                                    <li>Peran teknologi di bidang lingkungan</li>
                                </ol>
                                </p>
                                <p>Pesatnya perkembangan teknologi informasi di berbagai bidang tak terlepas dari perannya dalam membuat, menyimpan, menyampaikan, hingga menyebarkan informasi. Penggunaan perangkat elektronik seperti televisi, komputer, dan smartphone pun turut membuat teknologi informasi kian dibutuhkan masyarakat luas. Melihat potensi-potensi tersebut, teknologi informasi berpeluang memberikan manfaat yang lebih banyak di sejumlah bidang dan sektor.</p>
                                <p>Tujuan diadakannya Lomba Desain Poster ini adalah untuk mengembangkan kreativitas, meningkatkan daya produktivitas, mengedukasi para peserta dan juga masyarkat sekitar terkait pemanfaatkan teknologi dan media sosial secara positif di masa pandemi. Lomba ini terbagi menjadi 2 babak, babak penyisihan berupa pengumpulan karya serta proposal denagn format yang sudah ditentukan panitia dan babak final di mana peserta yang dinyatakan lolos melakukan presentasi karya yang dilakukan secara daring melalui Video Conference Zoom Meeting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel box box-warning">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    Photography
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="box-body">
                                <p>Lomba <i>Photography</i> merupakan salah satu cabang perlombaan dalam Difest 2022 yang diadakan oleh Himpunan Mahasiswa Manajemen Informatika Politeknik Negeri Subang, di mana peserta menyajikan sebuah karya visual berbentuk foto tentang suatu tema tertentu yang informatif dan mengandung makna khusus. Lomba ini meliputi proses pengambilan foto, editing minimal, hingga presentasi tentang makna foto yang diambil.</p>
                                <p>Tema pada perlombaan ini adalah <strong>“Learn anywhere, anytime and with anyone"</strong>. Dengan ubtema :
                                <ol>
                                    <li>Education</li>
                                    <li>Nature</li>
                                    <li>Social Life</li>
                                    <li>Art and Culture</li>
                                </ol>
                                </p>
                                <p>Perlombaan ini bertujuan untuk mengembangkan kreatifitas siswa/i Indonesia dalam menceritakan suatu bentuk kehidupan, pengalaman, atau fenomena tertentu melalui seni <i>Photography</i> serta menghasilkan karya visual yang bernilai seni dan bermakna khusus. Perlombaan ini mendukung siswa/i Indonesia untuk terus mengasah ilmu di era pandemi agar tetap produktif dan kreatif walau harus di rumah aja, salah satunya dengan mengasah ilmu & keterampilan <i>Photography</i>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-6" data-aos="zoom-in-left">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Jenis Perlombaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?= base_url('gambar/web.png') ?>" alt="First slide">
                            <br>
                            <div class="carousel-caption text-black">
                                Desain Web
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= base_url('gambar/maskot.png') ?>" alt="Second slide">
                            <br>
                            <div class="carousel-caption text-black">
                                Desain Maskot
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= base_url('gambar/poster.png') ?>" alt="Third slide">
                            <br>
                            <div class="carousel-caption text-black">
                                Desain Poster
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= base_url('gambar/photography2.jpg') ?>" alt="Four slide">
                            <br>
                            <div class="carousel-caption text-black">
                                <i>Photography</i>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<div class="row" id="timeline">
    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">
            <li class="time-label">
                <span class="bg-purple">
                    Timeline Perlombaan
                </span>
            </li>
        </ul>
        <div class="col-md-6" style="margin-bottom: 10px;" style="margin-top: 10px;" data-aos="zoom-in-right">
            <ul class="timeline" style="margin-left: -30px; margin-right: -30px;">
                <!-- timeline item -->
                <li>
                    <i class="fa fa-pencil-square-o bg-blue"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i></span>

                        <h3 class="timeline-header"><a>Pendaftaran</a></h3>

                        <div class="timeline-body">

                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs" width="100%">10 Januari 2022 - 20 Februari 2022</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-desktop  bg-blue"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i></span>

                        <h3 class="timeline-header"><a>Technical Meeting</a></h3>

                        <div class="timeline-body">
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">13 Februari 2022</a>
                        </div>
                    </div>
                </li>
                <li>
                    <i class="fa  fa-send-o (alias) bg-blue"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i></span>

                        <h3 class="timeline-header"><a>Pengumpulan Karya</a></h3>

                        <div class="timeline-body">
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">14 Februari 2022 - 27 Februari 2022</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>
        </div>
        <div class="col-md-6" style="margin-bottom: 10px;" style="margin-top: 10px;" data-aos="zoom-in-left">
            <ul class="timeline" style="margin-left: -30px; margin-right: -30px;">
                <!-- timeline item -->
                <li>
                    <i class="fa fa-pencil bg-blue"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i></span>

                        <h3 class="timeline-header"><a>Penilaian Karya</a></h3>

                        <div class="timeline-body">
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">28 Februari 2022 - 04 Maret 2022 </a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-calendar-plus-o bg-blue"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                        <h3 class="timeline-header"><a>Hari Festival</a></h3>

                        <div class="timeline-body">
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">06 Maret 2022</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- END timeline item -->
                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>
        </div>
        <br>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<div class="row" id="pendaftaran" data-aos="zoom-in-up">
    <center>
        <a href="<?= base_url('pendaftaran') ?>" class="btn text-center btn-bitbucket" style="width: 250px; height: 45px; border-radius: 14px;">
            <h3 style="margin-top: -0.1px;">Daftar Sekarang</h3>
        </a>
    </center>
</div>
<br>
<!-- END ACCORDION & CAROUSEL-->
<div class="row" id="support" data-aos="zoom-in-up">
    <div class="col-md-12">
        <!-- USERS LIST -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Support By</h3>

                <div class="box-tools pull-right">
                    <span class="label bg-purple">Difest Nasional 2022</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <center>
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 15px;" data-aos="zoom-in-right">
                            <img src="<?= base_url('/gambar/polsub.png') ?>" style="height: 40%; width: 40%;" alt="User Image">
                        </div>
                        <div class="col-md-6" style="margin-top: 15px;" data-aos="zoom-in-left">
                            <img src="<?= base_url('/gambar/himmi.png') ?>" style="height: 40%; width: 40%;" alt="User Image">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 10px;" data-aos="zoom-in-left">
                            <img src="<?= base_url('/gambar/difest2.png') ?>" style="height: 40%; width: 40%;" alt="User Image">
                        </div>
                    </div>
                </center>
                <!-- /.users-list -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">

            </div>
            <!-- /.box-footer -->
        </div>
        <!--/.box -->
    </div>
    <!-- /.col -->
</div>

<ul class="timeline">
    <li class="time-label">
        <span class="bg-purple">
            Kontak
        </span>
    </li>
</ul>

<div class="row">
    <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <a href="https://instagram.com/difest2022?utm_medium=copy_link">
                <div class="widget-user-header bg-aqua-active" data-aos="zoom-in-right">
                    <h5>@difest2022</h5>
                </div>
            </a>
            <a href="https://instagram.com/difest2022?utm_medium=copy_link">
                <div class="widget-user-image" style="z-index: 1;" data-aos="zoom-in-right">
                    <img class="img-circle" src="<?= base_url('gambar/ig.png') ?>" alt="User Avatar">
                </div>
            </a>
        </div>
        <!-- /.widget-user -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <a href="difesthimmi.polsub@gmail.com">
                <div class="widget-user-header bg-aqua-active" data-aos="zoom-in-up">
                    <h5>difesthimmi.polsub@gmail.com</h5>
                </div>
            </a>
            <a href="difesthimmi.polsub@gmail.com">
                <div class="widget-user-image" style="z-index: 1;" data-aos="zoom-in-up">
                    <img class="img-circle" src="<?= base_url('gambar/email1.png') ?>" alt="User Avatar">
                </div>
            </a>
        </div>
        <!-- /.widget-user -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <a href="https://wa.me/qr/GTKLQXTTNM6HE1">
                <div class="widget-user-header bg-aqua-active" data-aos="zoom-in-left">
                    <h5>0895340079534 (Taupik)</h5>
                </div>
            </a>
            <a href="https://wa.me/qr/GTKLQXTTNM6HE1">
                <div class="widget-user-image" style="z-index: 1;" data-aos="zoom-in-left">
                    <img class="img-circle" src="<?= base_url('gambar/wa.jpg') ?>" alt="User Avatar">
                </div>
            </a>
        </div>
        <!-- /.widget-user -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->