<?php
/**
 * Created by PhpStorm
 * Project: LastraLab
 * User: taniamolina
 * Date: 5/15/21
 * @codingStandardsIgnoreFile
 */

namespace Lastra\Testing\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
/** Your sources to debug */

use Magento\Sales\Model\Order;
use _____ as Test;
use ______ as Repository;

class Debugger implements ArgumentInterface
{
    private $test;
    private $repository;

    /**
     * Debugger constructor.
     * @param Test $test
     * @param Repository $repository
     */
    public function __construct(Test $test, Repository $repository)
    {
        $this->repository = $repository;
        $this->test = $test;
    }

    public function startDebugging()
    {
        /** @var Order $object */
        $object = $this->repository->getByIncrementId('');
        $success = 0;
        $html = [
            'Order #' => $object->getIncrementId(),
            'Old Email sent' => $object->getEmailSent()
        ];
        try {
            $this->test->changeOrderStatus($object, []);
            $html = array_merge($html, ['Testing...' => '']);
            foreach ($object->getAllItems() as $item) {
                if (empty($item->getErrors())) {
                    $success = 1;
                    break;
                }
            }
        } catch (AlreadyUpdatedException $e) {
            $html = array_merge($html, ['Already Updated' => $e->getMessage()]);
        }
        $html = array_merge($html, [
            'Status' => $object->getData('status'),
            'New Email sent' => $object->getEmailSent(),
            'Success' => $success
        ]);
        return $html;
    }
}
