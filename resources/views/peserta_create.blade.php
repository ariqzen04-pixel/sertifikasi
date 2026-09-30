<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Peserta - Sertifikasi</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header">
            <h4 class="mb-0">Tambah Peserta Sertifikasi</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terjadi kesalahan:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('peserta.store') }}"
                method="POST"
            >

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Nama Peserta
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama peserta"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email peserta"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Nomor HP
                    </label>

                    <input
                        type="text"
                        name="no_hp"
                        class="form-control"
                        value="{{ old('no_hp') }}"
                        placeholder="Masukkan nomor HP"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Alamat
                    </label>

                    <textarea
                        name="alamat"
                        class="form-control"
                        rows="4"
                        placeholder="Masukkan alamat peserta"
                    >{{ old('alamat') }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Skema Sertifikasi
                    </label>

                    <select
                        name="skema_id"
                        class="form-select"
                    >

                        <option value="">
                            -- Pilih Skema Sertifikasi --
                        </option>

                        @foreach ($data_skema as $skema)

                            <option
                                value="{{ $skema->id }}"
                                {{ old('skema_id') == $skema->id ? 'selected' : '' }}
                            >
                                {{ $skema->nama_skema }}
                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mt-4">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Simpan
                    </button>

                    <a
                        href="{{ route('peserta.index') }}"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>

</html>