<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ShiftedReality\MageConfDemo\Model;

use Magento\Framework\Model\AbstractModel;

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
