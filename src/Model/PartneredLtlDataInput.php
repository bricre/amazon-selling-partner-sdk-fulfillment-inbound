<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information that is required by an Amazon-partnered carrier to ship a Less Than
 * Truckload/Full Truckload (LTL/FTL) inbound shipment.
 */
class PartneredLtlDataInput extends AbstractModel
{
    /**
     * Contact information for the person in the seller's organization who is
     * responsible for the shipment. Used by the carrier if they have questions about
     * the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Contact
     */
    public $Contact = null;

    /**
     * The number of boxes in the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\UnsignedIntType
     */
    public $BoxCount = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\SellerFreightClass
     */
    public $SellerFreightClass = null;

    /**
     * The date that the shipment will be ready to be picked up by the carrier.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $FreightReadyDate = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PalletList
     */
    public $PalletList = null;

    /**
     * The total weight of the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Weight
     */
    public $TotalWeight = null;

    /**
     * The declaration of the total value of the inventory in the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Amount
     */
    public $SellerDeclaredValue = null;
}
