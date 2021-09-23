<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The monetary value.
 */
class Amount extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\CurrencyCode
     */
    public $CurrencyCode = null;

    /**
     * The amount.
     *
     * @var \Amz\FulfillmentInbound\Model\BigDecimalType
     */
    public $Value = null;
}
