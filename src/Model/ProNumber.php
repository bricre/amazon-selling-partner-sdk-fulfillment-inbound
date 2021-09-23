<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The PRO number ("progressive number" or "progressive ID") assigned to the
 * shipment by the carrier.
 */
class ProNumber extends AbstractModel
{
    protected $isRawObject = true;
}
