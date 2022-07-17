<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-sm-6" data-aos="zoom-in-down">
        <div class="box box-solid">
            <div class="box-header with-border bg-purple">
                <h3 class="box-title"><?= $title; ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('pendaftaran'); ?>" class="btn btn-box-tool"><i class="fa fa-mail-reply"> Back</i></a>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php  } ?>

                <?php
                echo form_open_multipart('pendaftaran/insertDataWeb');
                ?>
                <div class="form-group">
                    <label>Jenis Perlombaan</label>
                    <input type="text" class="form-control" name="jenis_lomba" value="Desain Web" readonly>
                </div>

                <div class="form-group">
                    <label>Email <small class="text-danger">* Pilih Salah Satu Email Anggota Tim</small><small class="text-danger"> (exp: example@gmail.com)</small></label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Aktif">
                </div>

                <div class="form-group">
                    <label>Nama TIM <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_tim" placeholder="Masukkan Nama Tim">
                </div>

                <div class="form-group">
                    <label>Asal Instansi <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instansi" placeholder="Masukkan Asal Instansi">
                </div>
                <hr>
                <!-- anggota 1 -->
                <div class="form-group">
                    <label>Nama Anggota 1 <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_anggota1" placeholder="Masukkan Nama Anggota 1">
                </div>
                <div class="form-group">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat_anggota1" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp: 0838345405878)</small></label>
                    <input type="number" class="form-control" name="wa_anggota1" placeholder="Masukkan Nomor Whatsapp">
                </div>
                <div class="form-group">
                    <label>Instagram <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instagram_anggota1" placeholder="Masukkan Instagram">
                </div>
                <div class="form-group">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control" id="preview_gambar" name="scan_kartu_anggota1">
                </div>

                <br>
                <!-- anggota 2 -->
                <div class="form-group">
                    <label>Nama Anggota 2 <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_anggota2" placeholder="Masukkan Nama Anggota 2">
                </div>
                <div class="form-group">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat_anggota2" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp: 0838345405878)</small></label>
                    <input type="number" class="form-control" name="wa_anggota2" placeholder="Masukkan Nomor Whatsapp">
                </div>
                <div class="form-group">
                    <label>Instagram <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instagram_anggota2" placeholder="Masukkan Instagram">
                </div>
                <div class="form-group">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control" id="preview_gambar" name="scan_kartu_anggota2">
                </div>

                <hr>

                <div class="form-group">
                    <label>Bukti Follow Instagram <i>difest2022</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control" id="preview_gambar" name="bukti_igdifest">
                </div>
                <div class="form-group">
                    <label>Bukti Follow Instagram <i>himmi.polsub</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control" id="preview_gambar" name="bukti_ighimmi">
                </div>
                <div class="form-group">
                    <label>Bukti Subscribe Youtube <i>Media Himmi</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control" id="preview_gambar" name="bukti_ythimmi">
                </div>
                <hr>
                <div class="form-group">
                    <label>Bukti Pembayaran <small class="text-danger">*</small></label>
                    <input type="file" class="form-control" id="preview_gambar" name="bukti_pembayaran">
                </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn bg-purple-gradient btn-flat">Kirim</button>
            </div>
            <?php
            echo form_close();
            ?>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-3">

    </div>
</div>