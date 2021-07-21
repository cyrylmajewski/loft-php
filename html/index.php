<?php
// include composer autoload
require '../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\AbstractFont;
use Intervention\Image\Constraint;
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('man.png');

$img->resize(400, null, function (Constraint $constraint) {
	$constraint->aspectRatio();
});

$img->text('New text with Open Sans', $img->getWidth() - 10, $img->getHeight() - 10, function (AbstractFont $font) {
	$font->size(24);
	$font->file('./opensans.ttf');
	$font->color([2555, 255, 255, 0.4]);
	$font->align('right');
	$font->valign('bottom');
});

$img->save('jeeeee.png');

echo $img->response('png');
