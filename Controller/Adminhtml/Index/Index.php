<?php namespace ShiftedReality\MageConfDemo\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package ShiftedReality\MageConfDemo\Controller\Adminhtml\Index
 */
class Index extends Action
{
    /**
     * Renders page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('UI Components Demo'));

        return $resultPage;
    }
}
