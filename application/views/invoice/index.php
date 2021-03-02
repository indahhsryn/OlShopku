<div class="content-wrapper">
    <section class="content">
        <section class="content-header">
            <h1>
                Data Pesanan
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url('/Invoice'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="<?= site_url('/Invoice'); ?>"><?= $judul; ?></a></li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Data Pesanan</h4>
                    <br>
                </div>
                <br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-stiped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Tanggal Pesan</th>
                                <th>Batas Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($invoice->result() as $invc) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $invc->nama; ?></td>
                                    <td><?= $invc->alamat; ?></td>
                                    <td><?= $invc->nohp ?></td>
                                    <td><?= $invc->tgl_pesan; ?></td>
                                    <td><?= $invc->batas_bayar; ?></td>
                                    </td>
                                </tr>
                            <?php
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
</div>