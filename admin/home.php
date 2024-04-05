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
        <div class="logo"><img src="../assets.logo.png" alt=""></div>
            <ul class="menu">
                <li class="active">
                    <a href="./home.php">
                        <h4>Dashboard</h4>
                    </a>
                </li>
                <li>
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
            <div class="header--wrapper">
                <div class ="header--title">
                    <span>I-Care</span>
                    <h2>Dashboard</h2>
                </div>
                <div class="user--info">
                </div>            
            </div>

            <div class="card--container">
                <h3 class="main--title">Daily Data</h3>
                <div class="card--wrapper">
                    <div class="data--card light-red">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">
                                Patient Data
                                </span>
                                <span class="amount--value">
                                </span>
                            </div>
                            <i class="fas fa-people-roof icon dark-red"></i>  
                        </div>
                        <span class="card-detail">02</span>
                    </div>

                    <div class="data--card light-blue">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">
                                Data Out
                                </span>
                                <span class="amount--value">
                                </span>
                            </div>
                            <i class="fas fa-people-line icon dark-blue"></i>  
                        </div>
                        <span class="card-detail">*** *** ***</span>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>