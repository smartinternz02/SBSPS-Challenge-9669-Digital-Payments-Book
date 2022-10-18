<?php
session_start();
require_once("dbf.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM users WHERE NAME like '" . $_POST["keyword"] . "%' AND REG_BY='".$_SESSION['ID']."' ORDER BY NAME LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="pandal-list">
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["NAME"]; ?>');"><?php echo $country["NAME"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>
