<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Peserta - Sertifikasi</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header">
            <h4 class="mb-0">Edit Data Peserta</h4>
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
                action="{{ route('peserta.update', $peserta->id) }}"
                method="POST"
            >

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">
                        Nama Peserta
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama', $peserta->nama) }}"
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
                        value="{{ old('email', $peserta->email) }}"
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
                        value="{{ old('no_hp', $peserta->no_hp) }}"
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
                    >{{ old('alamat', $peserta->alamat) }}</textarea>

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
                                {{ old('skema_id', $peserta->skema_id) == $skema->id ? 'selected' : '' }}
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
                        Update
                    </button>

                    <a
                        href="{{ route('peserta.index') }}"
                        class="btn btn-secondary"
                    >
                        Batal
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>

</html>