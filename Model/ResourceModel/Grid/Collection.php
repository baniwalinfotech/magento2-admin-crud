<?php

namespace Baniwal\Recipes\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Baniwal\Recipes\Model\Grid',
            'Baniwal\Recipes\Model\ResourceModel\Grid'
        );
    }
}
