<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipping identifier, information about whether the shipment is by an
 * Amazon-partnered carrier, and information about whether the shipment is Small
 * Parcel or Less Than Truckload/Full Truckload (LTL/FTL).
 */
class TransportHeader extends AbstractModel
{
    /**
     * The Amazon seller identifier.
     *
     * @var string
     */
    public $SellerId = null;

    /**
     * A shipment identifier originally returned by the createInboundShipmentPlan
     * operation.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * Indicates whether a putTransportDetails request is for a partnered carrier.
     *
     * Possible values:
     *
     * * true – Request is for an Amazon-partnered carrier.
     *
     * * false – Request is for a non-Amazon-partnered carrier.
     *
     * @var bool
     */
    public $IsPartnered = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ShipmentType
     */
    public $ShipmentType = null;
}
