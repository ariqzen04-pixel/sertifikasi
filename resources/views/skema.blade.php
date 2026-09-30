<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Data Skema - Sertifikasi</title>

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

    /* CONTENT */

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
        width: 300px;
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
        padding: 15px 20px;
    }

    .table tbody td {
        padding: 19px 20px;
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

    .schema-name {
        font-weight: 600;
        color: #1e293b;
    }

    .description {
        color: #64748b;
        line-height: 1.6;
    }

    /* ACTION */

    .action {
        display: flex;
        gap: 7px;
    }

    .btn-edit,
    .btn-delete {
        border: none;
        border-radius: 7px;
        padding: 7px 13px;
        font-size: 13px;
        font-weight: 500;
    }

    .btn-edit {
        background: #eff6ff;
        color: #2563eb;
    }

    .btn-edit:hover {
        background: #dbeafe;
    }

    .btn-delete {
        background: #fef2f2;
        color: #dc2626;
    }

    .btn-delete:hover {
        background: #fee2e2;
    }

    /* ALERT */

    .alert-success {
        border: none;
        background: #ecfdf5;
        color: #047857;
        border-radius: 9px;
        font-size: 14px;
    }

    /* EMPTY */

    .empty-state {
        padding: 60px 20px !important;
        color: #94a3b8;
        text-align: center;
    }

    /* RESPONSIVE */

    @media (max-width: 768px) {

        .sidebar {
            width: 190px;
        }

        .main {
            margin-left: 190px;
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

</head>

<body>

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

    <a href="{{ route('peserta.index') }}">
        Data Peserta
    </a>

    <a href="{{ route('skema.index') }}" class="active">
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
            Data Skema Sertifikasi
        </span>

        <span class="admin">
            Administrator
        </span>

    </header>


    <section class="content">

        <div class="breadcrumb-text">
            Dashboard / Data Skema
        </div>

        <h1 class="page-title">
            Data Skema
        </h1>

        <p class="page-description">
            Kelola data skema sertifikasi yang tersedia dalam sistem.
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
                    id="searchSkema"
                    class="form-control"
                    placeholder="Cari skema..."
                >

            </div>

            <a
                href="{{ route('skema.create') }}"
                class="btn-add"
            >
                + Tambah Skema
            </a>

        </div>


        <!-- TABLE -->

        <div class="table-container">

            <div class="table-responsive">

                <table class="table" id="skemaTable">

                    <thead>

                        <tr>

                            <th width="70">
                                No
                            </th>

                            <th width="260">
                                Nama Skema
                            </th>

                            <th>
                                Deskripsi
                            </th>

                            <th width="180">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($data_skema as $skema)

                            <tr>

                                <td class="number">
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <span class="schema-name">
                                        {{ $skema->nama_skema }}
                                    </span>
                                </td>

                                <td>
                                    <span class="description">
                                        {{ $skema->deskripsi }}
                                    </span>
                                </td>

                                <td>

                                    <div class="action">

                                        <a
                                            href="{{ route('skema.edit', $skema->id) }}"
                                            class="btn-edit"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('skema.destroy', $skema->id) }}"
                                            method="POST"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn-delete"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')"
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
                                    colspan="4"
                                    class="empty-state"
                                >
                                    Belum ada data skema sertifikasi.
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
    const searchInput = document.getElementById('searchSkema');
    const rows = document.querySelectorAll('#skemaTable tbody tr');

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

</body>

</html>
