<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use Bardiz12\AHPDss\AHP;

print_r(get_declared_classes());
$ahp = new AHP();
$criterias = [
    'Orientasi Pelayanan',
    'Integritas',
    'Tanggung Jawab',
    'Komitmen',
    'Kepemimpinan',
    'Kerjasama',
    'Prestasi Kerja',
    'Wawasan',
    'Komunikatif'
];
foreach ($criterias as $key => $value) {
    $ahp->addQualitativeCriteria($value);
}
//$ahp->addQualitativeCriteria('style');
//$ahp->addQualitativeCriteria('kehandalan');
//$ahp->addQuantitativeCriteria('bbm');

$ar = [
    [1,null,null,null,null,null,null,null,null],
    [9,1,2,2,2,3,7,7,7],
    [7,null,1,2,2,2,7,7,7],
    [9,null,null,1,2,2,7,7,5],
    [7,null,null,null,1,2,5,5,5],
    [7,null,null,null,null,1,5,5,5],
    [4,null,null,null,null,null,1,3,2],
    [3,null,null,null,null,null,null,1,null],
    [3,null,null,null,null,null,null,5,1]
    
];
$candidates = ['TF','KS','NH','AT'];
//try {
    $ahp->setRelativeInterestMatrix($ar);
//} catch (\Exception $e) {
//    echo $e->getMessage();
//    exit();
//}

$ahp->setCandidates($candidates);

$pairWise = [
    'Orientasi Pelayanan'=>
    [
        [1,null,null,null],
        [5,1,3,6],
        [4,null,1,4],
        [2,null,null,1],
    ],
    'Integritas'=>
    [
        [1,null,null,5],
        [5,1,2,7],
        [2,null,1,5],
        [null,null,null,1]
    ],
    'Tanggung Jawab'=>
    [
        [1,null,null,null,],
        [5,1,2,3],
        [5,null,1,3],
        [2,null,null,1]
    ],
    'Komitmen'=>[
        [1,null,null,null,],
        [5,1,3,6],
        [4,null,1,4],
        [2,null,null,1]
    ],
    'Kepemimpinan'=>[
        [1,null,null,null,],
        [5,1,2,6],
        [4,null,1,5],
        [2,null,null,1]
    ],
    'Kerjasama'=>[
        [1,3,null,2],
        [null,1,null,null],
        [4,5,1,3],
        [null,3,null,1]
    ],
    'Prestasi Kerja'=>[
        [1,null,null,3],
        [5,1,2,5],
        [3,null,1,3],
        [null,null,null,1]
    ],
    'Wawasan'=>[
        [1,2,5,5],
        [null,1,3,3],
        [null,null,1,2],
        [null,null,null,1]
    ],
    'Komunikatif'=>[
        [1,null,2,5],
        [3,1,3,5],
        [null,null,1,4],
        [null,null,null,1]
    ]
];
$ahp->setBatchCriteriaPairWise($pairWise);
$ahp->finalize();

print_r($ahp->getResult());

$ahp->debug();