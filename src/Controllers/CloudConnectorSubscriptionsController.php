<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\CreateSubscriptionRequest;
use VerizonLib\Models\DeleteSubscriptionRequest;
use VerizonLib\Models\QuerySubscriptionRequest;
use VerizonLib\Models\Subscription;
use VerizonLib\Server;

class CloudConnectorSubscriptionsController extends BaseController
{
    /**
     * Create a subscription to define a streaming channel that sends data from devices in the account to
     * an endpoint defined in a target resource.
     *
     * @param CreateSubscriptionRequest $body The request body provides the details of the
     *        subscription that you want to create.
     *
     * @return ApiResponse Response from the API call
     */
    public function createSubscription(CreateSubscriptionRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions')
            ->server(Server::CLOUD_CONNECTOR)
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(Subscription::class)->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Search for subscriptions by property values. Returns an array of all matching subscription resources.
     *
     * @param QuerySubscriptionRequest $body The request body specifies fields and values to match.
     *
     * @return ApiResponse Response from the API call
     */
    public function querySubscription(QuerySubscriptionRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/actions/query')
            ->server(Server::CLOUD_CONNECTOR)
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(Subscription::class, 1)->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Remove a subscription from a ThingSpace account.
     *
     * @param DeleteSubscriptionRequest $body The request body identifies the subscription to
     *        delete.
     *
     * @return ApiResponse Response from the API call
     */
    public function deleteSubscription(DeleteSubscriptionRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/actions/delete')
            ->server(Server::CLOUD_CONNECTOR)
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
