<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getLabels operation.
 */
class GetLabelsResponse extends AbstractModel
{
    /**
     * The payload for the getLabels operation.
     *
     * @var \Amz\FulfillmentInbound\Model\LabelDownloadURL
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
