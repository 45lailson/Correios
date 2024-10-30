<?php

namespace Lailson\Correios\Controller\Search;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

class Quotation implements HttpPostActionInterface
{
    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        var_dump("entrei na rota HttpPostActionInterface");die();
    }
}
