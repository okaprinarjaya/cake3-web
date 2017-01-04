<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\LayoutPartsHlpHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\LayoutPartsHlpHelper Test Case
 */
class LayoutPartsHlpHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\LayoutPartsHlpHelper
     */
    public $LayoutPartsHlp;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->LayoutPartsHlp = new LayoutPartsHlpHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LayoutPartsHlp);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
