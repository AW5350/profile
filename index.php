
<?php
// Function to generate a random color
function getRandomColor() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}

// Function to generate a random thing
function getRandomThing() {
    $things = ['apple', 'banana', 'car', 'dog', 'elephant', 'flower', 'guitar', 'house', 'ice cream', 'jacket'];
    return $things[array_rand($things)];
}

$randomColor = getRandomColor();
$randomThing = getRandomThing();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Page</title>
</head>
<body style="background-color: <?php echo $randomColor; ?>;">
    <h1>Random Page</h1>
    <p>This is a random thing: <?php echo $randomThing; ?></p>
</body>
</html>
