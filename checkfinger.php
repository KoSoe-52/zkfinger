<?php
// require 'zklibrary.php';
// $zk = new ZKLibrary('192.168.1.102', 4370);
// $zk->connect();
// $zk->disableDevice();
?>
<form method="POST" ecntype="multipart/form-data">
    UID: <input type="text" name="uid"> <br/>
    Template: <input type="text" name="template"> <br/>
    <button type="submit" name="check">Insert</button>
</form>
<?php
if(isset($_POST["check"]))
{
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    return exit;
    $uid = $_POST["uid"];
    $finger = $_POST["template"];
    $data = $zk->getUserTemplate($uid, $finger);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>
