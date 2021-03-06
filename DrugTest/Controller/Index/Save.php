<?php
/**
 * @category   Bsc
 * @package    Bsc_DrugTest
 * @author     web@bodyscience.com.au
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bsc\DrugTest\Controller\Index;

use Magento\Framework\App\Action\Context;
use Bsc\DrugTest\Model\DrugTestFactory;

class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var DrugTest
     */
    protected $_drugtest;

    public function __construct(
		Context $context,
        DrugTestFactory $drugtest
    ) {
        $this->_drugtest = $drugtest;
        parent::__construct($context);
    }
	public function execute()
    {
        $data = $this->getRequest()->getParams();
    	$drugtest = $this->_drugtest->create();
        $drugtest->setData($data);
        if($drugtest->save()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('drugtest/index/index');
        return $resultRedirect;
    }
}
