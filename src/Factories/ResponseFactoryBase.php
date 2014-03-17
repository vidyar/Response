<?php

namespace Shale\Response\Factories
{
  use Shale\Response\Contracts\ResponseInterface;
  use Symfony\Component\HttpFoundation\Response;

  abstract class ResponseFactoryBase implements ResponseInterface
  {
    /**
    *      * Status code 200
    * SHOULD have a entity
    */    
    public function ok()
    { 
        $this->methodNotImplemented();
    } 

    /** 
    * Status code 201
    * SHOULD have an entity
    * origin server MUST create the resource
    * SHOULD have Header field Location of the created resource 
    */
    public function created()
    { 
        $this->methodNotImplemented();
    } 

    /** 
    * Status code 202
    * SHOULD include indication of the request's current state
    */    
    public function accepted()
    { 
        $this->methodNotImplemented();
    }

    /**
    * Status code 204
    * MUST NOT have a message body
    */
    public function noContent()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 301
    */
    public function movedPermantently()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 302
    */
    public function found()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 303
    */
    public function seeOther()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 400
    */
    public function badRequest()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 401
    */
    public function unauthorized()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 403
    */
    public function forbidden()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 404
    */
    public function notFound()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 405
    */
    public function methodNotAllowed()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 406
    * AKA: The Earl of Lemongrab
    */
    public function notAcceptable()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 500
    */
    public function internalServerError()
    {
        $this->methodNotImplemented();
    }
                                                             
    private function methodNotImplemented()
    {
        throw new MethodNotImplementedException();
    }

    protected function send($message, $status, array $headers = array())
    {
      return new Response($message, $status);
    }
  }
}
