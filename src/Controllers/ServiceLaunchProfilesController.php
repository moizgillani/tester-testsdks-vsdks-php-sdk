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
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\EdgeServiceLaunchResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\CreateServiceProfileRequest;
use VerizonLib\Models\ServicesProfileRegistration;
use VerizonLib\Models\ServicesProfileRegistrationResult;
use VerizonLib\Server;

class ServiceLaunchProfilesController extends BaseController
{
    /**
     * Creates a service profile that describes the resource requirements of a service.
     *
     * @param string $accountName User account name.
     * @param CreateServiceProfileRequest $body Request for creation of a service profile.
     *
     * @return ApiResponse Response from the API call
     */
    public function createServiceProfile(string $accountName, CreateServiceProfileRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/service/profile')
            ->server(Server::SERVICES)
            ->auth('global')
            ->parameters(
                HeaderParam::init('AccountName', $accountName),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init('HTTP 400 Bad Request.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn(
                '401',
                ErrorType::init('HTTP 401 Unauthorized.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn(
                '0',
                ErrorType::init('HTTP 500 Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->type(ServicesProfileRegistration::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update the definition of a service profile.
     *
     * @param string $id Unique ID of the service profile.
     * @param CreateServiceProfileRequest $body Request with new information for updating the
     *        service profile.
     * @param string|null $accountName User account name.
     *
     * @return ApiResponse Response from the API call
     */
    public function updateServiceProfile(
        string $id,
        CreateServiceProfileRequest $body,
        ?string $accountName = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/v1/service/profile/{Id}')
            ->server(Server::SERVICES)
            ->auth('global')
            ->parameters(
                TemplateParam::init('Id', $id),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                HeaderParam::init('AccountName', $accountName)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init('HTTP 400 Bad Request.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn(
                '401',
                ErrorType::init('HTTP 401 Unauthorized.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn(
                '0',
                ErrorType::init('HTTP 500 Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Helps register a service profile.
     *
     * @param string $id Unique service profile ID.
     * @param ServicesProfileRegistration $body Request for registration of a service profile.
     * @param string|null $accountName User account name.
     *
     * @return ApiResponse Response from the API call
     */
    public function submitServiceProfile(
        string $id,
        ServicesProfileRegistration $body,
        ?string $accountName = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/v1/service/profile/{id}/submit')
            ->server(Server::SERVICES)
            ->auth('global')
            ->parameters(
                TemplateParam::init('id', $id),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                HeaderParam::init('AccountName', $accountName)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init('HTTP 400 Bad Request.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn(
                '401',
                ErrorType::init('HTTP 401 Unauthorized.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('412', ErrorType::init('Precondition Failed.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '500',
                ErrorType::init('Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn(
                '0',
                ErrorType::init('HTTP 500 Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->type(ServicesProfileRegistrationResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
