<?
{
$new_url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
header("Location: $new_url");
exit;
}
 
 
ForceHTTPS() //para chamar a função
 
?>