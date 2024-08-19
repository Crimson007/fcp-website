<?php
include "layout/header.php";

// If user is logged in, direct to the homepage
if (isset($_SESSION["email"])) {
    header("location: /index.php");
    exit;
}

$email = "";
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Email and Password are required!";
    } else {
        include "tools/db.php";
        $dbConnection = getDatabaseConnection();

        $statement = $dbConnection->prepare(
            "SELECT id, first_name, last_name, phone, password, created_at FROM users WHERE email = ?"
        );

        // Bind variables to the prepared statement as parameters
        $statement->bind_param('s', $email);

        // Execute statement
        $statement->execute();

        // Bind result variables
        $statement->bind_result($id, $first_name, $last_name, $phone, $stored_password, $created_at);

        // Fetch values
        if ($statement->fetch()) {
            if (password_verify($password, $stored_password)) {
                // Password is correct

                // Store data in session variables
                session_start();
                $_SESSION["id"] = $id;
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

        $statement->close();

        $error = "Invalid Email or Password";
    }
}
?>

<div class="container py-5">
    <div class="border shadow p-4">
        <h2 class="text-center mb-4">Login</h2>
        <hr />

        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?= $error ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <form method="post">
    <div class="row mb-3">
        <div class="centered-div">
            <img src="./images/char.png" class="resizable-image">
        </div>
        <label class="form-label">Email*</label>
        <input class="form-control" name="email" value="<?= htmlspecialchars($email) ?>" />
    </div>

    <div class="row mb-3">
        <label class="form-label">Password*</label>
        <input class="form-control" name="password" type="password" />
    </div>

    <div class="row mb-3">
        <div class="col d-grid">
            <button type="submit" class="btn btn-success">Log In</button>
        </div>
        <div class="col d-grid">
            <a href="/index.php" class="btn btn-outline-success">Cancel</a>
        </div>
        <hr />
        <p>Not registered, <span><a href="/register.php">click here</a></span></p>
    </div>
</form>
    </div>
</div>

<?php
include "layout/footer.php";
?>
