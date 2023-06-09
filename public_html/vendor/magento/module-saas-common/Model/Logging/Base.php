<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\SaaSCommon\Model\Logging;

use Monolog\Logger;

/**
 * Log error message for error log level Logger::INFO and higher
 */
class Base extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/saas-export.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::INFO;
}
