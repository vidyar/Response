<?php

use Mockery as m;
use Shale\Response\Factories\TemplateResponseFactory;

class TemplateResponseFactoryTest extends PHPUnit_Framework_TestCase
{
  private $responseFactory;
  private $returnVal = 'rendered template';

  public function __construct()
  {
    $twig = m::mock('Twig_Environment');
    $twig->shouldReceive('render')->andReturn($this->returnVal);
    $this->responseFactory = new TemplateResponseFactory($twig);
  }

  public function testOk()
  {
    $response = $this->responseFactory->ok('test');
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->getStatusCode(), 200);
    $this->assertEquals($response->getContent(), $this->returnVal);
  }

  public function testResourceNotFound()
  {
    $response = $this->responseFactory->resourceNotFound('test');
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->getStatusCode(), 404);
    $this->assertEquals($response->getContent(), $this->returnVal);
  }

  public function testError()
  {
    $response = $this->responseFactory->error('test');
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->getStatusCode(), 500);
  }
}