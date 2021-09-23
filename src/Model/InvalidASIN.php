<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class InvalidASIN extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * The reason that the ASIN is invalid.
     *
     * @var \Amz\FulfillmentInbound\Model\ErrorReason
     */
    public $ErrorReason = null;
}
