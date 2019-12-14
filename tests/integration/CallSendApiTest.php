<?php

namespace CodeBot;

use COdeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{
    /**
     * @expectedException \GuzzleHttp\Exception\ClientException
     */
    public function testMakeRequest()
    {
        $message = (new Text(1))->message('oiii');
        (new CallSendApi('123lhjhk'))->make($message);
    }
}
