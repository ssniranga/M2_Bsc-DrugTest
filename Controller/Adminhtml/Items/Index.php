<?php
/**
 * @category   Bsc
 * @package    Bsc_DrugTest
 * @author     web@bodyscience.com.au
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bsc\DrugTest\Controller\Adminhtml\Items;

class Index extends \Bsc\DrugTest\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Bsc_DrugTest::test');
        $resultPage->getConfig()->getTitle()->prepend(__('Drug Test Items'));
        $resultPage->addBreadcrumb(__('Drug Test'), __('Drug Test'));
        $resultPage->addBreadcrumb(__('Drug Test Items'), __('Drug Test Items'));
        return $resultPage;
    }
}