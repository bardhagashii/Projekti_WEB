<?php
session_start();
$admin = $_SESSION['username'];

$id = $_GET['id'];
include_once './repository/userRepository.php';



$userRepository = new UserRepository();

$userRepository->deleteUser($id);

include_once './repository/activityRepository.php';
        
        $activity = "DELETED";

        $activityRepository = new activityRepository();
        $data = date("Y-m-d h:i");
        $activityRepository->ActivityOnUser(null,$admin,$activity,$id, null,$data);

header("location:manageUsers.php");


?>
