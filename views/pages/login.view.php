<?php
use App\Application\Views\View;
use App\Application\Config\Config;
?>
<!doctype html>
<html lang="<?= Config::get('app.lang') ?>">
<head>
    <?php View::component('head'); ?>
    <title><?= $title ?></title>
</head>
<body>
<?php View::component('nav');?>
<main>
    <div class="container">
        <div class="row mt-3 mb-3">
            <h2>Login Page</h2>
        </div>
        <form class="w-25" method="post" action="/login">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       value=""
                       id="email"
                       aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       value=""
                       id="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</main>
<?php View::component('scripts'); ?>
</body>
</html>
