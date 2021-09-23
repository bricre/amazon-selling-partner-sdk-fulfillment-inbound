<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The freight class of the shipment. For information about determining the freight
 * class, contact the carrier.
 */
class SellerFreightClass extends AbstractModel
{
    protected $isRawObject = true;
}
