<?php
?>

<?php
require APPROOT.'/views/includes/header.php';
?>

<div>
    <?php
    require APPROOT.'/views/includes/navigation.php';
    ?>
</div>

<!doctype html>
<html lang="en">
<head>



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin container">
    <form  action="<?php echo URLROOT; ?>/users/register" method="POST">
        <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="firstName">
            <label for="floatingInput">First Name *</label>
            <span class="bg bg-warning">
                 <?php echo $data['firstNameError']; ?>
            </span>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="lastName">
            <label for="floatingInput">Last Name *</label>
            <span class="bg bg-warning">
                 <?php echo $data['lastNameError']; ?>
            </span>
        </div>


        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address *</label>
            <span class="bg bg-warning">
                 <?php echo $data['emailError']; ?>
            </span>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password *</label>
            <span class="bg bg-warning">
                <?php echo $data['passwordError']; ?>
            </span>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name="confirmPassword">
            <label for="floatingPassword">Confirm Password *</label>
            <span class="bg bg-warning">
                <?php echo $data['confirmPasswordError']; ?>
            </span>
        </div>

        <div class="btn-group mt-1 mb-1" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="userType" id="btnradio1" autocomplete="off" checked value="Patient">
            <label class="btn btn-outline-primary" for="btnradio1">Patient</label>

            <input type="radio" class="btn-check" name="userType" id="btnradio2" autocomplete="off" value="Doctor">
            <label class="btn btn-outline-primary" for="btnradio2">Doctor</label>

<!--            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">-->
<!--            <label class="btn btn-outline-primary" for="btnradio3">Admin</label>-->
            <span class="bg bg-warning">
                <?php echo $data['userTypeError']; ?>
            </span>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
        <p class="mt-3">Have an account?<a href="<?php echo URLROOT;?>/users/login" > Login!</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y')?></p>
    </form>
</main>



</body>
</html>

