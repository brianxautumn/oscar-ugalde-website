<?PHP 
include('variables.php');
$page = "cachechi";
include('header.php'); 
?>


<div id="inner" class="portfolio">
<?PHP
pull_images($page, 5);
?>         
</div>

<?PHP include('footer.php'); ?>