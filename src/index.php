<?php 
    require("./config/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lí nhận máu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body class="bg-light">
    <!--/.Navbar -->
    <!--Navbar -->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" height="30px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manager.php">Manager Users</a>
                        </li>


                    </ul>
                    <form class="d-flex me-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div>
                    <a class="btn btn-primary btn-sm " href="add.php" role="button">thêm</a>
                </div>
                <div class="directory-table">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên người nhận máu</th>
                                    <th scope="col">Tuổi</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Ngày đăng kí nhận máu</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT reci_id, reci_name, reci_age, reci_sex,reci_reg_date from blood_recipient";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['reci_name']; ?></td>
                                            <td><?php echo $row['reci_age']; ?></td>
                                            <td><?php echo $row['reci_sex']; ?></td>
                                            <td><?php echo $row['reci_reg_date']; ?></td>
                                            <td><a href="full.php?id=<?php echo $row['reci_id']; ?>">Chi tiết</a></td>
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>