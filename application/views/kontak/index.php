<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Kontak Admin
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url('/kontak'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="<?= site_url('/kontak'); ?>"><?= $judul; ?></a></li>
            </ol>
        </section>
        <section class="content">
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <style>
                .container {
                    width: 900px;
                    margin: auto;
                }

                .card {
                    display: inline-block;
                    width: 300px;
                    padding: 0 80px;
                    height: 150px;
                    font-size: 16px;
                    line-height: 80px;
                    border-radius: 40px;
                    background-color: #f1f1f1;
                    margin: 20px;
                    position: relative;
                    text-align: center;
                }

                .card img {
                    float: left;
                    margin: 0 10px 0 -80px;
                    height: 80px;
                    width: 80px;
                    border-radius: 50%;
                    position: relative;
                }

                .card .nama,
                .card .ige {
                    display: block;
                    line-height: 20px;
                    padding: 0 5px;
                }

                .card .nama {
                    margin-left: 20px;
                    margin-top: 20px;
                    font-size: 16px;
                }

                .card .ige {
                    margin-left: 20px;
                    margin-top: 5px;
                    font-size: 10px;
                    color: #aaa;
                }

                .card .close {
                    font-size: 24px;
                    font-weight: bold;
                    color: #999;
                    position: absolute;
                    top: 0;
                    right: 30px;
                    cursor: pointer;
                }

                .card:hover .close {
                    color: red;
                }
            </style>

            <body>

                <body>
                    <div class="container">
                        <div class="card">
                            <img src="<?= base_url() ?>/assets/template/dist/img/admin.png" width="100px" height="100px" alt="">
                            <span class="nama">Indah Suryaningsih</span>
                            <span class="ige">@indhx.sry</span>
                            <span class="close">x</span>
                        </div>
                        <div class="card">
                            <img src="<?= base_url() ?>/assets/template/dist/img/admin.png" width="100px" height="100px" alt="">
                            <span class="nama">Indah Suryaningsih</span>
                            <span class="ige">@iindhx.sry</span>
                            <span class="close">x</span>
                        </div>
                        <div class="card">
                            <img src="<?= base_url() ?>/assets/template/dist/img/admin.png" width="100px" height="100px" alt="">
                            <span class="nama">Indah Suryaningsih</span>
                            <span class="ige">@iindhx.sry</span>
                            <span class="close">x</span>
                        </div>
                        <div class="card">
                            <img src="<?= base_url() ?>/assets/template/dist/img/admin.png" width="100px" height="100px" alt="">
                            <span class="nama">Indah Suryaningsih</span>
                            <span class="ige">@iindhx.sry</span>
                            <span class="close">x</span>
                        </div>
                        <div class="card">
                            <img src="<?= base_url() ?>/assets/template/dist/img/admin.png" width="100px" height="100px" alt="">
                            <span class="nama">Indah Suryaningsih</span>
                            <span class="ige">@iindhx.sry</span>
                            <span class="close">x</span>
                        </div>
                        <div class="card">
                            <img src="<?= base_url() ?>/assets/template/dist/img/admin.png" width="100px" height="100px" alt="">
                            <span class="nama">Indah Suryaningsih</span>
                            <span class="ige">@iindhx.sry</span>
                            <span class="close">x</span>
                        </div>
                    </div>
                    <script>
                        const close = document.querySelectorAll('.close');

                        for (let i = 0; i < close.length; i++) {
                            close[i].addEventListener('click', function(e) {
                                e.target.parentElement.style.display = 'none';
                            })
                        }
                    </script>
                </body>

            </html>
            </body>

            </html>
        </section>
</div>