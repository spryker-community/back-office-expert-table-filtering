<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductSetPageSearch;

use Pyz\Zed\Synchronization\SynchronizationConfig;
use Spryker\Zed\ProductSetPageSearch\ProductSetPageSearchConfig as AbstractProductSetPageSearchConfig;

class ProductSetPageSearchConfig extends AbstractProductSetPageSearchConfig
{
    /**
     * @return null|string
     */
    public function getProductSetSynchronizationPoolName(): string
    {
        return SynchronizationConfig::DEFAULT_SYNCHRONIZATION_POOL_NAME;
    }
}
