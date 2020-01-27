<body>

    <!-- Page Layout here -->
    <div class="row">

        <!-- Grey navigation panel -->
        <div class="col m3">

        </div>

        <div class="col m8">
            <!-- content -->
            <h3>Nilai</h3>
            <div class="divider"></div>
            <div class="row"></div>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Tugas</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Total</th>
                        <th>Grade</th>
                    </tr>
                </thead>

                <tbody>
                    <?php for ($i = 1; $i <= 7; $i++) : ?>
                        <tr>
                            <td><?= random_int(214, 431); ?></td>
                            <td>Bahasa</td>
                            <td>Dani</td>
                            <td><?= random_int(56, 101); ?></td>
                            <td><?= random_int(56, 101); ?></td>
                            <td><?= random_int(56, 101); ?></td>
                            <td><?= random_int(56, 101); ?></td>
                            <td>A</td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </div>

        <div class="row"></div>

    </div>

    </div>
</body>