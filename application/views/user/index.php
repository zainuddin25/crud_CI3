<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Daftar User</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-dark"> 
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-4">CRUD CI 3</span>
                    </a>
                    <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="<?php echo base_url("index.php"); ?>" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                                Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index.php/user/tambah") ?>" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                                Tambah Data
                                </a>
                            </li>
                        </ul>
                    <hr>
                </div>
            </div>
            <div class="col-9" style="height: 663px;">
                <p class="text-end mt-3"><small><i>Daftar Data</i></small></p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body bg-primary text-white">
                                <h5 class="card-title">Jumlah Data User Tersimpan</h5>
                                <hr>
                                <h3 class="card-text mb-2 text-end"><?php echo $total_asset; ?> Data User</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row"  style="margin-top: 94px;">
                            <div class="col-8">
                                <form class="d-flex" method="get">
                                    <input class="form-control me-2" type="search" placeholder="Cari Username" name="username" aria-label="Search">
                                    <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table mt-2" id="myTable">
                    <thead>
                        <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($daftar as $key): ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $key["username"]; ?></td>
                                    <td><?php echo $key["email"] ?></td>
                                    <td>
                                        <a href="<?php echo base_url("index.php/user/edit/".$key['id']) ?>" style="text-decoration: none; color: blue;"><i class="fas fa-user-edit"></i></a> |
                                        <a href="<?php echo base_url("index.php/user/delete/". $key["id"]) ?>" style="text-decoration: none; color: red;"><i class="fas fa-user-times"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
</html>