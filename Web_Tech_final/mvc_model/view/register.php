<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../dashboard/assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../dashboard/assets/image/logo.ico">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dashboard/assets/css/font-awesome.min.css">
</head>

<body>
<form class="form-horizontal" action="../controller/auth.php" method="post" role="form">
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">First Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="email" placeholder="First Name" name="first_name" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Last Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="email" placeholder="Last Name" name="last_name" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Username</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="email" placeholder="Username" name="username" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Email</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Gender</label>
        <div class="col-sm-9">
            <select class="form-control" id="email" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Password</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" id="email" placeholder="Password" name="password" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Confirm Password</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" id="email" placeholder="Confirm Password" name="password_again" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-default" name="add_student">Submit</button>
        </div>
    </div>
</form>
</body>
</html>