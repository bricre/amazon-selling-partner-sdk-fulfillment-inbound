<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetShipmentItemsResult extends AbstractModel
{
    /**
     * A list of item information for an inbound shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentItemList
     */
    public $ItemData = null;

    /**
     * When present and not empty, pass this string token in the next request to return
     * the next response page.
     *
     * @var string
     */
    public $NextToken = null;
}
