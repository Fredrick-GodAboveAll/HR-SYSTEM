<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    # code...

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        //code...
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';


        // err handlers
        $errors = [];

        if (is_input_empty($username, $pwd, $email)) {
            # code...
            $errors["empty_input"] = "fill them all";
        }
        if (is_email_valid($email)) {
            # code...
            $errors["invalid_email"] = "invalid email used";
        }

        if (is_username_taken($pdo, $username)) {
            # code...
            $errors["username_taken"] = "username already used!";
        }

        if (is_email_registered($pdo, $email)) {
            # code...
            $errors["email_used"] = "email already used";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            # code...
            $_SESSION["errors_signup"] = $errors;
            header("location: ../index.php");
            die();
        }

        create_user($pdo,$username, $email,$pwd);
        header("location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;
        
        die();

    } catch (PDOException $e) {
        //throw $th;
        die("query failed: " . $e->getMessage());
    }
} else {
    # code...
    header("location: ../index.php");
    die();
} 