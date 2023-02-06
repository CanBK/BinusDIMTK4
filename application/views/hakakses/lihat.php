<section class="wrapper main-wrapper">

                    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                        <div class="page-title">

                            <div class="float-left">
                                <h1 class="title">Data Pengguna</h1>   
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="col-xl-12">
                        <section class="box ">
                        <!-- <section class="box table-responsive"> -->
                            <header class="panel_header" >
                                <h2 class="title float-left">Data Pengguna Machine Monitoring</h2>
                            </header>
                        <div class="content-body">   
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table cellspacing="0" class="table table-small-font table-bordered table-striped" id="tabeluser">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Akses</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; ?>
                                                <?php foreach ($user as $u) {?>
                                                <tr>
                                                    <td><?php $i++;?>
                                                    <?php echo $i ?></td>
                                                    <td><?php echo $u->NamaAkses ?></td>
                                                    <td><?php echo $u->Keterangan ?></td>
                                                    <td>
                                                        <a href="<?php echo site_url('hakakses/edit/'.$u->IdAkses) ?>" class="fa fa-edit"></a>
                                                        <a href="<?php echo site_url('hakakses/hapus/'.$u->IdAkses) ?>" class="fa fa-trash" onclick="return confirm('Yakin ingin menghapus?');"></a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>  
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>