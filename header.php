<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-handa-wp</title>
    <?php wp_head() ?>
</head>

<body>
    <div class="header_container">
        <div class="header">
            <ul class='header_list'>
                <a href="<?php echo home_url(); ?>">
                    <li>HOME</li>
                </a>
                <li><a href="<?php echo $url = home_url()."/archives/category/uncategorized"; ?>">News</a></li>
                <li><a href="<?php echo $url = home_url()."/archives/blog"; ?>">Blog</a></li>
            </ul>
        </div>
    </div>