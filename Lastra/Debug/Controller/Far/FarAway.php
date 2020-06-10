<?php
/**
* Created by PhpStorm
* user: Tania
* date: After the Apocalypse
* time: 00:00:00 hrs
*/

namespace Lastra\Debug\Controller\Far;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\State;
//set path to your patch or any application you want to test
use Vendor\Module\Setup\Patch\Data\_ as Test; 

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
     * Remember: Only 'public' functions can run from here.
     */
    public function execute()
    {
        echo '<div style="text-align:center"><br /><br /><h2>This planet is not what I expected, R2...</h2><h2>Too many bugs.</h2><img alt="starwars" src="http://i.imgur.com/KOCVarT.gif"/></div>';
        $this->test->apply();
    }
}
