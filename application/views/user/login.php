<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Daftar Akun</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <?php if(!empty($output)): ?>
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $output; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="col-4 mx-auto" style="margin-top: 50px;">
                        <div class="card border border-info">
                            <div class="card-header text-center bg-info text-light">
                                Login
                            </div>
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control border border-info rounded-pill" name="email" required autocomplete="off">
                                    </div>                                                       
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control border border-info rounded-pill" name="password" required autocomplete="off">
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" style="width: 150px;" class="btn btn-outline-info border-1 rounded-pill mx-auto">Login</button>   
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-muted bg-info text-center">
                                <a href="<?php echo base_url("index.php") ?>" style="text-decoration: none; color: white;">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>