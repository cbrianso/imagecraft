<?php

namespace Imagecraft\OptionPass;

/**
 * @covers Imagecraft\OptionPass\JpegQualityOptionPass
 */
class JpegInterlaceOptionPassTest extends \PHPUnit_Framework_TestCase
{
    protected $pass;

    public function setUp()
    {
        $this->pass = $this->getMock('Imagecraft\\OptionPass\\JpegInterlaceOptionPass', null);
    }

    public function testProcess()
    {
        $option = $this->pass->process([]);
        $this->assertEquals(false, $option['jpeg_interlace']);

        $option = $this->pass->process(['jpeg_interlace' => true]);
        $this->assertEquals(true, $option['jpeg_interlace']);

        $option = $this->pass->process(['jpeg_interlace' => false]);
        $this->assertEquals(false, $option['jpeg_interlace']);

        $option = $this->pass->process(['jpeg_interlace' => 10]);
        $this->assertEquals(false, $option['jpeg_interlace']);
    }
}
