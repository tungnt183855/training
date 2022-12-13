<?php

namespace Magenest\CustomLog\Controller\Blog;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Psr\Log\LoggerInterface;

class Index extends Action
{
    /**
     * Index action
     *
     * @return $this
     */

    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context      $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        $this->logger->debug('log message 1');
        $this->logger->info('log message 2');

        return $resultPage;
    }
}
