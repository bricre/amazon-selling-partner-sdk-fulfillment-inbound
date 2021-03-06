<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Indicates the status of the inbound shipment. When used with the
 * createInboundShipment operation, WORKING is the only valid value. When used with
 * the updateInboundShipment operation, possible values are WORKING, SHIPPED or
 * CANCELLED.
 */
class ShipmentStatus extends AbstractModel
{
    protected $isRawObject = true;
}
