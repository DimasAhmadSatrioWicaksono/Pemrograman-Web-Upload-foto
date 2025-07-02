<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #dbeafe, #93c5fd);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #1e3a8a;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #1e40af;
        }

        input[type="text"],
        input[type="file"],
        input[type="radio"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
        }

        input[type="radio"] {
            width: auto;
            margin-right: 8px;
        }

        .radio-group {
            margin-bottom: 15px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 15px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Siswa</h2>
        <form action="simpan.php" method="POST" enctype="multipart/form-data">
            <label for="nis">NIS</label>
            <input type="text" name="nis" required>

            <label for="nama">Nama</label>
            <input type="text" name="nama" required>

            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </div>

            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" required>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" required>

            <label for="foto">Foto</label>
            <input type="file" name="foto" required>

            <div class="buttons">
                <input type="submit" value="Simpan">
                <input type="reset" value="Batal">
            </div>
        </form>
    </div>
</body>
</html>