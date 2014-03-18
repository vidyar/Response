<?php

use Shale\Response\Factories\ResponseFactoryBase;
use Shale\Response\Exceptions\MethodNotImplementedException;

class ResponseDummyImplementation extends ResponseFactoryBase {}

// All methods should throw MethodNotImplementedException
class ResponseBaseTest extends PHPUnit_Framework_TestCase
{
  private $responseFactory;
  private $message = 'test';
  private $args = array();

  public function __construct()
  {
    $this->responseFactory = new ResponseDummyImplementation;
  }

  public function isExceptionThrown($method)
  {
    try {
      $this->responseFactory->$method($this->message, $this->args);
      return false;
    }
    catch (MethodNotImplementedException $e) {
      return true;
    }
  }

  public function testOk()
  {
    $this->assertTrue($this->isExceptionThrown('ok'));
  }

  public function testCreated()
  {
    $this->assertTrue($this->isExceptionThrown('created'));
  }

  public function testAccepted()
  {
    $this->assertTrue($this->isExceptionThrown('accepted'));
  }

  public function testNoContent()
  {
    $this->assertTrue($this->isExceptionThrown('noContent'));
  }

  public function testMovedPermanently()
  {
    $this->assertTrue($this->isExceptionThrown('movedPermanently'));
  }

  public function testFound()
  {
    $this->assertTrue($this->isExceptionThrown('found'));
  }

  public function testSeeOther()
  {
    $this->assertTrue($this->isExceptionThrown('seeOther'));
  }

  public function testBadRequest()
  {
    $this->assertTrue($this->isExceptionThrown('badRequest'));
  }

  public function testUnauthorized()
  {
    $this->assertTrue($this->isExceptionThrown('unauthorized'));
  }

  public function testForbidden()
  {
    $this->assertTrue($this->isExceptionThrown('forbidden'));
  }

  public function testNotFound()
  {
    $this->assertTrue($this->isExceptionThrown('notFound'));
  }

  public function testMethodNotAllowed()
  {
    $this->assertTrue($this->isExceptionThrown('methodNotAllowed'));
  }

  public function testNotAcceptable()
  {
    $this->assertTrue($this->isExceptionThrown('notAcceptable'));
  }

  public function testInternalServerError()
  {
    $this->assertTrue($this->isExceptionThrown('internalServerError'));
  }

  public function testSend()
  {
    $statusCode = 200;
    $content = 'test';
    $key = 'X-Your-Mom';
    $val = 'What did you just say?!';
    $headers = array(
      $key => $val
    );

    $response = $this->responseFactory->send($content, $statusCode, $headers);
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->headers->get($key), $val);
    $this->assertEquals($response->getContent(), $content);
    $this->assertEquals($response->getStatusCode(), $statusCode);
  }
}