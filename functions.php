<?php
declare(strict_types=1);

$gloss = [
    'Pearly Apricot'   => ['price' => 1199, 'stock' => 40],
    'Pink Magnolia'    => ['price' => 1299, 'stock' => 55],
    'Candy Rose'       => ['price' => 1199, 'stock' => 70],
    'Natural Rosewood' => ['price' => 1299, 'stock' => 80],
];

$tax = 20; 

function get_reorder_message(int $stock): string
{
   
    return in_array($stock, [40, 55]) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return get_total_value($price, $quantity) * ($tax / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saei Hydra Lipgloss</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2c1d1;
        }
        img {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

<img src="gloss.png" alt="Lipgloss Logo" style="width:180px;">

<h1 style="text-align:center;">Saei Hydra Lipgloss</h1>
<h2 style="text-align:center;">Stock Control</h2>

<table>
    <tr>
        <th>Shade</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>

    <?php foreach ($gloss as $shade => $data) : ?>
    <tr>
        <td><?= htmlspecialchars($shade) ?></td>
        <td><?= $data['stock'] ?></td>
        <td><?= get_reorder_message($data['stock']) ?></td>
        <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
        <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax), 2) ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
