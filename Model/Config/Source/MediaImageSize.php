<?php

namespace AlexDidkovskiy\Twitter\Model\Config\Source;

class MediaImageSize implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'thumb', 'label' => __('Thumbnail')],
            ['value' => 'small', 'label' => __('Small')],
            ['value' => 'medium', 'label' => __('Medium')],
            ['value' => 'large', 'label' => __('Large')]
        ];
    }
}
