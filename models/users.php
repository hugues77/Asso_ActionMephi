<?php
// function check_login($user_data, $password) {
//     global $conn;
//     $edit = $conn->prepare('select * FROM users WHERE email = :user_data OR User_name = :user_data');
//     $edit->bindValue(':user_data', $user_data, PDO::PARAM_STR);
//     $edit->execute();
//     $user = $edit->fetch();
//     if ($edit->rowCount() && $password == $user['Password']) {
//         $_SESSION['User'] = ["userId" => $user["ID"],"userName" => $user["User_name"],"isAdmin" => $user["Is_admin"]];
//         header('Location: /admin/home');
//     } else {
//         header('Location: /login');
//     }

//     exit();
// }
?>


