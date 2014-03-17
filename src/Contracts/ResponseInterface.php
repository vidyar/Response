<?php

namespace Shale\Response\Contracts
{
  interface ResponseInterface
  {
    public function ok($message, $args = array());

    public function resourceNotFound($message);

    public function error($message);
  }
}