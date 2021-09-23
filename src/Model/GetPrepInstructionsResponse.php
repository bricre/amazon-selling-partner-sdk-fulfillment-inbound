<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getPrepInstructions operation.
 */
class GetPrepInstructionsResponse extends AbstractModel
{
    /**
     * The payload for the getPrepInstructions operation.
     *
     * @var \Amz\FulfillmentInbound\Model\GetPrepInstructionsResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
