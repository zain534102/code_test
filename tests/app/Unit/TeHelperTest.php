<?php

namespace Tests\Unit;


use DTApi\Helpers\TeHelper;
use PHPUnit\Framework\TestCase;

class TeHelperTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWillExpireAtTimestamp()
    {
        $urlHelper = new TeHelper();
        $this->assertEquals($urlHelper->willExpireAt(Carbon::now(),Carbon::now()),Carbon::now());
    }
}
