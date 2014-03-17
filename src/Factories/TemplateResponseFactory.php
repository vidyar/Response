<?php

namespace Shale\Response\Factories
{
  use Twig_Environment;

  class TemplateResponseFactory extends ResponseFactoryBase
  {
    private $templateEngine;

    public function __construct(Twig_Environment $templateEngine)
    {
      $this->templateEngine = $templateEngine;
    }

    public function ok($template, $args = array())
    {
      $content = $this->templateEngine->render($template, $args);
      return $this->send($content, 200);
    }

    public function resourceNotFound($message)
    {
      $content = $this->templateEngine->render('404.twig', array(
        'message' => 'Page Not Found! '. $message
      ));
      return $this->send($content, 404);
    }

    public function error($message)
    {
      $this->send("An unexpected error occurred: ". $message, 500);
    }
  }
}