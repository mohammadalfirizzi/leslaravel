<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://adminlte.io/themes/v3/plugins/bs-stepper/css/bs-stepper.min.css" rel="stylesheet">
    <link href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h1 class="card-title">Kuisioner RSDEA Batu</h1>
                    </div>
                    <div class="card-body p-0">
                        <div class="bs-stepper linear">
                            <div class="bs-stepper-header" role="tablist">

                                <div class="step active" data-target="#logins-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger" aria-selected="true">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Sikap dan Pelayanan Petugas</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#kualitasproduk">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger" aria-selected="false" disabled="disabled">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Kualitas Produk</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#tarifpelayanan">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger" aria-selected="false" disabled="disabled">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Tarif Pelayanan dan Harga Obat</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#information-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger" aria-selected="false" disabled="disabled">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Kualitas Lingkungan RS</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">

                                <div id="logins-part" class="content active dstepper-block" role="tabpanel" aria-labelledby="logins-part-trigger">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Petugas Parkir</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio1">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio1">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio1">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Petugas Keamanan</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio2">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio2">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio2">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Petugas Pendaftaran</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio3">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio3">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio3">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>

                                <div id="kualitasproduk" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fasilitas Ruang Tunggu</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio4">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio4">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio4">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kondisi Ruang Periksa</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio5">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio5">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio5">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ketepatan Jam Praktek</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio6">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio6">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio6">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                </div>

                                <div id="tarifpelayanan" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tarif Pemeriksaan</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio7">
                                                <label class="form-check-label">Murah</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio7">
                                                <label class="form-check-label">Terjangkau</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio7">
                                                <label class="form-check-label">Mahal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tarif Pelayanan dan Kesehatan</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio8">
                                                <label class="form-check-label">Murah</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio8">
                                                <label class="form-check-label">Terjangkau</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio8">
                                                <label class="form-check-label">Mahal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga Obat</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio9">
                                                <label class="form-check-label">Murah</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio9">
                                                <label class="form-check-label">Terjangkau</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio9">
                                                <label class="form-check-label">Mahal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                </div>
                                <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kebersihan Ruang Tunggu</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio10">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio10">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio10">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kebersihan Kamar Mandi</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio11">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio11">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio11">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ketersediaan Area Parkir</label>
                                        <div class="form-inline">
                                            <div class="form-check ml">
                                                <input class="form-check-input" type="radio" name="radio12">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio12">
                                                <label class="form-check-label">Cukup</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="radio12">
                                                <label class="form-check-label">Kurang</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it"></a> RSDEA Batu Malang.
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script>
        var stepper = new Stepper(document.querySelector('.bs-stepper'))

        /// Will navigate to the second step
        stepper.to(1)
    </script>
</body>

</html>