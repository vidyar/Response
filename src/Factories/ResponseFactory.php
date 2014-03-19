<?php namespace Shale\Response\Factories;

use Symfony\Component\HttpFoundation\Response;

class ResponseFactory extends ResponseFactoryBase
{
  public function ok($message, $headers = array())
  {
    return $this->send($message, 200, $headers);
  }

  public function notFound($message, $headers = array())
  {
    return $this->send($message, 404, $headers);
  }

  public function internalServerError($message, $headers = array())
  {
    return $this->send("An unexpected error occurred: ". $message, 500, $headers);
  }

  public function created($content, $headers = array())
  {
    return $this->send($content, 201, $headers);
  }

  public function accepted($content, $headers = array())
  {
    return $this->send($content, 202, $headers);
  }

  public function noContent($content, $headers = array())
  {
    return $this->send("", 202, $headers);
  }

  public function movedPermantently($content, $headers = array())
  {
    return $this->send($content, 301, $headers);
  }

  public function found($content, $headers = array())
  {
    return $this->send($content, 302, $headers);
  }

  public function seeOther($content, $headers = array())
  {
    return $this->send($content, 303, $headers);
  }

  public function badRequest($content, $headers = array())
  {
    return $this->send($content, 400, $headers);
  }

  public function unauthorized($content, $headers = array())
  {
    return $this->send($content, 401, $headers);
  }

  public function forbidden($content, $headers = array())
  {
    return $this->send($content, 403, $headers);
  }

  public function methodNotAllowed($content, $headers = array())
  {
    return $this->send($content, 405, $headers);
  }

  public function notAcceptable($content, $headers = array())
  {
    return $this->send($content, 406, $headers);
  }

  public function send($message, $status, array $headers = array())
  {
    return new Response($message, $status, $headers);
  }
}