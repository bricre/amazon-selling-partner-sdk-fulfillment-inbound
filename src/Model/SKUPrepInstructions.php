<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Labeling requirements and item preparation instructions to help you prepare
 * items for shipment to Amazon's fulfillment network.
 */
class SKUPrepInstructions extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\BarcodeInstruction
     */
    public $BarcodeInstruction = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PrepGuidance
     */
    public $PrepGuidance = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PrepInstructionList
     */
    public $PrepInstructionList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\AmazonPrepFeesDetailsList
     */
    public $AmazonPrepFeesDetailsList = null;
}
