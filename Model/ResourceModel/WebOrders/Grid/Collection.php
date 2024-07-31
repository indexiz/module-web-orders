<?php

namespace Indexiz\WebOrders\Model\ResourceModel\WebOrders\Grid;

use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

/**
 * Class Collection
 * @package Indexiz\WebOrders\Model\ResourceModel\WebOrders\Grid
 */
class Collection extends SearchResult
{
    /**
     * @return $this|Collection|void
     */
    protected function _initSelect()
    {
        parent::_initSelect();

//        $this->addFieldToSelect('*')
//            ->addFieldToFilter(
//                'shipping_method',
//                ['neq' => 'm2eproshipping_m2eproshipping']
//            )
//            ->getSelect()
//            ->join(
//                ['sales_order' => 'sales_order'],
//                'main_table.entity_id = sales_order.entity_id',
//                [
//                    'shipping_method' => 'sales_order.shipping_method',
//                ]
//            );

        $this->addFieldToSelect('*')
            ->addFieldToFilter(
                'shipping_information',
                ['nlike' => '%Amazon Shipping%']
            )
            ->addFieldToFilter(
                'shipping_information',
                ['nlike' => '%Walmart Shipping%']
            )
            ->addFieldToFilter(
                'shipping_information',
                ['nlike' => '%eBay Shipping%']
            )
            ->getSelect();

        return $this;
    }
}
