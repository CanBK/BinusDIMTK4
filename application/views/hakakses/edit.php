<section class="wrapper main-wrapper">

                    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                        <div class="page-title">

                            <div class="float-left">
                                <h1 class="title">Tambah Pengguna</h1>   
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-xl-12 col-lg-12 col-12 col-md-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Form Edit Pengguna</h2>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                <?php foreach($user as $u) {?>
                                    <form action ="<?php echo site_url('hakakses/update')?>" method="post">
                                        <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Nama Hak Akses</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                <input type="hidden" class="form-control" name="id" value="<?php echo $u->IdAkses ?>" required>
                                                <input type="text" class="form-control" name="namahakakses" value="<?php echo $u->NamaAkses ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Keterangan</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                <input type="text" class="form-control" name="keterangan" value="<?php echo $u->Keterangan ?>" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                            <div class="text-left">
                                                <a onclick="history.back()" class="btn" data-dismiss="modal">Cancel</a>
                                                &nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php }?>
                                </div>
                            </div>
                        </section></div>
                </section>