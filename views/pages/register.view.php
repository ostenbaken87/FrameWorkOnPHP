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
            <h2>Register Page</h2>
        </div>
        <form class="w-25" method="post"action="/register">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       value=""
                       id="email"
                       aria-describedby="emailHelp"
                       required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text"
                       class="form-control"
                       name="name"
                       value=""
                       id="name"
                       required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       value=""
                       id="password"
                       required>
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Password confirm</label>
                <input type="password"
                       class="form-control"
                       name="password_confirm"
                       value=""
                       id="password_confirm"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</main>
<?php View::component('scripts'); ?>
</body>
</html>
