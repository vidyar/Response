<?php namespace Shale\Response\Factories;

interface ResponseProxyInterface
{
    public function setResponseFactory(ResponseFactoryBase $rf);
    public function __call($method,$args);
    echo strtotime("now"), "\n";
}
