<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["Satisfied"];
    $value = $_POST["Neutral"];
    $value = $_POST["Dissatisfied"];

    $value = $_POST["Yes"];
    $value = $_POST["Maybe"];
    $value = $_POST["No"];

    $value = $_POST["Frequently"];
    $value = $_POST["Occasionally"];
    $value = $_POST["Rarely"];

    $value = $_POST["Feature A"];
    $value = $_POST["Feature B"];
    $value = $_POST["Feature C"];

    $value = $_POST["q5"];
   

    $to = 'optipad8@gmail.com'; // Admin's Gmail address
    $subject = 'New Submitted Survey';
   

    mail($to, $subject, $q5);

    // Redirect the user to a thank you page or display a thank you message.
    header("Location: thank_you.html");
    exit;
}
?>
