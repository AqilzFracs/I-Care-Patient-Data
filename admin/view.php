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
                <li class="active">
                    <a href="./view.php">
                        <h4>Patient Data</h4>
                    </a>
                </li>
                <li>
                    <a href="./insert.php">
                        <h4>Insert Patient</h4>
                    </a>
                </li>
                <li class="logout">
                    <a href="../login.php">
                        <span>Logout</span>
                    </a>
            </li>
            </ul>
    </div>


<div class="main--content">
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>I-Care</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <form action="">
                        <i class="fas fa-search"></i>
                        <input type="text" id="search" name="search" placeholder="Search" autocomplete="off">
                        <button type="submit" id="tombolCari">Search</button>
                    </form>

                </div>
                <img src="../assets/logo.png" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Patient Data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                        <form action="">
                            <th>ID</th>
                            <th>Nama<button type="submit" name="sort" value="nama_Apoteker"><i class="bi bi-sort-alpha-up"></i></button> </th>
                            <th>Alamat<button type="submit" name="sort" value="alamat"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Telepon<button type="submit" name="sort" value="telepon"><i class="bi bi-sort-alpha-up"></i></button></th>
                            <th>Poli<button type="submit" name="sort" value="poli"><i class="bi bi-sort-alpha-up"></i></button></th>
                        </form>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Riki</td>
                                <td>jl. Nias A 08</td>
                                <td>08123123123</td>
                                <td>Mata</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Fauza</td>
                                <td>jl. mangli no 2</td>
                                <td>08321321321</td>
                                <td>Gigi</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </body>
</html>