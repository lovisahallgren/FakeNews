<?php

declare(strict_types=1);
require __DIR__.'/functions.php';

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
    'title' => 'Partner?',
    'content' => 'No speeches. Short speech. You lost your partner today.
                  What\'s his name - Emilio? Emilio is going to prison.
                  The DEA took all your money, your lab. You got nothing. Square one.
                  But you know the business and I know the chemistry.
                  I\'m thinking... maybe you and I could partner up. ',
    'author' => $authors[0],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'No room for error',
    'content' => 'Look... I feel like I\'m running out of ways to
                  explain this to you but once more, I shall try.
                  This fly is a major problem for us. It will ruin our batch.
                  And we need to destroy it and every trace of it, so we can cook.
                  Failing that, we\'re dead. There\'s no more room for error.
                  Not with these people. ',
    'author' => $authors[0],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'Science',
    'content' => 'Four pounds... foooour pounds as if two pounds
                  wasn\'t bad enough. we\'re talking two three hundred
                  boxes of sinus pills there ain\'t that many Smurfs
                  in the world. So no sudo? So you do have a plan!
                  Yeah, Mr. White! Yeah, science! ',
    'author' => $authors[1],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'Lex Luthor',
    'content' => 'Yo... it\'s appointment only! Jeez, you look like...
                 Lex Luthor. I got two dudes turned into raspberry
                 slushy and flushed down my toilet. I can\'t even take
                 a proper dump in there. I mean the whole damn house
                 has gotta be haunted by now. ',
    'author' => $authors[1],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'Welcome',
    'content' => 'Hello. Welcome. What a pleasure it is to have you.
                 Just gonna call you Skyler if that\'s okay.
                 It\'s a lovely name. It reminds me of the big, beautful sky.
                 Walter always told me how lucky he was,
                 prior to recent unfortunate events. Clearly his taste in women
                 is the same as his taste in lawyers: only the very best with
                 just the right amount of dirty.',
    'author' => $authors[2],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'Crybaby',
    'content' => 'Look, let\'s start with some tough love, alright?
                  Ready for this? Here it goes: you two suck at peddling meth.
                  Period. Good! \'Oh boo-hoo, I won\'t cook meth anymore!\'
                  You\'re a crybaby! Who needs you?! Hey, I\'m unplugging
                  the website, so no more money laundering! How do you like that?!',
    'author' => $authors[2],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'Cheetos!!!',
    'content' => 'Marie, I said Cheetos, not Fritos.
                  I must\'ve said Cheetos like ten times.
                  You need me to write it down for you?
                  Well, I\'m just saying, y\'know, I said Cheetos.
                  Ch-ch-ch sound. Virtually impossible to confuse
                  Cheetos with Fritos it seems to me. Where are you going?',
    'author' => $authors[3],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'I think you know',
    'content' => 'I think you know who Tuco Salamanca was.
                  I think your car was there because you were there.
                  Tuco had a bullet in him when I got there and
                  I think you know something about that, too.',
    'author' => $authors[3],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'Business operations',
    'content' => 'I handle the business operations.
                  With all due respect, Don Eladio.
                  I didn\'t sell it to them. I gave them samples.
                  I gave them samples to give to you. To introduce
                  you to our product. This product is the drug of
                  the future. It\'ll triple your profits. Perhaps quadruple.',
    'author' => $authors[4],
    'published date' => '',
    'like counter' => '',
  ],
  [
    'title' => 'Sorry.',
    'content' => 'Don Eladio, please. I didn\'t sell anything.
                  I apologize if you are offended by my method
                  of obtaining this meeting.
                  I merely took the initiative. I meant no insult.',
    'author' => $authors[4],
    'published date' => '',
    'like counter' => '',
  ],
];
