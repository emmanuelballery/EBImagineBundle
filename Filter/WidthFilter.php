<?php

namespace EB\ImagineBundle\Filter;

use Imagine\Image\ManipulatorInterface;
use Imagine\Image\ImageInterface;
use Imagine\Filter\FilterInterface;
use Imagine\Image\Box;

/**
 * Class WidthFilter
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class WidthFilter implements FilterInterface
{
    /**
     * @var int
     */
    private $width;

    /**
     * @param int $width
     */
    public function __construct($width)
    {
        $this->width = (int)$width;
    }

    /**
     * @param ImageInterface $image
     *
     * @return ImageInterface|ManipulatorInterface
     */
    public function apply(ImageInterface $image)
    {
        $size = $image->getSize();
        $height = ($size->getHeight() * $this->width) / $size->getWidth();
        $newSize = new Box($this->width, $height);

        return $image->thumbnail($newSize, ManipulatorInterface::THUMBNAIL_OUTBOUND);
    }
}
