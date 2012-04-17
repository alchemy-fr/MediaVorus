<?php

namespace MediaVorus\Media;

require_once dirname(__FILE__) . '/../../../../src/MediaVorus/Media/Image.php';

/**
 * Test class for Image.
 * Generated by PHPUnit on 2012-03-17 at 01:04:23.
 */
class ImageTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Image
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Image(new \SplFileInfo(__DIR__ . '/../../../files/ExifTool.jpg'), new \PHPExiftool\Exiftool());
    }

    /**
     * @covers \MediaVorus\Media\Image::getWidth
     */
    public function testGetWidth()
    {
        $this->assertTrue(is_int($this->object->getWidth()));
        $this->assertEquals(8, $this->object->getWidth());
    }

    /**
     * @covers \MediaVorus\Media\Image::getHeight
     */
    public function testGetHeight()
    {
        $this->assertTrue(is_int($this->object->getHeight()));
        $this->assertEquals(8, $this->object->getHeight());
    }

    /**
     * @covers \MediaVorus\Media\Image::getChannels
     */
    public function testGetChannels()
    {
        $this->assertTrue(is_int($this->object->getChannels()));
        $this->assertEquals(3, $this->object->getChannels());
    }

    /**
     * @covers \MediaVorus\Media\Image::getFocalLength
     */
    public function testGetFocalLength()
    {
        $this->assertTrue(is_string($this->object->getFocalLength()));
        $this->assertEquals('6.0 mm', $this->object->getFocalLength());
    }

    /**
     * @covers \MediaVorus\Media\Image::getColorDepth
     */
    public function testGetColorDepth()
    {
        $this->assertTrue(is_int($this->object->getColorDepth()));
        $this->assertEquals(8, $this->object->getColorDepth());
    }

    /**
     * @covers \MediaVorus\Media\Image::getCameraModel
     */
    public function testGetCameraModel()
    {
        $this->assertTrue(is_string($this->object->getCameraModel()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getFlashFired
     */
    public function testGetFlashFired()
    {
        $this->assertTrue(is_bool($this->object->getFlashFired()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getAperture
     */
    public function testGetAperture()
    {
        $this->assertTrue(is_string($this->object->getAperture()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getShutterSpeed
     */
    public function testGetShutterSpeed()
    {
        $this->assertTrue(is_string($this->object->getShutterSpeed()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getOrientation
     */
    public function testGetOrientation()
    {
        $this->assertTrue(is_int($this->object->getOrientation()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getCreationDate
     */
    public function testGetCreationDate()
    {
        $this->assertTrue(is_string($this->object->getCreationDate()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getHyperfocalDistance
     */
    public function testGetHyperfocalDistance()
    {
        $this->assertTrue(is_string($this->object->getHyperfocalDistance()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getISO
     */
    public function testGetISO()
    {
        $this->assertTrue(is_int($this->object->getISO()));
        $this->assertEquals(100, $this->object->getISO());
    }

    /**
     * @covers \MediaVorus\Media\Image::getLightValue
     */
    public function testGetLightValue()
    {
        $this->assertTrue(is_string($this->object->getLightValue()));
    }

    /**
     * @covers \MediaVorus\Media\Image::getColorSpace
     */
    public function testGetColorSpace()
    {
        $media = new \MediaVorus\Media\Image(__DIR__ . '/../../../files/ExifTool.jpg');

        $this->assertEquals(\MediaVorus\Media\Image::COLORSPACE_SRGB, $media->getColorSpace());
    }

}
