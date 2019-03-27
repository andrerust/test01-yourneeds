<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestResult;

class PHPUnit_Util_Test extends TestCase
{
   public function testEmpty()
   {
      $stack = [];
      $this->assertEmpty($stack);

      return $stack;
   }

   /**
    * @depends testEmpty
    */
   public function testPush(array $stack)
   {
      array_push($stack, 'foo');
      $this->assertSame('foo', $stack[count($stack) - 1]);
      $this->assertNotEmpty($stack);

      return $stack;
   }

   /**
    * @depends testPush
    */
   public function testPop(array $stack)
   {
      $this->assertSame('foo', array_pop($stack));
      $this->assertEmpty($stack);
   }

   /**
    * Runs a test and collects its result in a TestResult instance.
    */
   public function run(TestResult $result = null): TestResult
   {
      // TODO: Implement run() method.
   }
}
