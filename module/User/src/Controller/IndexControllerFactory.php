<?php

namespace User\Controller;

use Interop\Container\ContainerInterface;

class IndexControllerFactory
{
  public function __invoke(ContainerInterface $container)
  {
    return new IndexController(
      
    );
  }
}