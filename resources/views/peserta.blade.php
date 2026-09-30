<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Data Peserta - Sertifikasi</title>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background: #f8fafc;
        color: #1e293b;
        font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    /* SIDEBAR */

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 235px;
        background: #0f172a;
        padding: 28px 18px;
        z-index: 1000;
    }

    .brand {
        color: white;
        font-size: 18px;
        font-weight: 700;
        padding: 0 12px;
        margin-bottom: 45px;
    }

    .menu-title {
        color: #64748b;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 0 12px;
        margin-bottom: 10px;
    }

    .sidebar a {
        display: block;
        text-decoration: none;
        color: #94a3b8;
        padding: 12px;
        border-radius: 9px;
        margin-bottom: 5px;
        font-size: 14px;
        transition: .2s;
    }

    .sidebar a:hover {
        background: #1e293b;
        color: white;
    }

    .sidebar a.active {
        background: #2563eb;
        color: white;
    }

    .sidebar-bottom {
        position: absolute;
        left: 18px;
        right: 18px;
        bottom: 25px;
    }

    /* MAIN */

    .main {
        margin-left: 235px;
        min-height: 100vh;
    }

    .topbar {
        height: 72px;
        background: white;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 38px;
    }

    .topbar-title {
        font-weight: 600;
        color: #334155;
    }

    .admin {
        font-size: 14px;
        color: #64748b;
    }

    .content {
        padding: 38px;
    }

    .breadcrumb-text {
        font-size: 13px;
        color: #94a3b8;
        margin-bottom: 8px;
    }

    .page-title {
        font-size: 30px;
        font-weight: 700;
        letter-spacing: -0.5px;
        margin-bottom: 7px;
    }

    .page-description {
        color: #64748b;
        margin-bottom: 30px;
    }

    /* ALERT */

    .alert-success {
        border: none;
        background: #ecfdf5;
        color: #047857;
        border-radius: 9px;
        font-size: 14px;
    }

    /* TOOLBAR */

    .toolbar {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 14px 14px 0 0;
        padding: 18px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .search-box {
        width: 330px;
    }

    .search-box input {
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 10px 13px;
        font-size: 14px;
    }

    .search-box input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, .1);
    }

    .btn-add {
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px 17px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
    }

    .btn-add:hover {
        background: #1d4ed8;
        color: white;
    }

    /* TABLE */

    .table-container {
        background: white;
        border: 1px solid #e2e8f0;
        border-top: none;
        border-radius: 0 0 14px 14px;
        overflow: hidden;
    }

    .table {
        margin: 0;
    }

    .table thead th {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
        color: #64748b;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .5px;
        font-weight: 700;
        padding: 15px 18px;
    }

    .table tbody td {
        padding: 17px 18px;
        border-bottom: 1px solid #f1f5f9;
        vertical-align: middle;
        font-size: 14px;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    .table tbody tr:hover {
        background: #f8fafc;
    }

    .number {
        color: #94a3b8;
        font-weight: 600;
    }

    .participant-name {
        font-weight: 600;
        color: #1e293b;
    }

    .email,
    .phone {
        color: #64748b;
    }

    .schema {
        display: inline-block;
        background: #eff6ff;
        color: #2563eb;
        padding: 6px 10px;
        border-radius: 7px;
        font-size: 12px;
        font-weight: 600;
    }

    /* ACTION */

    .action {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
    }

    .btn-detail,
    .btn-edit,
    .btn-delete {
        border: none;
        border-radius: 7px;
        padding: 7px 11px;
        font-size: 12px;
        font-weight: 500;
        text-decoration: none;
    }

    .btn-detail {
        background: #f1f5f9;
        color: #334155;
    }

    .btn-detail:hover {
        background: #e2e8f0;
        color: #1e293b;
    }

    .btn-edit {
        background: #eff6ff;
        color: #2563eb;
    }

    .btn-edit:hover {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .btn-delete {
        background: #fef2f2;
        color: #dc2626;
    }

    .btn-delete:hover {
        background: #fee2e2;
    }

    /* EMPTY */

    .empty-state {
        padding: 60px 20px !important;
        color: #94a3b8;
        text-align: center;
    }

    /* RESPONSIVE */

    @media (max-width: 1000px) {

        .sidebar {
            width: 200px;
        }

        .main {
            margin-left: 200px;
        }

        .content {
            padding: 25px;
        }

        .toolbar {
            gap: 15px;
            flex-direction: column;
            align-items: stretch;
        }

        .search-box {
            width: 100%;
        }
    }
</style>
```

</head>

<body>

```
<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="brand">
        Aplikasi Sertifikasi
    </div>

    <div class="menu-title">
        Menu
    </div>

    <a href="{{ route('dashboard') }}">
        Dashboard
    </a>

    <a
        href="{{ route('peserta.index') }}"
        class="active"
    >
        Data Peserta
    </a>

    <a href="{{ route('skema.index') }}">
        Data Skema
    </a>

    <div class="sidebar-bottom">

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button
                type="submit"
                class="btn btn-outline-light w-100"
            >
                Logout
            </button>

        </form>

    </div>

</aside>


<!-- MAIN -->

<main class="main">

    <header class="topbar">

        <span class="topbar-title">
            Data Peserta
        </span>

        <span class="admin">
            Administrator
        </span>

    </header>


    <section class="content">

        <div class="breadcrumb-text">
            Dashboard / Data Peserta
        </div>

        <h1 class="page-title">
            Data Peserta
        </h1>

        <p class="page-description">
            Kelola data peserta sertifikasi yang terdaftar dalam sistem.
        </p>


        @if (session('success'))

            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>

        @endif


        <!-- TOOLBAR -->

        <div class="toolbar">

            <div class="search-box">

                <input
                    type="text"
                    id="searchPeserta"
                    class="form-control"
                    placeholder="Cari nama, email, nomor HP, atau skema..."
                >

            </div>

            <a
                href="{{ route('peserta.create') }}"
                class="btn-add"
            >
                + Tambah Peserta
            </a>

        </div>


        <!-- TABLE -->

        <div class="table-container">

            <div class="table-responsive">

                <table class="table" id="pesertaTable">

                    <thead>

                        <tr>

                            <th width="60">
                                No
                            </th>

                            <th>
                                Nama
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                No HP
                            </th>

                            <th>
                                Skema Sertifikasi
                            </th>

                            <th width="250">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($data_peserta as $peserta)

                            <tr>

                                <td class="number">
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <span class="participant-name">
                                        {{ $peserta->nama }}
                                    </span>
                                </td>

                                <td>
                                    <span class="email">
                                        {{ $peserta->email }}
                                    </span>
                                </td>

                                <td>
                                    <span class="phone">
                                        {{ $peserta->no_hp }}
                                    </span>
                                </td>

                                <td>

                                    <span class="schema">
                                        {{ $peserta->skema->nama_skema ?? '-' }}
                                    </span>

                                </td>

                                <td>

                                    <div class="action">

                                        <a
                                            href="{{ route('peserta.show', $peserta->id) }}"
                                            class="btn-detail"
                                        >
                                            Detail
                                        </a>

                                        <a
                                            href="{{ route('peserta.edit', $peserta->id) }}"
                                            class="btn-edit"
                                        >
                                            Edit
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
                                                class="btn-delete"
                                                onclick="return confirm('Yakin ingin menghapus peserta ini?')"
                                            >
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="empty-state"
                                >
                                    Belum ada data peserta.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</main>


<!-- SEARCH -->

<script>
    const searchInput = document.getElementById('searchPeserta');
    const rows = document.querySelectorAll('#pesertaTable tbody tr');

    searchInput.addEventListener('keyup', function () {

        const keyword = this.value.toLowerCase();

        rows.forEach(function (row) {

            const text = row.textContent.toLowerCase();

            row.style.display = text.includes(keyword)
                ? ''
                : 'none';

        });

    });
</script>
```

</body>

</html>
