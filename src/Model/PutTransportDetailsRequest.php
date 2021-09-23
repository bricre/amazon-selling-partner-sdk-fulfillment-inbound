<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for a putTransportDetails operation.
 */
class PutTransportDetailsRequest extends AbstractModel
{
    /**
     * Indicates whether a putTransportDetails request is for an Amazon-partnered
     * carrier.
     *
     * @var bool
     */
    public $IsPartnered = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ShipmentType
     */
    public $ShipmentType = null;

    /**
     * Information required to create an Amazon-partnered carrier shipping estimate, or
     * to alert the Amazon fulfillment center to the arrival of an inbound shipment by
     * a non-Amazon-partnered carrier.
     *
     * @var \Amz\FulfillmentInbound\Model\TransportDetailInput
     */
    public $TransportDetails = null;
}
