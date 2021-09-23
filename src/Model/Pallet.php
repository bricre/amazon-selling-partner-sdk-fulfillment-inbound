<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Pallet information.
 */
class Pallet extends AbstractModel
{
    /**
     * The dimensions of the pallet. Length and width must be 40 inches by 48 inches.
     * Height must be less than or equal to 60 inches.
     *
     * @var \Amz\FulfillmentInbound\Model\Dimensions
     */
    public $Dimensions = null;

    /**
     * The weight of the pallet.
     *
     * @var \Amz\FulfillmentInbound\Model\Weight
     */
    public $Weight = null;

    /**
     * Indicates whether pallets will be stacked when carrier arrives for pick-up.
     *
     * @var bool
     */
    public $IsStacked = null;
}
