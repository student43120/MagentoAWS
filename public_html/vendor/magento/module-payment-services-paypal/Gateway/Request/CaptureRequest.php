<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\PaymentServicesPaypal\Gateway\Request;

use Magento\PaymentServicesPaypal\Model\Config;
use Magento\Payment\Gateway\Data\PaymentDataObjectInterface;
use Magento\Payment\Gateway\Helper\SubjectReader;
use Magento\Payment\Gateway\Request\BuilderInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Exception\NoSuchEntityException;

class CaptureRequest implements BuilderInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @param Config $config
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Config $config,
        StoreManagerInterface $storeManager
    ) {
        $this->config = $config;
        $this->storeManager = $storeManager;
    }

    /**
     * Build the capture request which will be sent to payment gateway
     *
     * @param array $buildSubject
     * @return array
     * @throws NoSuchEntityException
     */
    public function build(array $buildSubject)
    {
        /** @var PaymentDataObjectInterface $paymentDO */
        $paymentDO = SubjectReader::readPayment($buildSubject);

        /** @var $payment \Magento\Sales\Model\Order\Payment */
        $payment = $paymentDO->getPayment();

        $uri = '/payments/'
            . $this->config->getMerchantId()
            . '/payment/'
            . $payment->getAuthorizationTransaction()->getTxnId()
            . '/capture';
        $websiteId = $this->storeManager->getStore($payment->getOrder()->getStoreId())->getWebsiteId();

        return [
            'uri' => $uri,
            'method' => \Magento\Framework\App\Request\Http::METHOD_POST,
            'body' => [
                'capture-request' => [
                    'amount' => [
                        'currency_code' => $payment->getOrder()->getBaseCurrencyCode(),
                        'value' => number_format((float)SubjectReader::readAmount($buildSubject), 2, '.', '')
                    ]
                ]
            ],
            'headers' => [
                'Content-Type' => 'application/json',
                'x-scope-id' => $websiteId
            ]
        ];
    }
}
