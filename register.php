<?php
include "layout/header.php";

// login users directed to home page
if (isset($_SESSION["email"])) {
    header("location: /index.php");
    exit;
  }

$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$password = "";
$confirm_password = "";

$first_name_error = "";
$last_name_error = "";
$email_error = "";
$phone_error = "";
$password_error = "";
$confirm_password_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $error = false;

    /************** validate first name ***************/
    if (empty($first_name)) {
        $first_name_error = "First name is required";
        $error = true;
    }

    /************** validate last_name ****************/
    if (empty($last_name)) {
        $last_name_error = "Last name is required";
        $error = true;
    }

    /************** validate email ****************/
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Email format is not valid";
        $error = true;
    }

    include "tools/db.php";
    $dbConnection = getDatabaseConnection();

    if ($dbConnection) {
        $statement = $dbConnection->prepare("SELECT id FROM users WHERE email = ?");
        // Bind variables to the prepared statement as parameters
        $statement->bind_param("s", $email);
        // Execute statement
        $statement->execute();

        // Check if email is already in the database
        $statement->store_result();
        if ($statement->num_rows > 0) {
            $email_error = "Email is already used";
            $error = true;
        }
        // Close this statement otherwise we cannot prepare another statement
        $statement->close();
    } else {
        die("Database connection failed");
    }

    /************** validate phone ****************/
    if (!preg_match("/^(\+|00\d{1,3})?[-]?\d{7,12}$/", $phone)) {
        $phone_error = "Phone format is not valid";
        $error = true;
    }

    /********** validate password **********/
    if (strlen($password) < 8) {
        $password_error = "Password must have at least 8 characters";
        $error = true;
    }

    /******* validate confirm_password *******************/
    if ($confirm_password != $password) {
        $confirm_password_error = "Passwords do not match";
        $error = true;
    }

    if (!$error && $dbConnection){
        /************** All fields are valid: create a new user *************/
        $password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date('Y-m-d H:i:s');

        // Use prepared statements to avoid "SQL injection attacks"
        $statement = $dbConnection->prepare(
            "INSERT INTO users (first_name, last_name, email, phone, password, created_at) ".
            "VALUES (?, ?, ?, ?, ?, ?)"
        );

        // Bind variables to the prepared statement as parameters
        $statement->bind_param('ssssss', $first_name, $last_name, $email, $phone, $password, $created_at);

        // Execute statement 
        $statement->execute();

        $insert_id = $statement->insert_id;
        $statement->close();

        /********** A new account is created **********/
        // Save session data
        $_SESSION["id"] = $insert_id;
        $_SESSION["first_name"] = $first_name;
        $_SESSION["last_name"] = $last_name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["created_at"] = $created_at;
        // Redirect user to the home page 
        header("location: /index.php"); 
        exit;
    }
}
?>
    <div class="row">
        <div class="col-lg-6 mx-auto border shadow p-4">
            <h2 class="text-center mb-4">Register</h2>
            <div class="centered-div">
            <img src="./images/char.png" class="resizable-image">
        </div>
            <hr />

            <form method="post">
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">First Name*</label>
                    <div class="row sm-8">
                        <input class="form-control" name="first_name" value="<?= $first_name ?>">
                        <span class="text-danger"><?= $first_name_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Last Name*</label>
                    <div class="row sm-8">
                        <input class="form-control" name="last_name" value="<?= $last_name ?>">
                        <span class="text-danger"><?= $last_name_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Email*</label>
                    <div class="row sm-8">
                        <input class="form-control" name="email" value="<?= $email ?>">
                        <span class="text-danger"><?= $email_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Phone number*</label>
                    <div class="row sm-8">
                        <input class="form-control" name="phone" value="<?= $phone ?>">
                        <span class="text-danger"><?= $phone_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Password*</label>
                    <div class="row sm-8">
                        <input class="form-control" name="password" type="password" value="">
                        <span class="text-danger"><?= $password_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Confirm Password*</label>
                    <div class="row sm-8">
                        <input class="form-control" name="confirm_password" type="password" value="">
                        <span class="text-danger"><?= $confirm_password_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="offset-sm-4 col-sm-4 d-grid">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                    <div class="col-sm-4 d-grid">
                        <a href="/index.php" class="btn btn-outline-success">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "layout/footer.php";
?>
