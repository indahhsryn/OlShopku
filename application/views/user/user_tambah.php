<div class="content-wrapper">
    <section class="content">
        <section class="content-header">
            <h1>
                Data Users
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url('/User'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="<?= site_url('/User'); ?>"><?= $judul; ?></a></li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Add User</h4>
                    <br>
                    <div class="pull-right">
                        <a href="<?= site_url('/User'); ?> " class="btn btn-warning btn-flat">
                            <i class="fa fa-undo">Back</i>
                        </a>
                    </div>
                </div>
                <br>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form action="<?= site_url('/User/simpan'); ?>" method="post">
                                <div class="form-group">
                                    <label for="nama">Name</label>
                                    <input type="text" name="fullname" value="<?= set_value('fullname') ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmasi">konfirmasi password</label>
                                    <input type="password" name="confirmasi" value="<?= set_value('confirmasi') ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Address</label>
                                    <textarea name="alamat" class=" form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <select name="level" id="level" class=" form-control">
                                        <option value="0">--Pilih--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane">Submit</i></button>
                                    <button type="Reset" class="btn btn-danger btn-flat"><i class="fa fa-undo">Reset</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
</div>