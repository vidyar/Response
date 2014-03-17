<?php

namespace Shale\Response\Factories
{
  use Shale\Response\Contracts\ResponseInterface;
  use Symfony\Component\HttpFoundation\Response;

  abstract class ResponseFactoryBase implements ResponseInterface
  {
    protected function send($message, $status)
    {
      return new Response($message, $status);
    }
  }
}