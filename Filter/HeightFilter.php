<?php

namespace EB\ImagineBundle\Filter;

use Imagine\Image\ManipulatorInterface;
use Imagine\Image\ImageInterface;
use Imagine\Filter\FilterInterface;
use Imagine\Image\Box;

/**
 * Class HeightFilter
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class HeightFilter implements FilterInterface
{
    /**
     * @var int
     */
    private $height;

    /**
     * @param int $height
     */
    public function __construct($height)
    {
        $this->height = (int)$height;
    }

    /**
     * @param ImageInterface $image
     *
     * @return ImageInterface|ManipulatorInterface
     */
    public function apply(ImageInterface $image)
    {
        $size = $image->getSize();
        $width = ($size->getWidth() * $this->height) / $size->getHeight();
        $newSize = new Box($width, $this->height);

        return $image->thumbnail($newSize, ManipulatorInterface::THUMBNAIL_OUTBOUND);
    }
}
