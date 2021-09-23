<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetShipmentsResult extends AbstractModel
{
    /**
     * Information about your inbound shipments.
     *
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentList
     */
    public $ShipmentData = null;

    /**
     * When present and not empty, pass this string token in the next request to return
     * the next response page.
     *
     * @var string
     */
    public $NextToken = null;
}
