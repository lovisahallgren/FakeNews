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

/**
 * Sorts posts by author. From A to Z.
 *
 * @param  array $a
 * @param  array $b
 *
 * @return bool
 */
function sortByAuthor(array $a, array $b): bool
{
  return $a['author'] > $b['author'];
};

/**
 * Sorts posts by date. From new to old.
 *
 * @param  array $a
 * @param  array $b
 *
 * @return bool
 */
function sortByDate(array $a, array $b): bool
{
  return $a['published date'] < $b['published date'];
};

/**
 * Sorts posts by likes. From high to low.
 *
 * @param  array $a
 * @param  array $b
 *
 * @return bool
 */
function sortByLikes(array $a, array $b): bool
{
  return $a['like counter'] < $b['like counter'];
};

/**
 * Filter the posts by given author.
 *
 * @param  array $items
 * @param  string $author
 *
 * @return array
 */
function sortOutAuthor(array $items, string $author): array
{
  $items = array_filter($items, function($item) use ($author){
    return $item['author'] == $author;
  });
  return $items;
};
