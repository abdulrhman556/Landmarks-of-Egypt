    <?php 

    session_start();
    require_once 'config.php'; 

    $YourName = $_POST['name'];
    $Email = $_SESSION['email'];
    $Area = $_POST['issue']; 

    if (isset($_POST['submit'])) {

        $sql = "INSERT INTO support_messages (name, email, issue) 
                VALUES ('$YourName', '$Email', '$Area')";

        mysqli_query($conn, $sql);        
    }

    header("Location: ../HTML/Support_Thank.php");
    exit();


    ?>



