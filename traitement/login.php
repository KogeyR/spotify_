<?php
session_set_cookie_params(time() + 86400 * 365, "/", true, true);
session_start();

$userId = null; 

$_SESSION['user_id'] = $userId;


$username = strtolower($_POST['username']);
$username = htmlspecialchars($username);

function verifyUsernameAndLogin(string $username)
{
    require 'connection.php';
 
    try {
        $prepareUser = $baseSpotify->prepare("SELECT * FROM user WHERE username = :username");
        $prepareUser->execute([':username' => $username]);
        $fetchedUser = $prepareUser->fetch();
    } catch (PDOException $exception) {
        $_SESSION['lastErrMsg'] = $exception->getMessage();
        header('Location:../index.php?err=fetchForVerificationFailed');
        exit();
    }

    if ($fetchedUser) {
        login($fetchedUser);
    } else {
        $fetchedUser = addUserAndFetchUserInfos($username);
        login($fetchedUser);
    }
}

function addUserAndFetchUserInfos($username)
{
    require 'connection.php';

    try {
        $prepareUser = $baseSpotify->prepare("INSERT INTO user (username) VALUES (:username)");
        $prepareUser->execute([':username' => $username]);
    } catch (PDOException $exception) {
        $_SESSION['lastErrMsg'] = $exception->getMessage();
        echo $exception;
        header('Location:../index.php?err=insertUsernameFailed');
        exit();
    }

    try {
        $prepareUser = $baseSpotify->prepare("SELECT * FROM user WHERE username = :username");
        $prepareUser->execute([':username' => $username]);
        $fetchedUser = $prepareUser->fetch();
    } catch (PDOException $exception) {
        $_SESSION['lastErrMsg'] = $exception->getMessage();
        header('Location: ../index.php?err=addUserFailed');
        exit();
    }

    return $fetchedUser;
}

function login(array $fetchedUser)
{
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["id"] = $fetchedUser["id"];
    header('Location:../index.php');
    exit();
}

verifyUsernameAndLogin($username);