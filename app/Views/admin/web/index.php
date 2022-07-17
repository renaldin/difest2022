<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-12" data-aos="zoom-in-down">
        <div class="box box-solid">

            <!-- /.box-header -->
            <div class="box-body">
                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert bg-purple" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>

                <table class="table table-bordered table-striped" id="example1">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>Email</th>
                            <th>Nama Tim</th>
                            <th class="text-center">Bukti Pembayaran</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($desain_web as $row) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><b><?= $row['email']; ?></b></td>
                                <td><?= $row['nama_tim']; ?></td>
                                <td class="text-center"><img src="<?= base_url('fotoweb/' . $row['bukti_pembayaran']) ?>" alt="" height="50" width="50"></td>
                                <td class="text-center">
                                    <a href="<?= base_url('desain_web/detail/' . $row['id_pendaftaran_web']); ?>" class="btn bg-purple-gradient btn-sm btn-flat"><i class="fa fa-th-list"> Detail</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>