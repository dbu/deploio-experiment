<?php

use Imagine\Image\ImageInterface;

require __DIR__.'/../vendor/autoload.php';

$imagine = new Imagine\Gd\Imagine();

$size    = new Imagine\Image\Box(200, 200);

$image = $imagine->open(__DIR__.'/../resources/deploio.png')
    ->thumbnail($size, ImageInterface::THUMBNAIL_OUTBOUND)
    ->get('png')
;

?>
<html>
<head>
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <title>deplo.io plain PHP demo</title>
</head>
<body>
<h1>Plain PHP Demo is working!</h1>
<p>
    This simplistic PHP application demonstrates how to install a PHP application on deplo.io.
    It uses the <code>imagine/imagine</code> library with the GD PHP extension <code>ext-gd</code> to scale an image to a different size.
    deplo.io uses the <code>composer.json</code> to know that it needs to provide <code>ext-gd</code> and then uses composer to install the dependencies.
</p>
<img title="deplo.io logo scaled in PHP" alt="deplo.io" src="data:image/png;base64,<?php echo base64_encode($image) ?>" />
</body>
</html>
