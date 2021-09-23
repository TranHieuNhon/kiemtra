
<script language="JavaScript" type="text/javascript">
window.onbeforeunload = confirmExit;
function confirmExit()
{
<?php 
session_start();
if (isset($_SESSION['customer']) & isset($_SESSION['customerid'])) {
  unset($_SESSION['customer']);
  unset($_SESSION['customerid']);
}
?>

}
</script>
