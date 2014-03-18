<?php

use Mockery as m;
use Shale\Response\Factories\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class ResponseFactoryTest extends PHPUnit_Framework_TestCase
{
  private $responseFactory;

  public function __construct()
  {
    $this->responseFactory = new ResponseFactory;
  }

  public function testOk()
  {
    $response = $this->responseFactory->ok('test');
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->getStatusCode(), 200);
    $this->assertEquals($response->getContent(), 'test');
  }

  public function testNotFound()
  {
    $response = $this->responseFactory->notFound('test');
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->getStatusCode(), 404);
    $this->assertEquals($response->getContent(), 'test');
  }

  public function testInternalServerError()
  {
    $response = $this->responseFactory->internalServerError('test');
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->getStatusCode(), 500);
  }
}
