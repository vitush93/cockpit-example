<?php include 'header.php' ?>

    <article>
        <header>
            <h2><?php echo $post['Title'] ?></h2>
        </header>
        <main>
            <?php echo $post['Intro'] ?>
            <?php echo $post['Text'] ?>
        </main>
        <footer>
            <p>Post entered on <?php echo gmdate("Y/d/m", $post['created']) ?></p>
        </footer>
    </article>

<?php include 'footer.php' ?>