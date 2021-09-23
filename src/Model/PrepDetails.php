<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Preparation instructions and who is responsible for the preparation.
 */
class PrepDetails extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\PrepInstruction
     */
    public $PrepInstruction = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PrepOwner
     */
    public $PrepOwner = null;
}
