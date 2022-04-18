<?php
//print_r($_FILES);

//die();
$action = $_REQUEST['action'];
//print_r($action);
//exit();
if (!empty($action)) {
    require_once 'partials/User.php';
    $obj = new User();
}
//adding user action
if ($action == 'adduser' && !empty($_POST)) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_POST['photo'];

    $userId = (!empty($_POST['userId'])) ? $_POST['userId'] : '';

    //image upload
    $imageName = '';
    if(!empty($image['name'])){
    $imageName = $obj->uploadImage($image);
    $userData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'image' => $imageName,
    ];
     } else
    {
        $userData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        ];
    }
    $userId = $obj->add($userData);
    if (!empty($userId)){
        $user = $obj->getRow('id',$userId);
        echo json_encode($user);
        exit();
    }
}