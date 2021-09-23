<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about the seller's inbound shipments. Returned by the
 * listInboundShipments operation.
 */
class InboundShipmentInfo extends AbstractModel
{
    /**
     * The shipment identifier submitted in the request.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * The name for the inbound shipment.
     *
     * @var string
     */
    public $ShipmentName = null;

    /**
     * The return address.
     *
     * @var \Amz\FulfillmentInbound\Model\Address
     */
    public $ShipFromAddress = null;

    /**
     * An Amazon fulfillment center identifier created by Amazon.
     *
     * @var string
     */
    public $DestinationFulfillmentCenterId = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ShipmentStatus
     */
    public $ShipmentStatus = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\LabelPrepType
     */
    public $LabelPrepType = null;

    /**
     * Indicates whether or not an inbound shipment contains case-packed boxes. When
     * AreCasesRequired = true for an inbound shipment, all items in the inbound
     * shipment must be case packed.
     *
     * @var bool
     */
    public $AreCasesRequired = null;

    /**
     * Date by which the shipment must arrive at the Amazon fulfillment center to avoid
     * delivery promise breaks for pre-ordered items.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $ConfirmedNeedByDate = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\BoxContentsSource
     */
    public $BoxContentsSource = null;

    /**
     * An estimate of the manual processing fee charged by Amazon for boxes without box
     * content information. This is only returned when BoxContentsSource is NONE.
     *
     * @var \Amz\FulfillmentInbound\Model\BoxContentsFeeDetails
     */
    public $EstimatedBoxContentsFee = null;
}
