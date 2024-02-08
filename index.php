<?PHP
$data = '';
$users = json_decode(file_get_contents('users.json'), true);

if (!empty($_REQUEST) ) {
    if (!empty($_REQUEST['key'])) {
        $user = $_REQUEST['key'];
        $pass = $_REQUEST['key'];
        if (array_key_exists($_POST['key'], $users)) {
            $data = '1|'.md5($user).'|User: ' . $user . ' Добро пожаловать! ';
        }else{
            $data = '0|'.md5(date('Y-m-d h:i:s').rand(1, 9999)).'|Incorrect key!';
        }
    }else{
        $data = '0|'.md5(date('Y-m-d h:i:s').rand(1, 9999)).'|Fill in key!';
    }
}

header('Content-Type: text/plain');
echo $data;
?>
