                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Manage Member</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; foreach( $user as $u ) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u->user_nama ?></td>
                                            <td><?= $u->user_email ?></td>
                                        </tr>
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->