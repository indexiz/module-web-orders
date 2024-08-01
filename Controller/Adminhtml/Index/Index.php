<?php

namespace Indexiz\WebOrders\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

/**
 * Class Index
 * @package Indexiz\WebOrders\Controller\Adminhtml\Index
 */
class Index extends Action
{
    /**
     * @var bool|PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $this->_setActiveMenu('Indexiz_Base::indexiz');
        $resultPage->getConfig()->getTitle()->prepend((__('Web Orders')));
        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Indexiz_WebOrders::weborders');
    }
}
