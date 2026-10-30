<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php

    $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : 'Not provided';
    $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : 'Not provided';
    $species = isset($_POST['species']) ? htmlspecialchars($_POST['species']) : 'Not selected';
    $age = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : 'Not provided';
    $meal = isset($_POST['food']) ? htmlspecialchars($_POST['food']) : 'None';
    $travelers = isset($_POST['partysize']) ? htmlspecialchars($_POST['partysize']) : 'Not provided';

    $speciesNames = array('M' => 'Human', 'D' => 'Dwarf', 'E' => 'Elf', 'H' => 'Hobbit');
    $species = isset($speciesNames[$species]) ? $speciesNames[$species] : 'Not selected';

    $fourday = isset($_POST['4day']) ? 'Four-day tour' : '';
    $tenday = isset($_POST['10day']) ? 'Ten-day tour' : '';
    $tours = implode(' and ', array_filter(array($fourday, $tenday)));

    echo "<p>Welcome $firstname $lastname !<br>";
    echo $tours != '' ? "You are now booked on the $tours<br>" : "No tour selected.<br>";
    echo isset($_POST['accom']) ? "Accommodation: Yes<br>" : '';
    echo "Species: $species<br>";
    echo "Age: $age<br>";
    echo "Meal Preference: $meal<br>";
    echo "Number of travellers: $travelers</p>";
    ?>
</body>
</html>
