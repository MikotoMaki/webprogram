<?php
    $cupcakes = [
        [
            'name' => 'Strawberry Delight',
            'image' => 'strawberry-delight.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 25
        ],
        [
            'name' => 'Chocolate Dream',
            'image' => 'chocolate-dream.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 28
        ],
        [
            'name' => 'Vanilla Wonder',
            'image' => 'vanilla-wonder.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 22
        ]
    ];
?>

<div class="container">
    <h2 class="title">Cupcake Store</h2>
    <div class="menu">
        <button>Add to Cart</button>
    </div>

    <?php foreach ($cupcakes as $cupcake): ?>
        <div class="cupcake">
            <img src="<?php echo $cupcake['image']; ?>" alt="<?php echo $cupcake['name']; ?>">
            <div class="details">
                <h3><?php echo $cupcake['name']; ?></h3>
                <p><?php echo $cupcake['description']; ?></p>
                <p class="price">$<?php echo $cupcake['price']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>