<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $title;?></h1>
  </div>
	Welcome to my site! Stay informed, connect with others, and witness the power of PHP! 
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>
