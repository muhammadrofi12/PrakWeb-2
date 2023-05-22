<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-4 mb-2">Form Mahasiswa</h3>

        <form action="{{ url('/hasil') }}" method="POST" class="mt-3">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" placeholder="Masukan Email" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
                <div class="col-8">
                    <select id="lokasi" name="lokasi" class="custom-select">
                        <option value="Bogor">Bogor</option>
                        <option value="Depok">Depok</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Surakarta">Surakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Lain -Lain">Lain - Lain</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input"
                            value="L">
                        <label for="jenis_kelamin_0" class="custom-control-label">Laki -Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input"
                            value="P">
                        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill_0" type="checkbox" class="custom-control-input"
                            value="PHP">
                        <label for="skill_0" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill_1" type="checkbox" class="custom-control-input"
                            value="MYSQL">
                        <label for="skill_1" class="custom-control-label">MYSQL</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill_2" type="checkbox" class="custom-control-input"
                            value="JS">
                        <label for="skill_2" class="custom-control-label">JavaScript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill_3" type="checkbox" class="custom-control-input"
                            value="HTML">
                        <label for="skill_3" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill_4" type="checkbox" class="custom-control-input"
                            value="CSS">
                        <label for="skill_4" class="custom-control-label">CSS</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <h3>Hasil Input</h3>

        @isset($data)
            <div class="mt-3">
                <strong>Nama:</strong> {{ $data['nama'] }}
            </div>

            <div class="mt-3">
                <strong>Email:</strong> {{ $data['email'] }}
            </div>

            <div class="mt-3">
                <strong>Lokasi:</strong> {{ $data['lokasi'] }}
            </div>

            <div class="mt-3">
                <strong>Jenis Kelamin:</strong> {{ $data['jenis_kelamin'] }}
            </div>

            @isset($data['skill'])
                <div class="mt-3">
                    <strong>Skill:</strong>
                    <span>
                        @foreach ($data['skill'] as $index => $skill)
                            {{ $skill }}
                            @if ($index !== count($data['skill']) - 1)
                                ,
                            @endif
                        @endforeach
                    </span>
                </div>
            @endisset
        @else
            <div class="mt-3">
                <p>Belum ada data yang diinputkan.</p>
            </div>
        @endisset

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
