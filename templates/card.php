<div class="card">
    <div class="card-title">
        <?= $row['title'] ?>

    </div>
    <img class="card-img-top" src="https://placekitten.com/286/180" alt="">
    <div class="card-body">
        <span>
            <?= $row['description'] ?>
        </span>
        <hr>
        <span class="card-price">
            <!-- Template literals -->
            <?= "€ {$row['price']}" ?>
        </span>
    </div>
    <div class="card-footer d-flex flex-column">
        <a class="mx-auto btn btn-primary mb-3" href="">Detials</a>
        <a class="mx-auto btn btn-success" href="index.php/cart/add/<?= $row['id'] ?>">In den Warenkorb</a>
    </div>
</div>