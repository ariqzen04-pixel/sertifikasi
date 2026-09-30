<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Skema</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body>

<div class="container mt-5">

    <h2>Tambah Skema Sertifikasi</h2>

    <form
        action="{{ route('skema.store') }}"
        method="POST"
        class="mt-4"
    >

        @csrf

        <div class="mb-3">

            <label class="form-label">
                Nama Skema
            </label>

            <input
                type="text"
                name="nama_skema"
                class="form-control"
                value="{{ old('nama_skema') }}"
            >

            @error('nama_skema')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">
                Deskripsi
            </label>

            <textarea
                name="deskripsi"
                class="form-control"
                rows="4"
            >{{ old('deskripsi') }}</textarea>

            @error('deskripsi')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('skema.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>

</html>