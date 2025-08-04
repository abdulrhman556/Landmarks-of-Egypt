    <?php

    session_start();
    require_once 'config.php'; 

    if (isset($_POST['submit'])) {
        
        $method = $_POST['method'];
        $Email = $_SESSION['email'];

        $card_number = '';
        $expiry_date = '';
        $cvv = '';
        $bank_name = '';
        $account_number = '';
        $swift_code = '';
        $branch = '';
        $wallet_type = '';
        $wallet_contact = '';
        $transaction_id = '';
        $device_name = '';

        if ($method == 'card') {

            $card_number = $_POST['card_number'];
            $expiry_date = $_POST['expiry_date'];
            $cvv = $_POST['cvv'];
            
        } elseif ($method == 'bank') {

            $bank_name = $_POST['bank_name'];
            $account_number = $_POST['account_number'];
            $swift_code = $_POST['swift_code'];
            $branch = $_POST['branch'];

        } elseif ($method == 'wallet') {

            $wallet_type = $_POST['wallet_type'];
            $wallet_contact = $_POST['wallet_contact'];
            $transaction_id = $_POST['transaction_id'];
            $device_name = $_POST['device_name'];
        }

        $sql = "INSERT INTO payment_transactions (method, card_number, expiry_date, cvv, bank_name, account_number, swift_code, branch, wallet_type, wallet_contact, transaction_id, device_name, email, order_description) 
                VALUES ('$method', '$card_number', '$expiry_date', '$cvv', '$bank_name', '$account_number', '$swift_code', '$branch', '$wallet_type', '$wallet_contact', '$transaction_id', '$device_name', '$Email', '$order_description')";

        mysqli_query($conn, $sql);

        header("Location: ../HTML/Pages_Thank.html");
        exit();
    }
    ?>
