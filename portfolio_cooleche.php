<?PHP 
include('variables.php');
$page = "cooleche";
include('header.php'); 
?>


<div id="inner" class="portfolio">
<?PHP
pull_images($page, 5);
?>         
</div>

<?PHP include('footer.php'); ?>