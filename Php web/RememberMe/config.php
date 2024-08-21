<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'mca24-25';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        if (password_verify($password, $user_data['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;

            if ($remember) {
                $cookie_name = 'remember_me';
                $cookie_value = $username . ':' . password_hash($password, PASSWORD_BCRYPT);
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 30 days
            }

            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Invalid password';
        }
    } else {
        $error = 'Username not found';
    }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="checkbox" id="remember" name="remember">
    <label for="remember">Remember me</label><br><br>
    <input type="submit" name="submit" value="Login" >
    <?php if(isset($error)){echo '<p style="color:red;">'.$error.'</p>';}?>
</form>
<?php
if (isset($_COOKIE['remember_me'])) {
    list($username, $password) = explode(':', $_COOKIE['remember_me']);
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        if (password_verify($password, $user_data['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            header('Location: desbord.php');
            exit;
        }
    }
}

?>