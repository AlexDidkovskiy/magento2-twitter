<?php

namespace AlexDidkovskiy\Twitter\Block\Widget;

class Tweets extends \AlexDidkovskiy\Twitter\Block\Tweets implements \Magento\Widget\Block\BlockInterface
{
    /**
     * @var string
     */
    protected $_template = 'widget/tweets.phtml';

    /**
     * Number of tweets to show
     * @return integer
     */
    private function getNumberOfTweets()
    {
        return $this->getData('number_of_tweets');
    }

    /**
     * Search query
     * @return string
     */
    private function getSearchQuery()
    {
        $search_query = $this->getData('search_query');

        if($search_query) {
            return $search_query;
        } else {
            return $this->_helper->getSearchQuery();
        }
    }

    /**
     * Title
     * @return string
     */
    public function getTitle()
    {
        $title = $this->getData('title');

        if($title) {
            return $title;
        }

        return false;
    }

    /**
     * Type of feed to show
     * @return string
     */
    private function getTypeOfFeed()
    {
        return $this->getData('type_of_feed');
    }

    /**
     * Get tweets depending what the feed type is
     * @return string
     */
    public function getTweets()
    {
        $type_of_feed = $this->getTypeOfFeed();
        $query        = $this->getSearchQuery();
        $count        = $this->getNumberOfTweets();

        if($type_of_feed == 'mentions-tweets') {
            return $this->_helper->getMentionsTweets($count);
        } elseif($type_of_feed == 'search-tweets') {
            return $this->_helper->getSearchTweets($count, $query);
        }

        return $this->_helper->getLatestTweets($count);
    }

    /**
     * Render block html
     * @return string
     */
    protected function _toHtml()
    {
        $this->setTemplate($this->_template);
        return parent::_toHtml();
    }
}
