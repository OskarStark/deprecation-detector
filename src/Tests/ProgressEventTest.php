<?php

namespace Tests;

use SensioLabs\DeprecationDetector\ProgressEvent;

class ProgressEventTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructAndGetter()
    {
        $event = new ProgressEvent(123, 234);

        $this->assertInstanceOf('SensioLabs\DeprecationDetector\ProgressEvent', $event);
        $this->assertEquals(123, $event->getProcessed());
        $this->assertEquals(234, $event->getTotalNumber());
    }
}