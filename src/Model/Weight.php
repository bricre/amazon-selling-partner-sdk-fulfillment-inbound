<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The weight of the package.
 */
class Weight extends AbstractModel
{
    /**
     * The weight value.
     *
     * @var \Amz\FulfillmentInbound\Model\BigDecimalType
     */
    public $Value = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\UnitOfWeight
     */
    public $Unit = null;
}
