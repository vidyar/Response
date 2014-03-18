<?php

namespace Shale\Response\Factories
{
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
  }
}
