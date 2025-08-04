    <?php
    session_start();
    require_once 'config.php';

    if (isset($_POST['register'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (empty($name) || empty($email) || empty($password)) {
            $_SESSION['register_error'] = 'Please fill in all fields.';
            $_SESSION['active_form'] = 'register';
            header("Location: ../HTML/login.php");
            exit();
        }

        // التحقق من وجود الإيميل في قاعدة البيانات
        $stmt = $conn->prepare("SELECT email FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['register_error'] = 'Email is pre-registered!';
            $_SESSION['active_form'] = 'register';
        } else {
            // تشفير كلمة السر
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // إضافة المستخدم إلى قاعدة البيانات
            $stmt = $conn->prepare("INSERT INTO login (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashedPassword);
            $stmt->execute();

            $_SESSION['register_success'] = 'Registration successful! You can log in now.';
        }

        header("Location: ../HTML/login.php");
        exit();
    }

    if (isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (empty($email) || empty($password)) {
            $_SESSION['login_error'] = 'Please fill in all fields.';
            $_SESSION['active_form'] = 'login';
            header("Location: ../HTML/login.php");
            exit();
        }

        // التحقق من وجود الإيميل في قاعدة البيانات
        $stmt = $conn->prepare("SELECT * FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // التحقق من صحة كلمة المرور
            if (password_verify($password, $user['password'])) {
                // إذا كانت البيانات صحيحة، نقوم بتخزين بيانات الجلسة
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['login_success'] = 'You have successfully logged in.';
                header("Location: ../HTML/door.html");
                exit();
            } else {
                // إذا كانت كلمة المرور غير صحيحة
                $_SESSION['login_error'] = 'Incorrect email or password';
            }
        } else {
            // إذا كان الإيميل غير موجود
            $_SESSION['login_error'] = 'Incorrect email or password';
        }

        $_SESSION['active_form'] = 'login';
        header("Location: ../HTML/login.php");
        exit();
    }
    ?>
