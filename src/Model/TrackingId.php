<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The tracking number of the package, provided by the carrier.
 */
class TrackingId extends AbstractModel
{
    protected $isRawObject = true;
}
