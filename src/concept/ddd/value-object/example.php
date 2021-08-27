<?php
final class ImagesTypeValueObject {
    private $imageType;
    private $validImageType = ['JPEG', 'GIF', 'BMP', 'TIFF', 'PNG'];
    public
    function __construct($imageType) {
        Assertion::inArray($this -> validImageType, $imageType, 'Sorry The entry is wrong please entre valid image type');
        $this ->imageType = $imageType;
    }
    public
    function __toString() {
        return $this -> imageType;
    }
}

