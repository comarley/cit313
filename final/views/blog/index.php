
<?php include('views/elements/header.php');?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>

        <?php foreach($posts as $p){?>
            <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
            <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="'.BASE_URL.'members/view/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
            <div style="margin-top:15px;"><a href="<?php echo BASE_URL?>ajax/get_post_content/?pID=<?php echo $p['pID'];?>" class="btn post-loader">View entire post</a></div>
            <form action="http://corsair.cs.iupui.edu:21711/cit313/final/post/addComments" method="POST">
            <textarea  class='form-control' id="textComment" name="textComment" value="Comments." placeholder="Comments." rows="3" style="width:75%;"></textarea>
        <br>
            <input type="submit" id='submitComment' class='btn btn-primary' value="Comment">
        <?php }?>

    </div>




<?php include('views/elements/footer.php');?>
