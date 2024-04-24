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
<?php View::component('nav'); ?>
<main>
    <div class="container">
        <div class="row mt-3">
            <h2>Welcome to <span class="badge bg-secondary">Contacts Page</span></h2>
            <form class="w-50" method="post" action="/contacts">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="tast@mail.ru"
                           id="email"
                           placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text"
                           name="subject"
                           class="form-control"
                           value="Some text"
                           id="subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control"
                              name="message"
                              id="message"
                              rows="3">Some message
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</main>
<?php View::component('scripts'); ?>
</body>
</html>
