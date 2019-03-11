<?php
/**
 * @category   Bsc
 * @package    Bsc_DrugTest
 * @author     web@bodyscience.com.au
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bsc\DrugTest\Model\ResourceModel\DrugTest;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'drugtest_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Bsc\DrugTest\Model\DrugTest',
            'Bsc\DrugTest\Model\ResourceModel\DrugTest'
        );
    }
}