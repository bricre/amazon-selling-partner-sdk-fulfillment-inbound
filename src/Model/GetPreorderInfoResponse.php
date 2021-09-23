<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getPreorderInfo operation.
 */
class GetPreorderInfoResponse extends AbstractModel
{
    /**
     * The payload for the getPreorderInfo operation.
     *
     * @var \Amz\FulfillmentInbound\Model\GetPreorderInfoResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the operation.
     *
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
