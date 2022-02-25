<?php
$ipa = htmlspecialchars($_POST['ipaid']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Signer</title>
</head>
<body>

<form action="signer.php?file=<?php echo $ipa ?>" method="post">
    <input type="text" name="certid" placeholder="p12">
    <input type="text" name="mpid" placeholder="mobileprovision">
    <input type="text" name="pass" placeholder="password">
    <button>Sign</button>
</form>

</body>
</html>