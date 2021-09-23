<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetTransportDetailsResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\TransportContent
     */
    public $TransportContent = null;
}
