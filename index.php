<?php
$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];
$paroleMancanti = [
    'Nel',
    'cammin',
    'nostra',
    'vita',
    'una',
    'selva',
    'che',
    'via',
    'smarrita',
];

$results = $paroleMancanti[0] . ' ' .
           $words1[6][3][0] . ' di ' .
           $paroleMancanti[1] . ' di ' .
           $paroleMancanti[2] . ' ' .
           $paroleMancanti[3] . ' ' .
           $words1[4] . ' ' .
           $words1[6][4] . ' ' .
           $words1[6][5] . ' ' .
           $paroleMancanti[4] . ' ' .
           $paroleMancanti[5] . ' ' .
           $words1[6][0] . ', ' .
           $paroleMancanti[6] . "' la " .
           $words1[7] . ' ' .
           $paroleMancanti[7] . ' ' .
           $words1[6][1] . ' ' .
           $paroleMancanti[8];

echo $results;