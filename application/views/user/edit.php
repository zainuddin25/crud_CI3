<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Form Tambah Data</title>
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
                                <a href="<?php echo base_url("index.php"); ?>" class="nav-link text-white" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                                Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index.php/user/tambah") ?>" class="nav-link active">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                                Tambah Data
                                </a>
                            </li>
                        </ul>
                    <hr>
                </div>
            </div>
            <div class="col-9" style="height: 663px;">
              <p class="text-end mt-3"><small><i>Form Tambah Data</i></small></p>
              <div class="row">
                <div class="col-6 mx-auto">
                  <div class="card">
                    <h5 class="card-header">Tambah Data</h5>
                    <div class="card-body">
                      <form action="<?php echo base_url('index.php/user/edit_action/'. $data['id']) ?>" method="post">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" value="<?php echo $data["username"] ?>" name="username">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $data["email"] ?>" name="email">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="<?php echo $data["password"] ?>">
                        <div class="mt-3">
                          <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
</html>