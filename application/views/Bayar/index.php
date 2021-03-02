<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Data Bayar
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url('/Bayar'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="<?= site_url('/Bayar'); ?>"><?= $judul; ?></a></li>
            </ol>
        </section>
        <br>
        <section class="content">
            <div class="container-fluid"">
                <div class=" row">
                <div class="col-md-2">
                    <div class="col-md-8">
                        <div class="btn btn-sm btn-success">
                            <?php $grand_total = 0;
                            if ($keranjang = $this->cart->contents()) {
                                foreach ($keranjang as $item) {
                                    $grand_total = $grand_total + $item['subtotal'];
                                }
                            }

                            echo "Total belanja anda adalah : Rp. " . number_format($grand_total, 0, ',', '.');
                            ?>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-widget">
                        <div class="box-body">
                            <form action="<?= site_url('/Produk/proses/') ?>" method="post">
                                <table width="100%">
                                    <tr>
                                        <br>
                                        <td style="vertical-align:top">
                                            <label for="date">Tanggal Pembelian</label>
                                        </td>
                                        <td>
                                            <div class="from-group">
                                                <input type="date" id="date" name="tgl_pesan" value="<?= date('Y-m-d') ?>" class="from-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; width:30%">
                                            <label for="nama">Nama lengkap</label>
                                        </td>
                                        <td>
                                            <div class="from-group">
                                                <input type="text" id="nama" name="nama" class="from-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top;">
                                            <label for="alamat">Alamat</label>
                                        </td>
                                        <td>
                                            <div class="from-group">
                                                <input type="text" id="alamat" name="alamat" class="from-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top;">
                                            <label for="no_hp">No Hp</label>
                                        </td>
                                        <td>
                                            <div class="from-group">
                                                <input type="number" id="no_hp" name="nohp" class="from-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; width:30%">
                                            <label for="discon">Kode Discoun</label>
                                        </td>
                                        <td>
                                            <div class="from-group">
                                                <input type="text" id="discon" class="from-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; width:30%">
                                            <label for="bayar">Metode Pembayaran</label>
                                        </td>
                                        <td>
                                            <div class="from-group" requied;>
                                                <select>
                                                    <option value="0">BNI</option>
                                                    <option value="1">BRI</option>
                                                    <option value="2">BCA</option>
                                                    <option value="3">Mandiri</option>
                                                    <option value="4">Alfamart/indomart</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; width:30%">
                                            <label for="jasa">Jasa Pengiriman</label>
                                        </td>
                                        <td>
                                            <div class="from-group">
                                                <select>
                                                    <option value="0">J & T</option>
                                                    <option value="1">JNE</option>
                                                    <option value="2">ID Expres</option>
                                                    <option value="3">Gojek</option>
                                                    <option value="4">Pos Indonesia</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; width:30%">
                                            <label for="note">Catatan</label>
                                        </td>
                                        <td>
                                            <div class="from-group">
                                                <textarea id="note" rows="3" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div>
                        <button type="reset" id="cancel" class="btn btn-flat btn-warning">
                            <i class="fa fa-refresh">Cancel</i>
                        </button>
                        <button id="proses" class="btn btn-flat btn-lg btn-success">
                            <i class="fa fa-paper-plane">proses</i>
                        </button>
                    </div>
                </div>
            </div>
            </form>

        </section>
</div>
<!-- /.content-wrapper -->