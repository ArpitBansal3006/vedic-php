<?php
include "layout/header.php";

if (!isset($_SESSION["email"])) {
    header("location: /login.php");
    exit;
}
?>

<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile-container {
        width: 100%;
        max-width: 800px;
        border: 1px solid #ddd;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .row {
        margin-bottom: 15px;
    }

    .col-sm-4 {
        font-weight: bold;
        color: #333;
    }

    .col-sm-8 {
        color: #555;
    }

    hr {
        margin: 20px 0;
    }
</style>

<div class="container">
    <div class="profile-container">
        <h2 class="text-center">Profile</h2>
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
            <div class="col-sm-4">Address</div>
            <div class="col-sm-8"><?= $_SESSION["address"] ?></div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">Registered At</div>
            <div class="col-sm-8"><?= $_SESSION["created_at"] ?></div>
        </div>
    </div>
</div>

<?php
include "layout/footer.php";
?>