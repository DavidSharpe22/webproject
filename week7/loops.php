<?php


// while loop

$loopCounter = 1;
while ($loopCounter <10)

{
    echo "$loopCounter <br>";
    $loopCounter++;
}

echo "The end of the loop and the loop counter is = $loopCounter";



// do while loop




// for loop



// Create an array of products


$products = array(
    array('id' => 1, 'product name' => 'Product 1', 'category' => 'Category 1', 'price' => 10.99, 'stock' => 5),
    array('id' => 2, 'product name' => 'Product 2', 'category' => 'Category 2', 'price' => 20.99, 'stock' => 10),
    array('id' => 3, 'product name' => 'Product 3', 'category' => 'Category 3', 'price' => 30.99, 'stock' => 15)
);

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['product name']; ?></td>
                <td><?php echo $product['category']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['stock']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>




