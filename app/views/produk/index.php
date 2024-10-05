<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <title>Toko Gitar</title>
    <style>
        body {
            background-color: #f4f6f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        h2 {
            font-size: 2rem;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 1.5rem;
            color: #343a40;
        }

        .table {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .action-links a {
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            margin: 2px;
        }

        .edit {
            background-color: #3498db;
        }

        .delete {
            background-color: #e74c3c;
        }

        .mb-3 .btn {
            margin-right: 10px;
            font-size: 16px;
            padding: 10px 20px;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 1.5rem;
            text-align: center;
            margin-top: auto;
            font-size: 0.9rem;
        }

        img {
            object-fit: cover;
            border-radius: 8px;
        }

        .btn-logout {
            margin-top: 1.5rem;
            font-size: 16px;
            padding: 10px 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Toko Gitar</h1>
    </header>

    <main class="container my-5">
        <h2>Daftar Gitar</h2>



        <table id="pengaduanTable" class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['produk'] as $row) : ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['stok'] ?></td>
                    <td><img height="100px" width="100px" src="<?=BASEURL?>/img/<?=$row['gambar']?>" alt="Foto Produk"></td>
                    <td class="action-links">
                        <a href="<?= BASEURL ?>/produk/show/<?= $row['id'] ?>" class="btn edit">Ubah</a>
                        <a href="<?= BASEURL ?>/produk/delete/<?= $row['id'] ?>" class="btn delete"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
             <div class="mb-3">
    <a href="<?= BASEURL;?>/produk/create" class="btn btn-primary btn-lg shadow-sm">
        <i class="bi bi-plus-circle"></i> Tambah Gitar
    </a>
    <a href="<?= BASEURL;?>/produk/sale" class="btn btn-outline-dark btn-lg shadow-sm">
        <i class="bi bi-bar-chart-fill"></i> Hasil Penjualan
    </a>
</div>

       

        <a href="<?= BASEURL;?>/auth/logout" class="btn btn-danger btn-logout">Logout</a>
    </main>

    <footer>
        <p>&copy; 2024 Toko Gitar. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#pengaduanTable').DataTable();
        });
    </script>

</body>

</html>
