<body>

    <?php
    // $this->load->view("mahasiswa/navs");
    ?>
    <!-- Page Layout here -->
    <div class="row">

        <!-- Grey navigation panel -->
        <div class="col l3">

        </div>

        <div class="col l8">
            <!-- content -->
            <h3>Selamat datang!</h3>
            <div class="divider"></div>
            <div class="row"></div>
            <div class="row">
                <div class="row">
                    <div class="col m12 m6">
                        <div class="card cyan darken-1">
                            <div class="card-content white-text">
                                <span class="card-title col m6">Profil Mahasiswa</span>

                                <table class="striped">
                                    <thead <tr>
                                        <th style="width: 25%;">Nama</th>
                                        <td><?php print_r($datamhs[0]["nama"]); ?></td>
                                        </tr>
                                        <tr>
                                            <th>NPM</th>
                                            <td><?php print_r($datamhs[0]["npm"]); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jurusan</th>
                                            <td><?php print_r($datamhs[0]["jurusan"]); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kelas</th>
                                            <td><?php print_r($datamhs[0]["kelas"]); ?></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5>Jadwal Kuliah hari ini</h5>
            <div class="row">
                <div class="row">
                    <div class="col l6 m6">
                        <div class="card pink lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Judul</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6">
                        <div class="card green darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Judul</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6">
                        <div class="card deep-purple lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Judul</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l1"></div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.tooltipped');
                var instances = M.Tooltip.init(elems);
            });
        </script>
    </div>
</body>