<?php

declare(strict_types=1);


/**
 * Get date from given textfile.
 *
 * @param  string $filename
 *
 * @return string
 */
function getDateFromTextfile(string $filename): string
{
  if (file_exists($filename)) {
    return date ("d F Y H:i:s", filemtime($filename));
  }
}

function sortByLikes($article)
{
  if (isset($_GET['sortByLikes'])) {
   $article['like counter'] = $_GET['sortByLikes'];
     if ($article['like counter']) {
      return $article['like counter'];
    }
  }
}
