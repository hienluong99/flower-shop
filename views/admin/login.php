<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.validate.js"></script>

</head>

<body>


    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-content">
                <div class="row login-header">
                    <div class="login-title text-center my-3">Login</div>

                </div>
                <div class="row login-body">

                    <form class="form-horizontal" role="form" method="POST" action="/login">

                        <div class="col-10 login-input">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="<?= isset($old['email']) ? $this->e($old['email']) : '' ?>" required autofocus>
                                <span class="help-block">
                                </span>
                                <?php if (isset($errors['email'])) : ?>
                                    <span class="help-block">
                                        <strong><?= $this->e($errors['email']) ?></strong>
                                    </span>
                                <?php endif ?>
                            </div>
                        </div>

                        <div class="col-10 login-input ">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <?php if (isset($errors['password'])) : ?>
                                    <span class="help-block">
                                        <strong><?= $this->e($errors['password']) ?></strong>
                                    </span>
                                <?php endif ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-10 login-input">
                                <button type="submit" class="btn btn-login">
                                    Login
                                </button>


                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.validate.js"></script>

    <script type="text/javascript">

    </script>
</body>

</html>