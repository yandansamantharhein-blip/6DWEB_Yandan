<?php
date_default_timezone_set("Asia/Manila");
$loginTime = date("F d, Y | h:i A");
$phTime = date("h:i A");

date_default_timezone_set("America/New_York");
$usTime = date("h:i A");

date_default_timezone_set("Asia/Tokyo");
$jpTime = date("h:i A");

date_default_timezone_set("Asia/Manila");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Philippine Holidays 2026</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, Arial, sans-serif;
        }

        body {
            background: linear-gradient(180deg, #0d0d0d, #1a1a1a);
            color: #ffffff;
        }

        header {
            padding: 22px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 22px;
            font-weight: 600;
        }

        .datetime {
            font-size: 14px;
            color: #b8b8b8;
        }

        main {
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 30px;
        }

        .card {
            background: #181818;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
            transition: transform 0.35s ease;
        }

        .card:hover {
            transform: translateY(-6px) scale(1.03);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .card-content {
            padding: 16px 18px 20px;
        }

        .card-content h2 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .card-content p {
            font-size: 13px;
            color: #b8b8b8;
        }

        footer {
            text-align: center;
            padding: 22px;
            font-size: 13px;
            color: #b8b8b8;
        }

        .creator {
            margin-top: 8px;
            color: #ffffff;
        }
    </style>
</head>
<body>

<header>
    <h1>PHILIPPINE HOLIDAYS 2026</h1>
    <div class="datetime">
        login time: <?php echo $loginTime; ?>
    </div>
</header>

<main>
<?php
$holidays = [
    // NATIONAL HOLIDAYS
    ["New Year's Day", "January 1, 2026", "https://images.unsplash.com/photo-1521478413868-1bbd982fa4a5?q=80&w=1170&auto=format&fit=crop"],
    ["Araw ng Kagitingan", "April 9, 2026", "https://images.unsplash.com/photo-1661107459646-a0110d8ac203?q=80&w=687&auto=format&fit=crop"],
    ["Labor Day", "May 1, 2026", "https://images.unsplash.com/photo-1719020688858-f812336cf7aa?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
    ["Independence Day", "June 12, 2026", "https://images.unsplash.com/photo-1669991504272-19c28fd98c15?q=80&w=922&auto=format&fit=crop"],
    ["Christmas Day", "December 25, 2026", "https://images.pexels.com/photos/5775064/pexels-photo-5775064.jpeg"],

    // SPECIAL NON-WORKING HOLIDAYS
    ["Chinese New Year", "February 17, 2026", "https://images.unsplash.com/photo-1565457210787-a4e17b40f04e?q=80&w=735&auto=format&fit=crop"],
    ["EDSA People Power Anniversary", "February 25, 2026", "https://images.unsplash.com/photo-1581999016273-8ead52fff235?q=80&w=687&auto=format&fit=crop"],
    ["Black Saturday", "April 4, 2026", "https://images.unsplash.com/photo-1586488629163-3ca3293e75f3?q=80&w=687&auto=format&fit=crop"],
    ["Ninoy Aquino Day", "August 21, 2026", "https://images.unsplash.com/photo-1648481126470-89d868c3c19f?q=80&w=735&auto=format&fit=crop"],
    ["All Saints' Day", "November 1, 2026", "https://images.unsplash.com/photo-1476900164809-ff19b8ae5968?q=80&w=1170&auto=format&fit=crop"],
    ["Feast of the Immaculate Conception", "December 8, 2026", "https://images.unsplash.com/photo-1699240656182-15646fe27eac?q=80&w=693&auto=format&fit=crop"]
];

foreach ($holidays as $holiday) {
    echo "
        <div class='card'>
            <img src='{$holiday[2]}' alt='{$holiday[0]}'>
            <div class='card-content'>
                <h2>{$holiday[0]}</h2>
                <p>{$holiday[1]}</p>
            </div>
        </div>
    ";
}
?>
</main>

<footer>
    time at login —
    philippines: <?php echo $phTime; ?> |
    usa: <?php echo $usTime; ?> |
    japan: <?php echo $jpTime; ?>

    <div class="creator">
        created by: <strong>Samantha Rhein Yandan</strong>
    </div>
</footer>

</body>
</html>
