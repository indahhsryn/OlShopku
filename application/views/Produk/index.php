<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Data Produk
            </h1>
            <ol class="breadcrumb">
                <div class="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php $keranjang = 'Keranjang Belanja:' . $this->cart->total_items()  . 'items' ?>
                            <?= anchor('/Produk/detail_keranjang/', $keranjang) ?>
                        </li>
                        <li><a href="<?= site_url('/Produk'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><a href="<?= site_url('/Produk'); ?>"><?= $judul; ?></a></li>
                    </ul>
                </div>

            </ol>

        </section>
        <br> <br>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url() ?>/assets/template/dist/img/photo1.jpg" width="1000px" height="500px" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row mt-3 text-center">
                <?php foreach ($barang->result() as $brg) : ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 16rem;">
                            <img src="<?= base_url() . '/gambar/' . $brg->gambar ?>" width="100px" height="100px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $brg->nama_barang; ?></h5>
                                <small><?= $brg->keterangan; ?></small>
                                <br>
                                <span class="badge rounded-pill bg-success"><?= $brg->harga_jual; ?></span>
                                <br>
                                <br>
                                <?= anchor('Produk/tambah_ke_keranjang/' . $brg->kode_barang, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
</div>