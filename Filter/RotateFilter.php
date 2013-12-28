<?php

namespace EB\ImagineBundle\Filter;

use Imagine\Image\ManipulatorInterface;
use Imagine\Image\ImageInterface;
use Imagine\Filter\FilterInterface;
use Imagine\Image\Box;
use Imagine\Image\Color;

/**
 * Class RotateFilter
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class RotateFilter implements FilterInterface
{
    /**
     * @var int
     */
    private $angle = 0;

    /**
     * @var Color
     */
    private $bg = null;

    /**
     * @var Box
     */
    private $size = null;

    /**
     * @param float $angle
     * @param null  $bg
     * @param array $size
     */
    public function __construct($angle, $bg = null, array $size = null)
    {
        $this->angle = (int)$angle;
        if ($bg) {
            $this->bg = new Color($bg);
        }
        if ($size) {
            $this->size = new Box($size[0], $size[1]);
        }
    }

    /**
     * @param ImageInterface $image
     *
     * @return ImageInterface|ManipulatorInterface
     */
    public function apply(ImageInterface $image)
    {
        $image->rotate($this->angle, $this->bg);
        if ($this->size) {
            return $image->thumbnail($this->size, ManipulatorInterface::THUMBNAIL_INSET);
        }

        return $image;
    }
}
