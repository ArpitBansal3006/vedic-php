<?php
include 'layout/header.php';

$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$address = "";

$first_name_error = "";
$last_name_error = "";
$email_error = "";
$phone_error = "";
$address_error = "";
$password_error = "";
$confirm_password_error = "";
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // validate first name
    if (empty($first_name)) {
        $first_name_error = "First name is required";
        $error = true;
    }
    // validate last name
    if (empty($last_name)) {
        $last_name_error = "Last name is required";
        $error = true;
    }

    // check email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Email format is not valid";
        $error = true;
    }

    include "tools/db.php";
    $dbConnection = getDatabaseConnection();

    $statement = $dbConnection->prepare("SELECT id FROM users WHERE email = ?");

    $statement->bind_param("s", $email);

    $statement->execute();

    $statement->store_result();
    if($statement->num_rows > 0){
        $email_error = "Email is already used";
        $error = true;
    }
    $statement->close();

    if(!preg_match("/^(\+|00\d{1,3})?[- ]?\d{7,12}$/", $phone)){
        $phone_error = "Phone format is not valid";
        $error = true;
    }

    // validate password
    if (strlen($password) <6){
        $password_error = "Password must have at least 6 characters";
        $error = true;
    }
    // validate confirm_password
    if ($confirm_password != $password){
        $confirm_password_error = "Password and Confirm Password do not match";
        $error = true;
    }

    if(!$error){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date('Y-m-d H:i:s');

        $statement = $dbConnection->prepare(
            "INSERT INTO users (first_name, last_name, email, phone, address, password, created_at)" . "VALUES (?, ?, ?, ?, ?, ?, ?)"
        );

        $statement->bind_param('sssssss', $first_name, $last_name, $email, $phone, $address, $password, $created_at);

        $statement->execute();

        $insert_id = $statement->insert_id;
        $statement->close();

        $_SESSION["id"] = $insert_id;
        $_SESSION["first_name"] = $first_name;
        $_SESSION["last_name"] = $last_name;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["address"] = $address;
        $_SESSION["created_at"] = $created_at;

        echo '<meta http-equiv="refresh" content="0;url=/index.php">';
        exit;
    }
}
?>

<div class="container-fluid d-flex align-items-start justify-content-center min-vh-100 bg-light" style="padding-top: 100px;">
    <div class="border shadow p-4" style="width: 600px; background-color: white; max-width: 100%;">
        <h2 class="text-center mb-4">Register</h2>
        <hr />

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">First Name*</label>
                <div class="col-sm-8">
                    <input name="first_name" value="<?= $first_name ?>" class="form-control">
                    <span class="text-danger"><?= $first_name_error ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Last Name*</label>
                <div class="col-sm-8">
                    <input name="last_name" value="<?= $last_name ?>" class="form-control">
                    <span class="text-danger"><?= $last_name_error ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Email*</label>
                <div class="col-sm-8">
                    <input name="email" value="<?= $email ?>" class="form-control">
                    <span class="text-danger"><?= $email_error ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Phone*</label>
                <div class="col-sm-8">
                    <input name="phone" value="<?= $phone ?>" class="form-control">
                    <span class="text-danger"><?= $phone_error ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Address*</label>
                <div class="col-sm-8">
                    <input name="address" value="<?= $address ?>" class="form-control">
                    <span class="text-danger"><?= $address_error ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Password*</label>
                <div class="col-sm-8">
                    <input name="password" value="" type="password" class="form-control">
                    <span class="text-danger"><?= $password_error ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Confirm Password*</label>
                <div class="col-sm-8">
                    <input name="confirm_password" value="" type="password" class="form-control">
                    <span class="text-danger"><?= $confirm_password_error ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-4 col-sm-4 d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <div class="col-sm-4 d-grid">
                    <a href="/index.php" class="btn btn-outline-primary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include 'layout/footer.php';
?>