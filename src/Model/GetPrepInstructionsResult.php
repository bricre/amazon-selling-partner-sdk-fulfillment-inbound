<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetPrepInstructionsResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\SKUPrepInstructionsList
     */
    public $SKUPrepInstructionsList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\InvalidSKUList
     */
    public $InvalidSKUList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ASINPrepInstructionsList
     */
    public $ASINPrepInstructionsList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\InvalidASINList
     */
    public $InvalidASINList = null;
}
