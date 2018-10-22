<?php

declare(strict_types=1);

require __DIR__.'/header.php';
require __DIR__.'/functions.php';
require __DIR__.'/data.php';
?>


<body>
<main>
  <?php foreach ($newsFeed as $article): ?>
    <section>
      <h1><?= $article['title']?></h1>
      <p><?= $article['content'] ?></p>
      <h6><?= $article['author'].' '.$article['published date']?></h6>
    </section>
  <?php endforeach ?>
</main>
<?php
require __DIR__.'/footer.php';
 ?>
