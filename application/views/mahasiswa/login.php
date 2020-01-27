<body id="purple">
    <div class="section"></div>
    <main>
        <center>

            <div class="section"></div>

            <h5 class="white-text">Login Mahasiswa</h5>
            <div class="section"></div>
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #FFF; width: 50%;">

                    <form class="col m12" method="post" action="<?= site_url("loginmhs/login"); ?>">
                        <?php echo $this->session->flashdata('pesan_salahmhs'); ?>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='number' name='npm' id='npm' />
                                <label for='npm'>Masukkan akun anda</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Enter your password</label>
                            </div>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>masuk</button>
                            </div>
                            <div class="row">
                                <a href="<?= site_url(); ?>" class="col s12 btn btn-large waves-effect indigo lighten-5 indigo-text">Batal</a>
                            </div>
                            <div class="row">
                                <a href="<?= site_url("loginmhs/daftar"); ?>" class="">Belum memiliki akun? daftar disini</a>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="<?= site_url("loginadm"); ?>" class="white-text">Login sebagai <span>admin</span></a>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>