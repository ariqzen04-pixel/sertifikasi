<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Dashboard - Sertifikasi</title>

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
        margin-bottom: 32px;
    }

    /* WELCOME */

    .welcome {
        background: #2563eb;
        color: white;
        border-radius: 14px;
        padding: 30px;
        margin-bottom: 25px;
    }

    .welcome h2 {
        font-size: 25px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .welcome p {
        margin: 0;
        color: #dbeafe;
    }

    /* MENU CARD */

    .menu-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 25px;
        height: 100%;
        transition: .2s;
    }

    .menu-card:hover {
        border-color: #bfdbfe;
        box-shadow: 0 8px 25px rgba(15, 23, 42, .06);
        transform: translateY(-2px);
    }

    .menu-card h4 {
        font-size: 19px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .menu-card p {
        color: #64748b;
        line-height: 1.7;
        font-size: 14px;
        min-height: 48px;
    }

    /* BUTTON */

    .btn-primary-custom {
        display: inline-block;
        background: #2563eb;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        padding: 10px 17px;
        font-size: 14px;
        font-weight: 600;
        border: none;
        transition: .2s;
    }

    .btn-primary-custom:hover {
        background: #1d4ed8;
        color: white;
    }

    /* INFO */

    .info-box {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 24px;
        margin-top: 25px;
    }

    .info-box h5 {
        font-weight: 700;
        margin-bottom: 8px;
    }

    .info-box p {
        color: #64748b;
        margin: 0;
        font-size: 14px;
        line-height: 1.7;
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

        .topbar {
            padding: 0 20px;
        }

        .admin {
            display: none;
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

    <a
        href="{{ route('dashboard') }}"
        class="active"
    >
        Dashboard
    </a>

    <a href="{{ route('peserta.index') }}">
        Data Peserta
    </a>

    <a href="{{ route('skema.index') }}">
        Data Skema
    </a>

    <div class="sidebar-bottom">

        <form
            action="{{ route('logout') }}"
            method="POST"
        >

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

    <!-- TOPBAR -->

    <header class="topbar">

        <span class="topbar-title">
            Dashboard
        </span>

        <span class="admin">
            Administrator
        </span>

    </header>


    <!-- CONTENT -->

    <section class="content">

        <div class="breadcrumb-text">
            Dashboard
        </div>

        <h1 class="page-title">
            Dashboard
        </h1>

        <p class="page-description">
            Kelola data peserta dan skema sertifikasi melalui sistem ini.
        </p>


        <!-- WELCOME -->

        <div class="welcome">

            <h2>
                Selamat Datang
            </h2>

            <p>
                Aplikasi Pengelolaan Data Peserta Sertifikasi
            </p>

        </div>


        <!-- MENU CARD -->

        <div class="row g-4">

            <!-- DATA PESERTA -->

            <div class="col-md-6">

                <div class="menu-card">

                    <h4>
                        Data Peserta
                    </h4>

                    <p>
                        Kelola data peserta sertifikasi,
                        termasuk tambah, tampil, edit, hapus,
                        detail, dan pencarian data.
                    </p>

                    <a
                        href="{{ route('peserta.index') }}"
                        class="btn-primary-custom"
                    >
                        Kelola Peserta
                    </a>

                </div>

            </div>


            <!-- DATA SKEMA -->

            <div class="col-md-6">

                <div class="menu-card">

                    <h4>
                        Data Skema
                    </h4>

                    <p>
                        Kelola data skema sertifikasi,
                        termasuk tambah, tampil, edit,
                        dan hapus data.
                    </p>

                    <a
                        href="{{ route('skema.index') }}"
                        class="btn-primary-custom"
                    >
                        Kelola Skema
                    </a>

                </div>

            </div>

        </div>


        <!-- INFO -->

        <div class="info-box">

            <h5>
                Sistem Pengelolaan Sertifikasi
            </h5>

            <p>
                Gunakan menu di sebelah kiri untuk mengelola
                data peserta dan data skema sertifikasi.
            </p>

        </div>

    </section>

</main>
```

</body>

</html>
