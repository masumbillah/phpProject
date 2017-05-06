
<div class="post_section">

    <div class="post_date">
        <?php echo $blog_info->created_date_time?>
    </div>
    <div class="post_content">

        <h3><a href="blog_post.html"><?php echo $blog_info->blog_title?></a></h3>

        <strong>Author:</strong> <?php echo $blog_info->author_name?> | <strong>Category:</strong> <a href="#">PSD</a>, <a href="#">Templates</a>

        <a href="http://www.templatemo.com/page/1" target="_parent"><img src="<?php echo base_url().$blog_info->blog_image?>" alt="image" /></a>

        <?php echo $blog_info->blog_long_description;?>
        <p><a href="blog_post.html"> Comments</a></p>
    </div>
    <div class="cleaner"></div>
</div>
