<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css?d=');
                                                    echo time(); ?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="registerbg" class="row">
        <div class="col-6"></div>
        <div class="col-6 " id="boxformlogin">
            <form id="formregister" action="<?= site_url('User/insertAppointment') ?>" method="post">
                <h2>Appointment</h2>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <label for="nama_depan">Nama Depan</label>
                            <input type="text" class="form-control" name="nama_depan" value="<?= set_value('nama_depan') ?>" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="nama_belakang">Nama Belakang</label>
                            <input type="text" class="form-control" name="nama_belakang" value="<?= set_value('nama_belakang') ?>" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="rumahsakit">Rumah Sakit</label>
                            <select name="rumah_sakit" id="rumahsakit">
                                <option selected="selected">Choose one</option>
                                <?php foreach ($rs as $item) { ?>
                                    <option value="<?php echo strtolower($item['nama']); ?>"><?php echo $item['nama']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="inputtanggal">Tanggal</label>
                            <input name="tanggal" id="datepicker" width="276" />
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary button1">Submit</button>
            </form>
        </div>
    </div>
</body>
