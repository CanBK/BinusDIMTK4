<section class="wrapper main-wrapper">

                    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                        <div class="page-title">

                            <div class="float-left">
                                <h1 class="title">Tambah Hak Akses</h1>   
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-xl-12 col-lg-12 col-12 col-md-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title float-left">Form Tambah Hak Akses</h2>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <form action ="<?php echo site_url('hakakses/save')?>" method="post">
                                        <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Nama Hak Akses</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                <input type="text" class="form-control" name="namahakakses" required>
                                                </div>
                                            </div>
                                            <!-- <!-- <div class="form-group">
                                                <label class="form-label" for="field-1">Nama Hak Akses</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                <input type="text" class="form-control" name="namahakakses" required>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Keterangan Hak Akses</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                <input type="text" class="form-control" name="keterangan" required>
                                                </div>
                                            </div>


                                        <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                            <div class="text-left">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                &nbsp;&nbsp;
                                                <button type="submit" class="btn">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section></div>
                </section>