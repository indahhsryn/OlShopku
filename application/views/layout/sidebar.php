<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
            <li <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? ' class="active"' : '' ?>>
                <a href="<?= site_url('/Dashboard'); ?>">
                    <i class="fa fa-th"></i> <span>Dashboard</span>
                </a>
            </li>
            </li>
            <li class="treeview">
                <?php if ($this->session->userdata('level') == 1) { ?>
            <li <?= $this->uri->segment(1) == 'Barang' ? 'class="active"' : '' ?>>
                <a href="<?= site_url('/Barang'); ?>">
                    <i class="fa fa-tags"></i> <span> Catagory Produck</span>
                </a>
            </li>
        <?php } ?>
        <li <?= $this->uri->segment(1) == 'Produk' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('/Produk'); ?>">
                <i class="fa fa-folder-open-o"></i> <span> Data Produck</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-credit-card"> </i>
                <span>Transaksi</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li <?= $this->uri->segment(1) == 'Belanja' ? 'class="active"' : '' ?>>
                    <a href="<?= site_url('/Produk/detail_keranjang'); ?>"><i class="fa fa-circle-o"></i> Data Belanja</a>
                </li>
                <li <?= $this->uri->segment(1) == 'Pembayaran' ? 'class="active"' : '' ?>>
                    <a href="<?= site_url('/Produk/checkout/') ?>"><i class="fa fa-circle-o"></i> Pembayaran</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
        <li <?= $this->uri->segment(1) == 'Kontak' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('/Kontak') ?>">
                <i class="fa  fa-group (alias)"></i>
                <span>Kontak</span>
            </a>
        <li class="treeview">
            <?php if ($this->session->userdata('level') == 1) { ?>
        <li <?= $this->uri->segment(1) == 'Invoice' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('/Invoice') ?>">
                <i class="fa fa-line-chart"></i>
                <span>Invoice</span>
            </a>
        </li>
    <?php } ?>
    </li>
    <?php if ($this->session->userdata('level') == 1) { ?>
        <li class="header">SEETING</li>
        <li class="treeview">
        <li <?= $this->uri->segment(1) == 'User' ? 'class="active"' : '' ?>>
            <a href="<?= site_url('/User'); ?>">
                <i class="fa fa-user"></i>
                <span>Users</span>
            </a>
        </li>
        </li>
    <?php } ?>
        </ul>
    </section>
    </section>
</aside>

<!-- =============================================== -->