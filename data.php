<?php

declare(strict_types=1);

$authors = [
  [
  'name' => 'Walter White',
  'id' => 01,
],
  [
  'name' => 'Jesse Pinkman',
  'id' => 02,
],
  [
  'name' => 'Saul Goodman',
  'id' => 03,
],
  [
  'name' => 'Hank Schrader',
  'id' => 04,
],
  [
  'name' => 'Gus Fring',
  'id' => 05,
],
];

$newsFeed = [
  [
    'title' => 'No speeches. Short speech.',
    'content' => file_get_contents(__DIR__.'/content/article01.txt'),
    'author' => $authors[0]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article01.txt'),
    'like counter' => 4,
  ],
  [
    'title' => 'Four pounds... foooour pounds',
    'content' => file_get_contents(__DIR__.'/content/article02.txt'),
    'author' => $authors[0]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article02.txt'),
    'like counter' => 27,
  ],
  [
    'title' => 'Sorry, buddy.',
    'content' => file_get_contents(__DIR__.'/content/article03.txt'),
    'author' => $authors[1]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article03.txt'),
    'like counter' => 15,
  ],
  [
    'title' => 'Walter, you\'ve been busy.',
    'content' => file_get_contents(__DIR__.'/content/article04.txt'),
    'author' => $authors[1]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article04.txt'),
    'like counter' => 2,
  ],
  [
    'title' => 'What\'s your name?',
    'content' => file_get_contents(__DIR__.'/content/article05.txt'),
    'author' => $authors[2]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article05.txt'),
    'like counter' => 63,
  ],
  [
    'title' => 'Chemotherapy and marijuana go together like apple pie and Chevrolet.',
    'content' => file_get_contents(__DIR__.'/content/article06.txt'),
    'author' => $authors[2]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article06.txt'),
    'like counter' => 43,
  ],
  [
    'title' => 'A tiara... a white',
    'content' => file_get_contents(__DIR__.'/content/article07.txt'),
    'author' => $authors[3]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article07.txt'),
    'like counter' => 29,
  ],
  [
    'title' => 'Wayfarer 515, radio check.',
    'content' => file_get_contents(__DIR__.'/content/article08.txt'),
    'author' => $authors[3]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article08.txt'),
    'like counter' => 37,
  ],
  [
    'title' => 'You are done. Fired.',
    'content' => file_get_contents(__DIR__.'/content/article09.txt'),
    'author' => $authors[4]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article09.txt'),
    'like counter' => 39,
  ],
  [
    'title' => 'Ding ding ding ding.',
    'content' => file_get_contents(__DIR__.'/content/article10.txt'),
    'author' => $authors[4]['name'],
    'published date' => getDateFromTextfile($filename = __DIR__.'/content/article10.txt'),
    'like counter' => 22,
  ],
];

$sortByPost = usort($newsFeed, 'sortByDate');

if (isset($_GET['sortBy'])) {
  $sortBy = $_GET['sortBy'];

  if ($sortBy === 'author') {
      $sortByPost = usort($newsFeed, 'sortByAuthor');
  }
  elseif ($sortBy === 'date') {
      $sortByPost = usort($newsFeed, 'sortByDate');
  }
  elseif ($sortBy === 'likes') {
      $sortByPost = usort($newsFeed, 'sortByLikes');
    }
}

if (isset($_GET['sortOut'])) {
  $sortOut = $_GET['sortOut'];
  $newsFeed = sortOutAuthor($newsFeed, $sortOut);
}
