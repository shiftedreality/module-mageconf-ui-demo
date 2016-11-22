<?php

namespace ShiftedReality\MageConfDemo\Ui;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider;
use Magento\Ui\Component\Form\Element\Checkbox;
use Magento\Ui\Component\Form\Element\DataType\Boolean;
use Magento\Ui\Component\Form\Element\DataType\Text;
use Magento\Ui\Component\Form\Element\Wysiwyg;
use Magento\Ui\Component\Form\Field;

class DemoDataProvider extends DataProvider
{
    /**
     * @inheritdoc
     */
    public function getMeta()
    {
        $meta = parent::getMeta();

        $meta['general']['children']['dynamic']['arguments']['data']['config'] = [
            'dataType' => Boolean::NAME,
            'formElement' => Checkbox::NAME,
            'notice' => __('This is dynamic element added from backend'),
            'label' => __('Sample Checkbox'),
            'code' => 'checkbox',
            'source' => 'general',
            'sortOrder' => 40,
            'componentType' => Field::NAME,
            'prefer' => 'toggle',
            'valueMap' => [
                'true' => '1',
                'false' => '0',
            ],
        ];

        return $meta;
    }
}
