    <?php

    session_start();
    require_once 'config.php';

    $name =  $_POST['name'];
    $phone =  $_POST['phone'];
    $people_count = $_POST['people_count'];
    $trip_name =  $_POST['trip_name'];
    $days =  $_POST['days'];
    $price = $_POST['price'];
    $transport = $_POST['transport'];
    $guide = $_POST['guide'];
    $hotel =  $_POST['hotel'];
    $booking_date = $_POST['booking_date'];
    $Email =  $_SESSION['email'];

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO booking_Form (name, email, phone, people_count, trip_name, days, price, transport, guide, hotel, booking_date)
            VALUES ('$name', '$Email', '$phone', '$people_count', '$trip_name', '$days', '$price', '$transport', '$guide', '$hotel', '$booking_date')";

    if (mysqli_query($conn, $sql)) {

        header("Location: ../HTML/Payment_Page.php");
        exit();
    } else {

        echo "Error: " . mysqli_error($conn);
    }
}
    ?>


