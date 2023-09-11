<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'author',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => 2022
    ],
    [
        'name' => 'Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => 1928
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' => 1992
    ],
];
function  filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}
$filteredBooks = filter($books, function ($book) {
    return $book['releaseYear'] >= 2000;
});


require "index.view.php";