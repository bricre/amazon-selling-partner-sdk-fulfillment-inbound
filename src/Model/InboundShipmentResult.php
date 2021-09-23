<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class InboundShipmentResult extends AbstractModel
{
    /**
     * The shipment identifier submitted in the request.
     *
     * @var string
     */
    public $ShipmentId = null;
}
