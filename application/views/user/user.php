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
                    <h4 class="box-title">Data Users</h4>
                    <br>
                    <div class="pull-right">
                        <a href="<?= site_url('/User/tambah'); ?> " class="btn btn-primary btn-flat">
                            <i class="fa fa-users">Create</i>
                        </a>
                    </div>
                </div>
                <br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-stiped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Level</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($row->result() as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->address ?></td>
                                    <td><?= $data->level ?></td>
                                    <td class="text-center" width="160px">
                                        <form action="<?= site_url('/User/hapus') ?>" method="post">
                                            <a href="<?= site_url('/User/edit/' . $data->user_id); ?> " class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil">Edit</i>
                                            </a>
                                            <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                            <button onclick="return confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash">Deleted</i>
                                            </button>

                                        </form>
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