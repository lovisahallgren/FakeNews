<?php

declare(strict_types=1);

// Stops time in PHP, helps me to get the random date to stay the same when refreshing the page
srand(mktime(0, 0, 0));
// $time = rand( 0, time() );

/**
 * Get date from given textfile.
 *
 * @param  string $start_date
 * @param  string $end_date
 *
 * @return string
 */
 function randomDate(string $start_date, string $end_date): string
{
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);
     // Generate random number using above bounds
    $val = rand($min, $max);
     // Convert back to desired date format
    return date('d F Y', $val);
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
