<?php

namespace AlexDidkovskiy\Twitter\Model\Config\Source;

class TypeOfFeed implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'latest-tweets', 'label' => __('Latest Tweets')],
            ['value' => 'mentions-tweets', 'label' => __('Mentioned Tweets')],
            ['value' => 'search-tweets', 'label' => __('Search Tweets')]
        ];
    }
}
