<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
    }
</style>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="alert alert-danger" role="alert">
                <?= $message ?>
            </div>
            <div class="alert alert-secondary" role="alert">
                <pre>
                    <?= $trace ?>
                </pre>
            </div>
        </div>
    </div>
</body>
</html>
