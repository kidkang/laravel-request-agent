<?php 
namespace Yjtec\Request\Agent\Tests;
use Mockery as m;
use PHPUnit\Framework\TestCase;
use Yjtec\Request\Agent\RequestServiceProvider;
class RequestServiceProvdierTest extends TestCase{
    public function testNormal(){
        $provider = new RequestServiceProvider(m::mock('stdClass'));
        $provider->register();
        $this->assertTrue(true);
    }
}
