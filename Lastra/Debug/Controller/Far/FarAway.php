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

/**
 * Enter navigation mode and destination course:
 */
use Vendor\Module\Path\to\Test\File as Test;

/**
 * In a galaxy, far far away...
 */
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
     * The Empire has called a public method to wipe out the
     * Resistance. Meanwhile, explorer ships have been deployed
     * to the Death Star and remain incommunicated...
     */
    public function execute()
    {
        echo '<div style="text-align:center"><br /><br /><h2>This planet is not what I expected, R2...</h2><h2>Too many bugs.</h2><img alt="starwars" src="http://i.imgur.com/KOCVarT.gif"/></div>';

        /**
         * The Empire has detected two droids in
         * http://localhost/in_a_galaxy/far/faraway
         */
        $this->test->publicmethodtotest();
    }
}
