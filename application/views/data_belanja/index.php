<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Data Belanja
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url('/Produk'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="<?= site_url('/Produk'); ?>"><?= $judul; ?></a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Data Belanja User</h4>
                    <br>
                </div>
                <br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produck</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Sub-Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($this->cart->contents() as $items) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $items['name'] ?></td>
                                    <td><?= $items['qty'] ?></td>
                                    <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                                    <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>S
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="4">
                                <td align="right"> Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>
                                </td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div align="right">
                        <a href="<?= site_url('/Produk/hapus') ?>">
                            <div class="btn btn-flat btn-danger"><i class="fa fa-trash">Hapus</i>
                            </div>
                        </a>
                        <a href="<?= site_url('/Produk') ?>">
                            <div class="btn btn-flat btn-primary"><i class="fa  fa-arrow-circle-o-right">Lanjutkan Belanja</i>
                            </div>
                        </a>
                        <a href="<?= site_url('/Produk/checkout') ?>">
                            <div class="btn btn-flat btn-success"><i class="fa fa-paper-plane">Pembayaran</i>
                            </div>
                        </a>
                    </div>
                </div>
        </section>
</div>