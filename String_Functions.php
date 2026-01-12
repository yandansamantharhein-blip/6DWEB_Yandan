<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String Built-in Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #c2185b;
        }

        h2 {
            margin-top: 30px;
            color: #ad1457;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin-bottom: 25px;
            background-color: #fff0f5;
        }

        td, th {
            border: 1px solid #e91e63;
            padding: 10px;
            color: #880e4f;
        }

        
        .w3-teal {
            background-color: #e91e63 !important;
            color: white !important;
        }
    </style>
</head>

<body>
<?php
    $school = "HOLY ANGEL UNIVERSITY";
    $name   = "Samantha Yandan";
    $sample = " Sphinx is a black animal ";
?>

<h2>Changing the Case of Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Lowercase</td>
        <td><?= strtolower($school); ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?= strtoupper($school); ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?= ucwords(strtolower($school)); ?></td>
    </tr>
</table>

<h2>Removing and Replacing Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Remove whitespace from left</td>
        <td><?= ltrim($sample); ?></td>
    </tr>
    <tr>
        <td>Remove whitespace from right</td>
        <td><?= rtrim($sample); ?></td>
    </tr>
    <tr>
        <td>Remove whitespace from both sides</td>
        <td><?= trim($sample); ?></td>
    </tr>
    <tr>
        <td>String Replace</td>
        <td><?= str_replace("black", "white", $sample); ?></td>
    </tr>
    <tr>
        <td>String iReplace</td>
        <td><?= str_ireplace("Sphinx", "Animal", $sample); ?></td>
    </tr>
    <tr>
        <td>String Repeat</td>
        <td><?= str_repeat("Sphinx ", 3); ?></td>
    </tr>
</table>

<h2>Counting Characters and Words</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Number of Characters</td>
        <td><?= strlen($name); ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?= str_word_count($name); ?></td>
    </tr>
</table>

<h2>Other Built-in Functions</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Substring</td>
        <td><?= substr($school, 0, 4); ?></td>
    </tr>
    <tr>
        <td>String Position</td>
        <td><?= strpos($school, "ANGEL"); ?></td>
    </tr>
    <tr>
        <td>String Length</td>
        <td><?= strlen($school); ?></td>
    </tr>
    <tr>
        <td>Reverse String</td>
        <td><?= strrev($school); ?></td>
    </tr>
    <tr>
        <td>HTML Special Characters</td>
        <td><?= htmlspecialchars("<b>Loving</b>"); ?></td>
    </tr>
    <tr>
        <td>Trim Example</td>
        <td><?= trim(" Loving Yourself "); ?></td>
    </tr>
    <tr>
        <td>Word Wrap</td>
        <td><?= wordwrap("Loving yourself is one of the best thing you can do", 21, "<br>"); ?></td>
    </tr>
    <tr>
        <td>Shuffle String</td>
        <td><?= str_shuffle("LOVING"); ?></td>
    </tr>
    <tr>
        <td>Convert to Array</td>
        <td>
            <?php print_r(str_split("Loving")); ?>
        </td>
    </tr>
</table>

</body>
</html>









