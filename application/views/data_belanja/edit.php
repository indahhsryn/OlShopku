<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Edit Data
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url('/Belanja'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="<?= site_url('/Belanja'); ?>"><?= $judul; ?></a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title"> Edit Data Belanja </h4>
                    <br>
                    <div class="pull-right">
                        <a href="<?= site_url('/Produk'); ?>" class="btn btn-warning btn-flat"><i class=" fa fa-undo">Back</i></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?= site_url('/Produk/update') ?>" method="post">
                            <div class="form-group">
                                <label for="nama">Nama Produck</label>
                                <input type="hidden" name="id" class="form-control" value="<?= $edit->kode_barang; ?>">
                                <input type="text" name="nama" id="nama" value="<?= $edit->nama ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="berat">Berat</label>
                                <input type="text" name="berat" id="berat" value="<?= $edit->berat ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" id="harga" value="<?= $edit->harga ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" id="jumlah" value="<?= $edit->jumlah ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="number" name="total" id="total" value="<?= $edit->total ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane">Submit</i></button>
                                <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-undo">Reset</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</div>