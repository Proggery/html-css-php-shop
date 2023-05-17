<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Geryhell's Photographie</title>
</head>

<body>
    <?php include __DIR__ . '/navbar.php' ?>
    <header class="jumbotron">
        <div class="container">
            <h1>Geryhell's Online Shop</h1>
        </div>
    </header>

    <section id="products" class="container py-5">
        <div class="row">
            <?php while ($row = $result->fetch()) : ?>
                <div class="col-3">
                    <?php include './templates/card.php' ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>