<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class LabelDownloadURL extends AbstractModel
{
    /**
     * URL to download the label for the package. Note: The URL will only be valid for
     * 15 seconds.
     *
     * @var string
     */
    public $DownloadURL = null;
}
