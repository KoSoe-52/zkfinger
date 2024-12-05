<?php
// require 'zklibrary.php';
// $zk = new ZKLibrary('192.168.1.102', 4370);
// $zk->connect();
// $zk->disableDevice();
?>
<form method="POST" ecntype="multipart/form-data">
    UID: <input type="text" name="uid"> <br/>
    USERID : <input type="text" name="userid"><br/>
    NAME: <input type="text" name="name"> <br/>
    Template: <input type="text" name="template"> <br/>
    <button type="submit" name="store">Insert</button>
</form>
<?php
if(isset($_POST["store"]))
{
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    return exit;
    $uid = $_POST["uid"];
    $userid = $_POST["userid"];
    $name = $_POST["name"];
    $password = "123456";
    $role = 0;
    $template = $_POST["template"];
    //setUser($uid, $userid, $name, $password, $role)

    $zk->setUser($uid,$userid,$name,$password,$role);
    $zk->setUserTemplate($template);

    $zk->enableDevice();
    $zk->disconnect();
}
?>