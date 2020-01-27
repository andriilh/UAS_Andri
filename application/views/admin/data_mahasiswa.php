<body>

    <?php $this->load->view("admin/navs"); ?>
    <!-- Page Layout here -->
    <div class="row">

        <!-- Grey navigation panel -->
        <div class="col m3">

        </div>

        <div class="col m8">
            <!-- content -->
            <h3 id="disini">Data Mahasiswa</h3>
            <div class="divider"></div>
            <table class="striped mydatatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($datamhs as $tampil) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $tampil->npm; ?></td>
                            <td><?= $tampil->nama; ?></td>
                            <td><?= $tampil->jurusan; ?></td>
                            <td><?= $tampil->kelas; ?></td>
                            <td>
                                <a href="<?= site_url("admin/editdatamhs/" . $tampil->npm); ?>" class="btn tooltipped" data-position="top" data-tooltip="Sunting data"> <i class="material-icons">create</i></a>
                                <a class="btn pink tooltipped" data-position="top" data-tooltip="Hapus data" href=" <?= site_url("admin/hapus/" . $tampil->npm); ?>"> <i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col m1"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/und/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap.4.3.1/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.19/datatables.min.js"></script>

    <script type="text/javascript">
        $('.mydatatable').DataTable();

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems);
        });

    </script>
</body>