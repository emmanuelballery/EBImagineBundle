<?php

namespace EB\ImagineBundle\Filter;

use Imagine\Filter\FilterInterface;
use Imagine\Image\BoxInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\Color;
use Imagine\Image\ManipulatorInterface;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Draw\DrawerInterface;

/**
 * Class BorderFilter
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class BorderFilter implements FilterInterface
{
    /**
     * Size
     *
     * @var BoxInterface
     */
    private $size;

    /**
     * Width
     *
     * @var int
     */
    private $width;

    /**
     * Color
     *
     * @var Color
     */
    private $color;

    /**
     * Angle
     *
     * @var int
     */
    private $angle;

    /**
     * Background color
     *
     * @var Color
     */
    private $bg;

    /**
     * @param array   $size  [optional] An array of new width and height
     * @param int     $width [optional] The size of the border
     * @param string  $color [optional] The color of the border
     * @param int     $angle [optional] The angle used to rotate the image
     * @param string  $bg    [optional] The color of the background
     */
    public function __construct(array $size = array(), $width = null, $color = null, $angle = null, $bg = null)
    {
        $this->size = $size ? new Box($size[0], $size[1]) : null;
        $this->width = $width ? : 1;
        $this->color = new Color($color ? : 'cccccc');
        $this->angle = $angle ? : 0;
        $this->bg = $bg ? new Color($bg) : null;
    }

    /**
     * @param ImageInterface $image
     *
     * @return ImageInterface|ManipulatorInterface
     */
    public function apply(ImageInterface $image)
    {
        // Rotate
        if ($this->angle) {
            $image->rotate($this->angle, $this->bg);
        }
        // Change size
        if ($this->size) {
            $image = $image->thumbnail($this->size, ManipulatorInterface::THUMBNAIL_OUTBOUND);
        }
        /** @var BoxInterface $size */
        $size = $image->getSize();
        $w = $size->getWidth() - 1;
        $h = $size->getHeight() - 1;
        /** @var DrawerInterface $draw */
        $draw = $image->draw();
        for ($i = 0; $i < $this->width; $i++) {
            $draw->line(new Point(0, $i), new Point($w, $i), $this->color, 1); // Up
            $draw->line(new Point($w - $i, 0), new Point($w - $i, $h), $this->color, 1); // Right
            $draw->line(new Point($w, $h - $i), new Point(0, $h - $i), $this->color, 1); // Bottom
            $draw->line(new Point(0 + $i, $h), new Point(0 + $i, 0), $this->color, 1); // Left
        }

        return $image;
    }
}
