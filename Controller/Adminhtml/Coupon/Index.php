<?php

namespace Trenzalore\Ofex\Controller\Adminhtml\Coupon;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ) {
        parent::__construct($context);
        $this->_pageFactory = $pageFactory;
    }

    /**
     * Index action
     *
     * @return Page
     */
    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        // $resultPage->setActiveMenu('Trenzalore_Ofex::coupon');
        $resultPage->getConfig()->getTitle()->prepend(__('açsldkjfaçsdlkjf '));
        return $resultPage;
    }

    /**
     * Is the user allowed to view the page.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Trenzalore_Ofex::coupon');
    }
}
