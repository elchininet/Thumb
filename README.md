# Thumb
by [ElChiniNet](http://xprimiendo.com)

Small PHP class to create image thumbnails using the PHP GD Library

Installation
============

1.	Copy the php file from the src folder into a folder on your
	server. It needs to be readable by your web server.

2.	Include the file in your php with include or require methods.

Class Methods
=============

    loadImage(string $name)
_Load the path to the original image_
>**$name** A string representing the path of the image.

---

    save(string $name [, int $quality = 100] [, int $type = false])
_Save the resulting image on disk_
>**$name** A string representing the path of the resulting image.

>**$quality** An optional int between 0 and 100 that set the quality of the resulting image.

>**$type** An optional int that set the format of the resulting image.

>Posible values:
>* IMAGETYPE_JPEG
>* IMAGETYPE_PNG
>* IMAGETYPE_GIF

---

    show([int $type = false] [,boolean $base64 = false])
_Show the resulting image directly on the page_
>**$type** An optional int that set the format of the resulting image.

>Posible values:
>* IMAGETYPE_JPEG
>* IMAGETYPE_PNG
>* IMAGETYPE_GIF

>**$base64** An optional boolean that specifies whether the flow of the image need to be printed directly on the page or if you want to return a base64 representation thereof for use as "src" parameter of an "img" element.

---

    resize(int $value, string $reference)
_Resize the image keeping its proportions_
>**$value** An int that set the width or the height of the resizing.

>**$reference** A string that set if the image will be resized by its width or its height.

>Posible values:
>* width
>* height

---

    crop(int $width, int $height [, string $position = 'center'])
_Create a crop of the image_
>**$width** An int that set the width of the cropping.

>**$height** An int that set the height of the cropping.

>**$position** An optional string that specify the position of the crop.

>Posible values:
>* center (default value)
>* top
>* right
>* bottom
>* left

---

Demo
============

[Functional demo](https://xprimiendo.com/demo/en/php-class-to-create-image-thumbanils/)
