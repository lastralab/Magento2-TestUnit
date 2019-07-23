<?php 
/**
* Created by PhpStorm
* user: Niam Moltta
* date: After the Apocalypse
* time: 00:00:00 hrs
*/

namespace _\_\Controller\Far; // replace __ with your Vendor/Module

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\State;
use _\_\Setup\Patch\Data\_ as Test; 

class FarAway extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Context
     */
    private $context;
    /**
     * @var State
     */
    private $state;
    /**
     * @var Test
     */
    private $test;

    public function __construct(
        Context $context,
        Test $test,
        State $state)
    {
        parent::__construct($context);
        $this->context = $context;
        $this->state = $state;
        $this->test = $test;
    }

    /**
     * Execute action based on request and return result
     * This example tests a Data Patch, feel free to replace the apply() function for your own.
     */
    public function execute()
    {
        echo '<div style="text-align:center"><br /><br /><h2>This planet is not what I expected, R2...</h2><h2>Too many weird bugs.</h2><img alt="starwars" src="http://i.imgur.com/KOCVarT.gif"/></div>';
        $this->test->apply();
    }
}
