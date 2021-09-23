<?php

namespace Amz\FulfillmentInbound\Api;

use Amz\FulfillmentInbound\Model\ConfirmPreorderResponse as ConfirmPreorderResponse;
use Amz\FulfillmentInbound\Model\ConfirmTransportResponse as ConfirmTransportResponse;
use Amz\FulfillmentInbound\Model\CreateInboundShipmentPlanRequest as CreateInboundShipmentPlanRequest;
use Amz\FulfillmentInbound\Model\CreateInboundShipmentPlanResponse as CreateInboundShipmentPlanResponse;
use Amz\FulfillmentInbound\Model\EstimateTransportResponse as EstimateTransportResponse;
use Amz\FulfillmentInbound\Model\GetBillOfLadingResponse as GetBillOfLadingResponse;
use Amz\FulfillmentInbound\Model\GetInboundGuidanceResponse as GetInboundGuidanceResponse;
use Amz\FulfillmentInbound\Model\GetLabelsResponse as GetLabelsResponse;
use Amz\FulfillmentInbound\Model\GetPreorderInfoResponse as GetPreorderInfoResponse;
use Amz\FulfillmentInbound\Model\GetPrepInstructionsResponse as GetPrepInstructionsResponse;
use Amz\FulfillmentInbound\Model\GetShipmentItemsResponse as GetShipmentItemsResponse;
use Amz\FulfillmentInbound\Model\GetShipmentsResponse as GetShipmentsResponse;
use Amz\FulfillmentInbound\Model\GetTransportDetailsResponse as GetTransportDetailsResponse;
use Amz\FulfillmentInbound\Model\InboundShipmentRequest as InboundShipmentRequest;
use Amz\FulfillmentInbound\Model\InboundShipmentResponse as InboundShipmentResponse;
use Amz\FulfillmentInbound\Model\PutTransportDetailsRequest as PutTransportDetailsRequest;
use Amz\FulfillmentInbound\Model\PutTransportDetailsResponse as PutTransportDetailsResponse;
use Amz\FulfillmentInbound\Model\VoidTransportResponse as VoidTransportResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class FbaInbound extends AbstractAPI
{
    /**
     * Returns information that lets a seller know if Amazon recommends sending an item
     * to a given marketplace. In some cases, Amazon provides guidance for why a given
     * SellerSKU or ASIN is not recommended for shipment to Amazon's fulfillment
     * network. Sellers may still ship items that are not recommended, at their
     * discretion.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace where the
     *                       product would be stored.
     *                       'SellerSKUList'		A list of SellerSKU values. Used to identify items for which
     *                       you want inbound guidance for shipment to Amazon's fulfillment network. Note:
     *                       SellerSKU is qualified by the SellerId, which is included with every Selling
     *                       Partner API operation that you submit. If you specify a SellerSKU that
     *                       identifies a variation parent ASIN, this operation returns an error. A variation
     *                       parent ASIN represents a generic product that cannot be sold. Variation child
     *                       ASINs represent products that have specific characteristics (such as size and
     *                       color) and can be sold.
     *                       'ASINList'		A list of ASIN values. Used to identify items for which you want
     *                       inbound guidance for shipment to Amazon's fulfillment network. Note: If you
     *                       specify a ASIN that identifies a variation parent ASIN, this operation returns
     *                       an error. A variation parent ASIN represents a generic product that cannot be
     *                       sold. Variation child ASINs represent products that have specific
     *                       characteristics (such as size and color) and can be sold.
     *
     * @return GetInboundGuidanceResponse
     */
    public function getInboundGuidance(array $queries = []): GetInboundGuidanceResponse
    {
        return $this->client->request('getInboundGuidance', 'GET', 'fba/inbound/v0/itemsGuidance',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns one or more inbound shipment plans, which provide the information you
     * need to create one or more inbound shipments for a set of items that you
     * specify. Multiple inbound shipment plans might be required so that items can be
     * optimally placed in Amazon's fulfillment network—for example, positioning
     * inventory closer to the customer. Alternatively, two inbound shipment plans
     * might be created with the same Amazon fulfillment center destination if the two
     * shipment plans require different processing—for example, items that require
     * labels must be shipped separately from stickerless, commingled inventory.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateInboundShipmentPlanRequest $Model Returns one or more inbound
     *                                                shipment plans, which provide the information you need to create one or more
     *                                                inbound shipments for a set of items that you specify. Multiple inbound shipment
     *                                                plans might be required so that items can be optimally placed in Amazon's
     *                                                fulfillment network—for example, positioning inventory closer to the customer.
     *                                                Alternatively, two inbound shipment plans might be created with the same Amazon
     *                                                fulfillment center destination if the two shipment plans require different
     *                                                processing—for example, items that require labels must be shipped separately
     *                                                from stickerless, commingled inventory.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateInboundShipmentPlanResponse
     */
    public function createInboundShipmentPlan(CreateInboundShipmentPlanRequest $Model): CreateInboundShipmentPlanResponse
    {
        return $this->client->request('createInboundShipmentPlan', 'POST', 'fba/inbound/v0/plans',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Updates or removes items from the inbound shipment identified by the specified
     * shipment identifier. Adding new items is not supported.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     * @param InboundShipmentRequest $Model Updates or removes items from the inbound
     *                                      shipment identified by the specified shipment identifier. Adding new items is
     *                                      not supported.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return InboundShipmentResponse
     */
    public function updateInboundShipment($shipmentId, InboundShipmentRequest $Model): InboundShipmentResponse
    {
        return $this->client->request('updateInboundShipment', 'PUT', "fba/inbound/v0/shipments/{$shipmentId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns a new inbound shipment based on the specified shipmentId that was
     * returned by the createInboundShipmentPlan operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     * @param InboundShipmentRequest $Model Returns a new inbound shipment based on
     *                                      the specified shipmentId that was returned by the createInboundShipmentPlan
     *                                      operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return InboundShipmentResponse
     */
    public function createInboundShipment($shipmentId, InboundShipmentRequest $Model): InboundShipmentResponse
    {
        return $this->client->request('createInboundShipment', 'POST', "fba/inbound/v0/shipments/{$shipmentId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns pre-order information, including dates, that a seller needs before
     * confirming a shipment for pre-order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace the
     *                       shipment is tied to.
     *
     * @return GetPreorderInfoResponse
     */
    public function getPreorderInfo($shipmentId, array $queries = []): GetPreorderInfoResponse
    {
        return $this->client->request('getPreorderInfo', 'GET', "fba/inbound/v0/shipments/{$shipmentId}/preorder",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns information needed to confirm a shipment for pre-order. Call this
     * operation after calling the getPreorderInfo operation to get the NeedByDate
     * value and other pre-order information about the shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     * @param array $queries options:
     *                       'NeedByDate'		Date that the shipment must arrive at the Amazon fulfillment
     *                       center to avoid delivery promise breaks for pre-ordered items. Must be in
     *                       YYYY-MM-DD format. The response to the getPreorderInfo operation returns this
     *                       value.
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace the
     *                       shipment is tied to.
     *
     * @return ConfirmPreorderResponse
     */
    public function confirmPreorder($shipmentId, array $queries = []): ConfirmPreorderResponse
    {
        return $this->client->request('confirmPreorder', 'PUT', "fba/inbound/v0/shipments/{$shipmentId}/preorder/confirm",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns labeling requirements and item preparation instructions to help prepare
     * items for shipment to Amazon's fulfillment network.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'ShipToCountryCode'		The country code of the country to which the items will be
     *                       shipped. Note that labeling requirements and item preparation instructions can
     *                       vary by country.
     *                       'SellerSKUList'		A list of SellerSKU values. Used to identify items for which
     *                       you want labeling requirements and item preparation instructions for shipment to
     *                       Amazon's fulfillment network. The SellerSKU is qualified by the Seller ID, which
     *                       is included with every call to the Seller Partner API.
     *
     * Note: Include seller SKUs that you have used to list items on Amazon's retail
     * website. If you include a seller SKU that you have never used to list an item on
     * Amazon's retail website, the seller SKU is returned in the InvalidSKUList
     * property in the response.
     * 'ASINList'		A list of ASIN values. Used to identify items for which you want
     * item preparation instructions to help with item sourcing decisions.
     *
     * Note: ASINs must be included in the product catalog for at least one of the
     * marketplaces that the seller  participates in. Any ASIN that is not included in
     * the product catalog for at least one of the marketplaces that the seller
     * participates in is returned in the InvalidASINList property in the response. You
     * can find out which marketplaces a seller participates in by calling the
     * getMarketplaceParticipations operation in the Selling Partner API for Sellers.
     *
     * @return GetPrepInstructionsResponse
     */
    public function getPrepInstructions(array $queries = []): GetPrepInstructionsResponse
    {
        return $this->client->request('getPrepInstructions', 'GET', 'fba/inbound/v0/prepInstructions',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns current transportation information about an inbound shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     *
     * @return GetTransportDetailsResponse
     */
    public function getTransportDetails($shipmentId): GetTransportDetailsResponse
    {
        return $this->client->request('getTransportDetails', 'GET', "fba/inbound/v0/shipments/{$shipmentId}/transport",
            [
            ]
        );
    }

    /**
     * Sends transportation information to Amazon about an inbound shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     * @param PutTransportDetailsRequest $Model Sends transportation information to
     *                                          Amazon about an inbound shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return PutTransportDetailsResponse
     */
    public function putTransportDetails($shipmentId, PutTransportDetailsRequest $Model): PutTransportDetailsResponse
    {
        return $this->client->request('putTransportDetails', 'PUT', "fba/inbound/v0/shipments/{$shipmentId}/transport",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Cancels a previously-confirmed request to ship an inbound shipment using an
     * Amazon-partnered carrier.
     *
     * To be successful, you must call this operation before the VoidDeadline date that
     * is returned by the getTransportDetails operation.
     *
     * Important: The VoidDeadline date is 24 hours after you confirm a Small Parcel
     * shipment transportation request or one hour after you confirm a Less Than
     * Truckload/Full Truckload (LTL/FTL) shipment transportation request. After the
     * void deadline passes, your account will be charged for the shipping cost.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     *
     * @return VoidTransportResponse
     */
    public function voidTransport($shipmentId): VoidTransportResponse
    {
        return $this->client->request('voidTransport', 'POST', "fba/inbound/v0/shipments/{$shipmentId}/transport/void",
            [
            ]
        );
    }

    /**
     * Initiates the process of estimating the shipping cost for an inbound shipment by
     * an Amazon-partnered carrier.
     *
     * Prior to calling the estimateTransport operation, you must call the
     * putTransportDetails operation to provide Amazon with the transportation
     * information for the inbound shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     *
     * @return EstimateTransportResponse
     */
    public function estimateTransport($shipmentId): EstimateTransportResponse
    {
        return $this->client->request('estimateTransport', 'POST', "fba/inbound/v0/shipments/{$shipmentId}/transport/estimate",
            [
            ]
        );
    }

    /**
     * Confirms that the seller accepts the Amazon-partnered shipping estimate, agrees
     * to allow Amazon to charge their account for the shipping cost, and requests that
     * the Amazon-partnered carrier ship the inbound shipment.
     *
     * Prior to calling the confirmTransport operation, you should call the
     * getTransportDetails operation to get the Amazon-partnered shipping estimate.
     *
     * Important: After confirming the transportation request, if the seller decides
     * that they do not want the Amazon-partnered carrier to ship the inbound shipment,
     * you can call the voidTransport operation to cancel the transportation request.
     * Note that for a Small Parcel shipment, the seller has 24 hours after confirming
     * a transportation request to void the transportation request. For a Less Than
     * Truckload/Full Truckload (LTL/FTL) shipment, the seller has one hour after
     * confirming a transportation request to void it. After the grace period has
     * expired the seller's account will be charged for the shipping cost.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     *
     * @return ConfirmTransportResponse
     */
    public function confirmTransport($shipmentId): ConfirmTransportResponse
    {
        return $this->client->request('confirmTransport', 'POST', "fba/inbound/v0/shipments/{$shipmentId}/transport/confirm",
            [
            ]
        );
    }

    /**
     * Returns package/pallet labels for faster and more accurate shipment processing
     * at the Amazon fulfillment center.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     * @param array $queries options:
     *                       'NumberOfPackages'		The number of packages in the shipment.
     *                       'PackageLabelsToPrint'		A list of identifiers that specify packages for which
     *                       you want package labels printed.
     *
     * Must match CartonId values previously passed using the FBA Inbound Shipment
     * Carton Information Feed. If not, the operation returns the
     * IncorrectPackageIdentifier error code.
     * 'NumberOfPallets'		The number of pallets in the shipment. This returns four
     * identical labels for each pallet.
     * 'PageSize'		The page size for paginating through the total packages' labels.
     * This is a required parameter for Non-Partnered LTL Shipments. Max value:1000.
     * 'PageStartIndex'		The page start index for paginating through the total
     * packages' labels. This is a required parameter for Non-Partnered LTL Shipments.
     *
     * @return GetLabelsResponse
     */
    public function getLabels($shipmentId, array $queries = []): GetLabelsResponse
    {
        return $this->client->request('getLabels', 'GET', "fba/inbound/v0/shipments/{$shipmentId}/labels",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a bill of lading for a Less Than Truckload/Full Truckload (LTL/FTL)
     * shipment. The getBillOfLading operation returns PDF document data for printing a
     * bill of lading for an Amazon-partnered Less Than Truckload/Full Truckload
     * (LTL/FTL) inbound shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier originally returned by the
     * createInboundShipmentPlan operation
     *
     * @return GetBillOfLadingResponse
     */
    public function getBillOfLading($shipmentId): GetBillOfLadingResponse
    {
        return $this->client->request('getBillOfLading', 'GET', "fba/inbound/v0/shipments/{$shipmentId}/billOfLading",
            [
            ]
        );
    }

    /**
     * Returns a list of inbound shipments based on criteria that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'ShipmentStatusList'		A list of ShipmentStatus values. Used to select shipments
     *                       with a current status that matches the status values that you specify.
     *                       'ShipmentIdList'		A list of shipment IDs used to select the shipments that you
     *                       want. If both ShipmentStatusList and ShipmentIdList are specified, only
     *                       shipments that match both parameters are returned.
     *                       'LastUpdatedAfter'		A date used for selecting inbound shipments that were last
     *                       updated after (or at) a specified time. The selection includes updates made by
     *                       Amazon and by the seller.
     *                       'LastUpdatedBefore'		A date used for selecting inbound shipments that were last
     *                       updated before (or at) a specified time. The selection includes updates made by
     *                       Amazon and by the seller.
     *                       'NextToken'		A string token returned in the response to your previous request.
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace where the
     *                       product would be stored.
     *
     * @return GetShipmentsResponse
     */
    public function getShipments(array $queries = []): GetShipmentsResponse
    {
        return $this->client->request('getShipments', 'GET', 'fba/inbound/v0/shipments',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a list of items in a specified inbound shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId A shipment identifier used for selecting items in a specific
     * inbound shipment
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace where the
     *                       product would be stored.
     *
     * @return GetShipmentItemsResponse
     */
    public function getShipmentItemsByShipmentId($shipmentId, array $queries = []): GetShipmentItemsResponse
    {
        return $this->client->request('getShipmentItemsByShipmentId', 'GET', "fba/inbound/v0/shipments/{$shipmentId}/items",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a list of items in a specified inbound shipment, or a list of items that
     * were updated within a specified time frame.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'LastUpdatedAfter'		A date used for selecting inbound shipment items that were
     *                       last updated after (or at) a specified time. The selection includes updates made
     *                       by Amazon and by the seller.
     *                       'LastUpdatedBefore'		A date used for selecting inbound shipment items that were
     *                       last updated before (or at) a specified time. The selection includes updates
     *                       made by Amazon and by the seller.
     *                       'NextToken'		A string token returned in the response to your previous request.
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace where the
     *                       product would be stored.
     *
     * @return GetShipmentItemsResponse
     */
    public function getShipmentItems(array $queries = []): GetShipmentItemsResponse
    {
        return $this->client->request('getShipmentItems', 'GET', 'fba/inbound/v0/shipmentItems',
            [
                'query' => $queries,
            ]
        );
    }
}
