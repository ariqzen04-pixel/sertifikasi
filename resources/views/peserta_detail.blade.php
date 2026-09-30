<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Peserta - Sertifikasi</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Detail Peserta</h2>

        <a
            href="{{ route('peserta.index') }}"
            class="btn btn-secondary"
        >
            Kembali
        </a>

    </div>

    <div class="card shadow">

        <div class="card-header">
            <h5 class="mb-0">
                Informasi Peserta
            </h5>
        </div>

        <div class="card-body">

            <table class="table">

                <tr>
                    <th width="200">Nama</th>
                    <td>{{ $peserta->nama }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $peserta->email }}</td>
                </tr>

                <tr>
                    <th>No HP</th>
                    <td>{{ $peserta->no_hp }}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $peserta->alamat }}</td>
                </tr>

                <tr>
                    <th>Skema Sertifikasi</th>
                    <td>
                        {{ $peserta->skema->nama_skema ?? '-' }}
                    </td>
                </tr>

            </table>

            <div class="mt-3">

                <a
                    href="{{ route('peserta.edit', $peserta->id) }}"
                    class="btn btn-warning"
                >
                    Edit Peserta
                </a>

                <form
                    action="{{ route('peserta.destroy', $peserta->id) }}"
                    method="POST"
                    class="d-inline"
                >

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="btn btn-danger"
                        onclick="return confirm('Yakin ingin menghapus peserta ini?')"
                    >
                        Hapus Peserta
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>