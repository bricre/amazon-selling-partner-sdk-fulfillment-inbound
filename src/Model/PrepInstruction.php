<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Preparation instructions for shipping an item to Amazon's fulfillment network.
 * For more information about preparing items for shipment to Amazon's fulfillment
 * network, see the Seller Central Help for your marketplace.
 */
class PrepInstruction extends AbstractModel
{
    protected $isRawObject = true;
}
