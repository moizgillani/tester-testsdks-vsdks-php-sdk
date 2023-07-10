<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\ConnectivityManagementResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\AsynchronousRequestResult;
use VerizonLib\Server;

class AccountRequestsController extends BaseController
{
    /**
     * Returns the current status of an asynchronous request that was made for a single device.
     *
     * @param string $aname Account name.
     * @param string $requestId UUID from synchronous response.
     *
     * @return ApiResponse Response from the API call
     */
    public function getCurrentAsynchronousRequestStatus(string $aname, string $requestId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/v1/accounts/{aname}/requests/{requestId}/status'
        )
            ->server(Server::M2M)
            ->auth('global')
            ->parameters(TemplateParam::init('aname', $aname), TemplateParam::init('requestId', $requestId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(AsynchronousRequestResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
