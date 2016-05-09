<?php
include 'utilities.php';

$host = 'cias.rit.edu';
$user = 'connectcrm';
$pass = 'jibaA7N4st';
$database = 'connectcrm';

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn = mysqli_connect($host,$user,$pass,$database);
if (mysqli_connect_errno()) {
    echo "Failed to connect to database: " . mysqli_connect_error();
}

$firstname = $lastname = $address = $city = $state = $lastschool = $zip = $email = $phonenumber = $initiative_id = $graduation_year = $type = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = sanitize($_POST["first_name"]);
    $lastname = sanitize($_POST["last_name"]);
    $address = sanitize($_POST["address"]);
    $city = sanitize($_POST["city"]);
    $state = sanitize($_POST["state"]);
    $zip = sanitize($_POST["zipcode"]);
    $email = sanitize($_POST["email"]);
    $phonenumber = normalizeTelephoneNumber(sanitize($_POST["phone_number"]));
    //$lastschool = sanitize($_POST["school_attended"]);
    //$initiative_id = sanitize($_POST['initiative']);
    //$graduation_year = sanitize($_POST['graduation_year']);
    $lastschool = "FROM APP";
    $initiative_id = "FROM APP";
    $graduation_year = "FROM APP";
    $type = sanitize($_POST['type']);

    $query = "INSERT INTO person (first_name, last_name, address, city, state, zipcode, email, phone_number, school_attended, initiative_id, graduation_year, type) VALUES ('$firstname', '$lastname', '$address', '$city', '$state', '$zip', '$email', '$phonenumber', '$lastschool', '$initiative_id', '$graduation_year', '$type')";
    mysqli_query($conn,$query);
    mysqli_close($conn);

    echo '<h2 class="confirmation">'.$firstname.' '.$lastname.' has been added to the system</h2>';

}
?>
