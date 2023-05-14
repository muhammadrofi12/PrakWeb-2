<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Medis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container mt-5">
        <form>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="text">Nama</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="text" name="text" placeholder="Masukan nama" type="text"
                            required="required" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for="tgl_pemeriksaan" class="col-4 col-form-label">tanggal pemeriksaan</label>
                <div class="col-8">
                    <input id="tgl_pemeriksaan" name="tgl_pemeriksaan" placeholder="Masukan tanggal pemeriksaan"
                        type="date" class="form-control" required="required">
                </div>
            </div>

            <div class="form-group row mt-2">
                <label for=tgl_lahirr" class="col-4 col-form-label">Tanggal Lahir/usia</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" placeholder="masukan tanggal lahir/usia" type="number"
                        class="form-control">
                </div>
            </div>

            <div class="form-group row mt-2">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8 d-flex">
                    <div class="custom-control custom-radio custom-control-inline pe-4">
                        <input name="radio" id="radio_0" type="radio" class="custom-control-input"
                            value="Laki-Laki" required="required">
                        <label for="radio_0" class="custom-control-label">L</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="radio" id="radio_1" type="radio" class="custom-control-input"
                            value="Perempuan" required="required">
                        <label for="radio_1" class="custom-control-label">P</label>
                    </div>
                </div>
            </div>

            <div class="form-group row mt-2">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    <button name="reset" type="reset" class="btn btn-light">Reset</button>
                </div>
            </div>
        </form>
    </div>

    {{-- Tabel --}}
    <div class="container mt-5">

        <section class="text-center">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>jenis Tes</th>
                                <th>Hasil Pemeriksaan</th>
                                <th>Normal</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Tekanan darah</td>
                                <td></td>
                                <td>120/80 mmhg</td>
                            </tr>

                            <tr>
                                <td>Asam urat</td>
                                <td></td>
                                <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                            </tr>

                            <tr>
                                <td>Kolesterol total</td>
                                <td></td>
                                <td>
                                    < 200 mg/dl</td>
                            </tr>

                            <tr>
                                <td>Gula darah</td>
                                <td></td>
                                <td>Puasa: 70-110 mg/dl <br>
                                    2 jam setelah makan: 100-150 mg/dl <br>
                                    Sewaktu/acak : 70-125 mg/d</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
