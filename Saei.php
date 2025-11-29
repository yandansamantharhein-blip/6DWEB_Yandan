<?php 
// Saei Hydra Lipgloss
// Yandan, Samantha Rhein
// WD - 202

$storeName = "Saei Hydra Lipgloss";
$tagline = "Hydration, Shine, and Color in Every Swipe";

$lipglosses = [
    ["shade" => "Pearly Apricot", "finish" => "Shimmery, warm apricot glow", "price" => 1199, "description" => "Perfect for soft glam looks", "perfectFor" => "Daily wear, brunch dates"],
    ["shade" => "Pink Magnolia", "finish" => "Glossy, bright pink shine", "price" => 1299, "description" => "Adds vibrant color and hydration", "perfectFor" => "Parties, special outings"],
    ["shade" => "Candy Rose", "finish" => "Sweet rosy tint with glassy shine", "price" => 1199, "description" => "Soft, sweet, and youthful", "perfectFor" => "Casual hangouts"],
    ["shade" => "Natural Rosewood", "finish" => "Natural glossy neutral tone", "price" => 1299, "description" => "Elegant and timeless shade", "perfectFor" => "Work, meetings, formal events"]
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $storeName; ?></title>
        <style>
            body {
                background: linear-gradient(to right, #ffedf4, #ffd4e5);
                font-family: 'Montserrat', sans-serif;
                color: #7a4963;
                text-align: center;
                margin: 0;
                padding: 0;
            }

            h1 {
                font-size: 3em;
                color: #d75a91;
                letter-spacing: 2px;
                margin-top: 30px;
            }

            p {
                font-family: 'Georgia', serif;
                font-size: 1.2em;
                color: #a84f75;
                margin-bottom: 40px;
            }

            table {
                margin: auto;
                border-collapse: collapse;
                width: 80%;
                background-color: #ffe6f0;
                box-shadow: 0 0 15px rgba(0,0,0,0.2);
            }

            th, td {
                border: 1px solid #f2aac5;
                padding: 15px;
                font-size: 1.1em;
                text-align: center;
            }

            th {
                background-color: #ffbfd7;
                color: #b03c70;
                text-transform: uppercase;
            }

            td {
                color: #7a4963;
            }

            tr:hover {
                background-color: #ffd9e8;
                transition: 0.3s;
            }
        </style>
    </head>

    <body>
        <h1><?php echo $storeName; ?></h1>
        <p><em><?php echo $tagline; ?></em></p>

        <table>
            <tr>
                <th>Shade</th>
                <th>Finish</th>
                <th>Price</th>
                <th>Description</th>
                <th>Perfect For</th>
            </tr>

            <?php
                foreach ($lipglosses as $gloss) {
                    echo "<tr>";
                    echo "<td>{$gloss['shade']}</td>";
                    echo "<td>{$gloss['finish']}</td>";
                    echo "<td>₱{$gloss['price']}</td>";
                    echo "<td>{$gloss['description']}</td>";
                    echo "<td>{$gloss['perfectFor']}</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>

