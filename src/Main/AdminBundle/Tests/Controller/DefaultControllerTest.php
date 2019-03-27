<?php

namespace Main\AdminBundle\Tests\Controller;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestResult;

class DefaultControllerTest extends TestCase
{
   public function testIndex()
   {

      $this->assertContains('Hello World', "hello");
   }

   /**
    * Runs a test and collects its result in a TestResult instance.
    */
   public function run(TestResult $result = null): TestResult
   {
      // TODO: Implement run() method.
   }
}
