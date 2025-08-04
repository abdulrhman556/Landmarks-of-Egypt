    <?php 

    session_start();
    require_once 'config.php';

    $First_Name = $_POST['first'];
    $Last_Name = $_POST['last'];
    $Email = $_SESSION['email'];
    $Phone_Number = $_POST['phone'];
    $Date = $_POST['date'];
    $Number_of_Visitors = $_POST['number'];
    $Location = $_POST['location'];
    $Price_per_Person = $_POST['price'];
    $Total_Price = $_POST['total'];

    if (isset($_POST['submit'])) {

        $sql = "INSERT INTO bookings (first_name, last_name, email, phone, visit_date, number_of_visitors, location, price_per_person, total_price)
                VALUES ('$First_Name', '$Last_Name', '$Email', '$Phone_Number', '$Date', '$Number_of_Visitors', '$Location', '$Price_per_Person', '$Total_Price')";

        mysqli_query($conn, $sql); 
    }


    header("Location: ../HTML/Payment_Page.php");
    exit();

    ?>







