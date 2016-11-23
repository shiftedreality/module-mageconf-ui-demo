<?php namespace ShiftedReality\MageConfDemo\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Item
 * @package ShiftedReality\MageConfDemo\Model\ResourceModel
 */
class Item extends AbstractDb
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('demo_item', 'item_id');
    }
}
