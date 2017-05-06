<?php include 'header.php' ?>

<?php foreach ($posts as $post) { ?>
    <article>
        <header>
            <h2>
                <a href="/<?php echo $post['Title_slug'] ?>"><?php echo $post['Title'] ?></a>
                <small><?php echo gmdate("Y/d/m", $post['created']) ?></small>
            </h2>
        </header>
        <main>
            <?php echo $post['Intro'] ?>
        </main>
        <footer>
            <a href="/<?php echo $post['Title_slug'] ?>">read more..</a>
        </footer>
    </article>
<?php } ?>

<?php include 'footer.php' ?>