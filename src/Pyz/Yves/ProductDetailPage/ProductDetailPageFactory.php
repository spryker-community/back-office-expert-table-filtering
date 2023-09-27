<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ProductDetailPage;

use SprykerShop\Yves\ProductDetailPage\Dependency\Client\ProductDetailPageToProductStorageClientInterface;
use SprykerShop\Yves\ProductDetailPage\ProductDetailPageFactory as SprykerProductDetailPageFactory;

class ProductDetailPageFactory extends SprykerProductDetailPageFactory
{
    /**
     * @return \Spryker\Client\ProductStorage\ProductStorageClientInterface
     */
    public function getProductStorageClient(): ProductDetailPageToProductStorageClientInterface
    {
        return $this->getProvidedDependency(ProductDetailPageDependencyProvider::CLIENT_PRODUCT_STORAGE_PYZ);
    }
}
