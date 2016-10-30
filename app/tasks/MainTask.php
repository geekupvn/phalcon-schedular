<?php

class MainTask extends \Phalcon\Cli\Task
{
  public function mainAction()
  {
    echo "Congratulations! You are now flying with Phalcon CLI!";
  }

  public function testAction(array $params)
  {
    var_dump($params);
    echo PHP_EOL;
  }

}
