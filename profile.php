<?php
include "layout/header.php";

// If user is logged in, direct to the homepage
if (!isset($_SESSION["email"])) {
    header("location: /login.php");
    exit;
}
?>


<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto border shadow p-4">
            <h2 class="text-center mb-4">Profile</h2>
            <div class="centered-div">
            <img src="./images/char.png" class="resizable-image">
        </div>
            <hr />

                <div class="row mb-3">
                    <div class="col-sm-4">First Name</div>
                    <div class="col-sm-8"><?= $_SESSION["first_name"] ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">Last Name</div>
                    <div class="col-sm-8"><?= $_SESSION["last_name"] ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Email</div>
                    <div class="col-sm-8"><?= $_SESSION["email"] ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Phone</div>
                    <div class="col-sm-8"><?= $_SESSION["phone"] ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Registered at</div>
                    <div class="col-sm-8"><?= $_SESSION["created_at"] ?></div>
                </div>
            </div>
        </div>
    </div>







<?php
include "layout/footer.php";
?>