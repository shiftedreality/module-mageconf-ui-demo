<?php namespace ShiftedReality\MageConfDemo\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Item
 * @package ShiftedReality\MageConfDemo\Model
 */
class Item extends AbstractModel
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(\ShiftedReality\MageConfDemo\Model\ResourceModel\Item::class);
    }
}
