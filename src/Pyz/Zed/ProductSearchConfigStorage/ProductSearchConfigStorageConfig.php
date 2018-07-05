<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductSearchConfigStorage;

use Pyz\Zed\Synchronization\SynchronizationConfig;
use Spryker\Zed\ProductSearchConfigStorage\ProductSearchConfigStorageConfig as AbstractProductSearchConfigStorageConfig;

class ProductSearchConfigStorageConfig extends AbstractProductSearchConfigStorageConfig
{
    /**
     * @return null|string
     */
    public function getProductSearchConfigSynchronizationPoolName(): string
    {
        return SynchronizationConfig::DEFAULT_SYNCHRONIZATION_POOL_NAME;
    }
}
