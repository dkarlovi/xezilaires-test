<?php

namespace Example;

use Symfony\Component\Serializer\Serializer;
use Xezilaires\Metadata;

require_once __DIR__.'/../vendor/autoload.php';

// needed only for the demo
// <demo>
$normalizer = new \Xezilaires\Bridge\Symfony\Serializer\ObjectSerializer(
    new Serializer([
        new \Symfony\Component\Serializer\Normalizer\PropertyNormalizer(),
    ])
);
$iteratorFactory = new \Xezilaires\SpreadsheetIteratorFactory($normalizer);
// </demo>

$iterator = $iteratorFactory->createFromPath(
    // https://github.com/dkarlovi/xezilaires/raw/master/resources/fixtures/products.xlsx
    new \SplFileObject(__DIR__.'/../products.xlsx'),
    new Metadata\Mapping(
        // what class to denormalize into
        Model\Product::class,
        [
            // property => cell
            'name' => new Metadata\ColumnReference('A'),
        ],
        [
            // options
            'start' => 2
        ]
    )
);

$out = iterator_to_array($iterator);
echo \json_encode($out, JSON_PRETTY_PRINT);
