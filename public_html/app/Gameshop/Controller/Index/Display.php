<?php
namespace Gameshop\Controller\index;
use Magento\Framework\App\ActionInterface;
class Display implements ActionInterface {

    protected $pageFactory;
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ){
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
//        echo "Hi";
//        die();
        return $this->pageFactory->create();
    }
}

?>
