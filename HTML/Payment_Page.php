<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../CSS/Payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <p>Payment Methods</p>
            <hr style="border: 1px solid #ccc; margin: 0 15px ;">
            <div class="methods">
                <div onclick="dofun()" id="tColorA" style="color: rgb(255, 166, 0);">
                    <i class="fa-solid fa-credit-card"></i> Pay by Card
                </div>
                <div onclick="dofunA()" id="tColorB">
                    <i class="fa-solid fa-building-columns"></i> Internet Banks
                </div>
                <div onclick="dofunB()" id="tColorC">
                    <i class="fa-solid fa-wallet"></i> Apple / Google Pay
                </div>
            </div>
            <hr style="border: 1px solid #ccc; margin: 0 15px ;"> 
        </div>
        <div class="center">
            <img src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" alt="Credit Card Logos">
            <hr style="border:1px solid #ccc; margin: 0 15px;">
            
            <!-- Card Payment Form -->
<div class="card-details">
    <form action="../PHP/payment.php" method="POST">
        <input type="hidden" name="method" value="card">
        
        <p>Card Number</p>
        <input type="text" name="card_number" placeholder="Card number" maxlength="16" required>
        
        <div class="c-details">
            <div style="width: 48%;">
                <p>Expiry Date</p>
                <input type="text" name="expiry_date" class="cc-exp" placeholder="MM/YY" maxlength="5" required>
            </div>
            <div style="width: 48%;">
                <p>CVV</p>
                <div class="cvv-box">
                    <input type="text" name="cvv" class="cc-cvv" placeholder="CVV" maxlength="3" required>
                    <i class="fa-solid fa-circle-question" title="3 digits on the back of the card"></i>
                </div>
            </div>
        </div>

        <div class="email">
            <p>Email</p>
            <input type="email" name="email" placeholder="example@email.com" required>
        </div>

        <button type="submit" name="submit">PAY NOW</button>
    </form>
</div>

<!-- Bank Payment Form -->
<div class="bank-details" style="display: none;">
    <form action="../PHP/payment.php" method="POST">
        <input type="hidden" name="method" value="bank">

        <p>Bank Name</p>
        <input type="text" name="bank_name" placeholder="National Bank" required>

        <p>Account Number</p>
        <input type="text" name="account_number" placeholder="1234567890" required>

        <p>SWIFT/BIC Code</p>
        <input type="text" name="swift_code" placeholder="NBEGEGCX" required>

        <p>Branch</p>
        <input type="text" name="branch" placeholder="Downtown Branch" required>

        <p>Email</p>
        <input type="email" name="email" placeholder="example@email.com" required>

        <button type="submit" name="submit">CONFIRM PAYMENT</button>
    </form>
</div>

<!-- Wallet Payment Form -->
<div class="wallet-details" style="display: none;">
    <form action="../PHP/payment.php" method="POST">
        <input type="hidden" name="method" value="wallet">

        <p>Wallet Type</p>
        <select name="wallet_type" required>
            <option value="">Select Wallet</option>
            <option value="apple">Apple Pay</option>
            <option value="google">Google Pay</option>
        </select>

        <p>Wallet Email or Phone</p>
        <input type="text" name="wallet_contact" placeholder="example@gmail.com or +123456789" required>

        <p>Transaction ID</p>
        <input type="text" name="transaction_id" placeholder="TXN12345678" required>

        <p>Device Name</p>
        <input type="text" name="device_name" placeholder="iPhone 14 Pro" required>

        <p>Email</p>
        <input type="email" name="email" placeholder="example@email.com" required>

        <button type="submit" name="submit">SUBMIT</button>
    </form>
</div>

        </div>

        <div class="right">
            <p>Order Information</p>
            <hr style="border:1px solid #ccc; margin: 0 15px;">
            <div class="details">
                <div style="font-weight: bold; padding: 3px 0;">Order Description</div>
                <div style="padding: 3px 0;">Test payment</div>
            </div>
            <hr style="border:1px solid #ccc; margin: 0 15px;">
            <img src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" alt="Payment">
        </div>
    </div>

    <script src="../JS/Payment.js"></script>
</body>
</html>
