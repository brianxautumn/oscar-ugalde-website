<?PHP 
include('variables.php');
$page = "last_works";
include('header.php'); 
?>


<div id="inner" class="portfolio">
<?PHP
pull_images($page, 6);
?>         
</div>

<?PHP include('footer.php'); ?>