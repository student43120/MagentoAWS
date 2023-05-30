<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);
namespace Magento\PaymentServicesPaypal\Block;

use Magento\Checkout\Model\Session;
use Magento\Framework\View\Element\Template\Context;
use Magento\PaymentServicesPaypal\Model\Config;
use Magento\Catalog\Block\ShortcutInterface;
use Magento\Framework\View\Element\Template;

/**
 * @api
 */
class SmartButtons extends Template implements ShortcutInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var array
     */
    private $componentConfig;

    /**
     * @var string
     */
    private $pageType;

    /**
     * @var Session
     */
    private $session;

    /**
     * @param Context $context
     * @param Config $config
     * @param Session $session
     * @param string $pageType
     * @param array $componentConfig
     * @param array $data
     */
    public function __construct(
        Context $context,
        Config $config,
        Session $session,
        string $pageType = 'minicart',
        array $componentConfig = [],
        array $data = []
    ) {
        $this->config = $config;
        $this->componentConfig = $componentConfig;
        $this->pageType = $pageType;
        $this->session = $session;
        parent::__construct(
            $context,
            $data
        );
        $this->setTemplate($data['template'] ?? $componentConfig[$this->pageType]['template']);
    }

    /**
     * Get payment method alias
     *
     * @return string
     */
    public function getAlias() : string
    {
        return 'magpaypayments_smart_buttons';
    }

    /**
     * Get component params of payment methods
     *
     * @return array[]
     */
    public function getComponentParams() : array
    {
        return [
            'createOrderUrl' => $this->getUrl('paymentservicespaypal/smartbuttons/createpaypalorder'),
            'authorizeOrderUrl' => $this->getUrl('paymentservicespaypal/smartbuttons/updatequote'),
            'orderReviewUrl' => $this->getUrl('paymentservicespaypal/smartbuttons/review'),
            'cancelUrl' => $this->getUrl('checkout/cart'),
            'styles' => $this->getStyles(),
            'isVirtual' => $this->session->getQuote()->isVirtual()
        ];
    }

    /**
     * Check if smart buttons enabled.
     *
     * @return bool
     */
    public function isEnabled() : bool
    {
        return $this->config->isEnabled();
    }

    /**
     * Check if smart buttons for a particular location (e.g., minicart) is enabled
     *
     * @param string $location
     * @return bool
     */
    public function isLocationEnabled(string $location): bool
    {
        return $this->config->isLocationEnabled($location);
    }

    /**
     * Get styles of Smart Buttons
     *
     * @return array
     */
    private function getStyles() : array
    {
        return $this->config->getButtonConfiguration();
    }
}
