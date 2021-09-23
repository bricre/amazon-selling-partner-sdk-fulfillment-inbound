<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class InvalidSKU extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * The reason why the seller SKU is invalid.
     *
     * @var \Amz\FulfillmentInbound\Model\ErrorReason
     */
    public $ErrorReason = null;
}
