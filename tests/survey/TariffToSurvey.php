<?php

namespace PHPUnit\Framework;

use Symfony\Component\Stopwatch\Stopwatch;

class TraiffToSurveyTest extends TestCase
{
   /**
    * @var TestResult
    */
   private $result;

   public function testSomething()
   {
      $stopwatch = new Stopwatch();

      $stopwatch->start('event_name');
      sleep(2);
      $duration = $stopwatch->stop('event_name')->getDuration();

      $this->assertGreaterThanOrEqual(3000, $duration);
   }

   protected function setUp()
   {
      $this->result = new \PHPUnit_Framework_TestResult();
   }

   public static function suite()
   {
      $suite = new TestSuite;

      $suite->addTest(new self('testSomething'));
      return $suite;
   }

}