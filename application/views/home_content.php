<?php
foreach($all_published_blog as $v_blog)
{
?>
<div class="post_section">

    <div class="post_date">
        <?php echo $v_blog->created_date_time?>
    </div>
    <div class="post_content">

        <h3><a href="blog_post.html"><?php echo $v_blog->blog_title?></a></h3>

        <strong>Author:</strong> <?php echo $v_blog->author_name?> | <strong>Category:</strong> <?php echo $v_blog->category_name;?></a>

        <a href="http://www.templatemo.com/page/1" target="_parent"><img src="<?php echo base_url().$v_blog->blog_image?>" alt="image" /></a>

        <?php echo $v_blog->blog_short_description;?>
        <p><a href="blog_post.html"> Comments</a> | <a href="<?php echo base_url();?>welcome/blog_details/<?php echo $v_blog->blog_id?>">Continue reading...</a>                </p>
    </div>
    <div class="cleaner"></div>
</div>
<?php } ?>