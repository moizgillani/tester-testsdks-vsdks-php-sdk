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
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\SecurityResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\SecuritySubscriptionRequest;
use VerizonLib\Models\SecuritySubscriptionResult;
use VerizonLib\Server;

class AccountSubscriptionsController extends BaseController
{
    /**
     * Retrieves the total number of SIM-Secure for IoT subscription licenses purchased for your account by
     * license type, and lists the number of licenses assigned and available for each license type.
     *
     * @param SecuritySubscriptionRequest $body Request for account subscription.
     * @param string|null $xRequestID Transaction Id.
     *
     * @return ApiResponse Response from the API call
     */
    public function listAccountSubscriptions(
        SecuritySubscriptionRequest $body,
        ?string $xRequestID = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/accounts/subscriptions/actions/list')
            ->server(Server::M2M)
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                HeaderParam::init('X-Request-ID', $xRequestID)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request.', SecurityResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized request.', SecurityResultException::class))
            ->throwErrorOn('403', ErrorType::init('Request forbidden.', SecurityResultException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found / Does not exist.', SecurityResultException::class))
            ->throwErrorOn(
                '406',
                ErrorType::init('Format / Request Unacceptable.', SecurityResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests.', SecurityResultException::class))
            ->throwErrorOn('0', ErrorType::init('Error response.', SecurityResultException::class))
            ->type(SecuritySubscriptionResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
