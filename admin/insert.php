
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/indexStyle.css">
</head>
<body>

<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li>
                    <a href="./home.php">
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li >
                    <a href="./view.php">
                        <h4>Patient Data</h4>
                    </a>
                </li>
                <li class="active">
                    <a href="./insert.php">
                        <h4>Insert Patient</h4>
                    </a>
                </li>
                <li class="logout">
                    <a href="../login.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <h4>Logout</h4>
                    </a>
                </li>
            </ul>
        </div>

    <div class="main--content">
            
            <form action="">
                
                <!-- Elemen formulir untuk Nama Pasien -->
                <div class="mb-3">
                    <label for="nama_Pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama_Apoteker" name="nama_Apoteker" required>
                </div>
    
                <!-- Elemen formulir untuk alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
    
                <!-- Elemen formulir untuk telepon -->
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div>
                
                <div class="mb-3">
                    <label for="Poli" class="form-label">Poli</label>
                    <select id="poli" class="form-control">
                      <option value="gigi">Poli gigi</option>
                      <option value="mata">Poli mata</option>
                      <option value="umum">Poli umum</option>
                      
                    </select>
                </div>
                <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    
</body>
</html>
