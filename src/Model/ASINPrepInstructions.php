<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item preparation instructions to help with item sourcing decisions.
 */
class ASINPrepInstructions extends AbstractModel
{
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
}
