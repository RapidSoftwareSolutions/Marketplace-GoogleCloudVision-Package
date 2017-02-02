<?php
$routes = [
    'batchTypeDetections',
    'batchPictureDetections',
    'detectExplicitContent',
    'detectImageProperties',
    'detectLogos',
    'detectText',
    'detectLandmarks',
    'detectLabels',
    'detectFaces',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

