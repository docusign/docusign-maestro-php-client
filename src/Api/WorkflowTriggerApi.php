<?php
declare(strict_types=1);

/**
 * WorkflowTriggerApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Maestro
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Maestro API
 *
 * Maestro authors and executes experiences that allow non-coders the ability to define Simple Business Process without having to write code and to deploy them seamlessly without having to have development expertise
 *
 * OpenAPI spec version: 1.0.0
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Maestro\Api\WorkflowTriggerApi;


/**
 * TriggerWorkflowOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Maestro
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TriggerWorkflowOptions
{
    /**
      * $mtid Managed Token Id registered with DS Account Server
      * @var ?string
      */
    protected ?string $mtid = null;

    /**
     * Gets mtid
     *
     * @return ?string
     */
    public function getMtid(): ?string
    {
        return $this->mtid;
    }

    /**
     * Sets mtid
     * @param ?string $mtid Managed Token Id registered with DS Account Server
     *
     * @return self
     */
    public function setMtid(?string $mtid): self
    {
        $this->mtid = $mtid;
        return $this;
    }
    /**
      * $mtsec Managed Token Secret registered with DS Account Server
      * @var ?string
      */
    protected ?string $mtsec = null;

    /**
     * Gets mtsec
     *
     * @return ?string
     */
    public function getMtsec(): ?string
    {
        return $this->mtsec;
    }

    /**
     * Sets mtsec
     * @param ?string $mtsec Managed Token Secret registered with DS Account Server
     *
     * @return self
     */
    public function setMtsec(?string $mtsec): self
    {
        $this->mtsec = $mtsec;
        return $this;
    }
}



namespace DocuSign\Maestro\Api;

use DocuSign\Maestro\Client\ApiClient;
use DocuSign\Maestro\Client\ApiException;
use DocuSign\Maestro\Configuration;
use DocuSign\Maestro\ObjectSerializer;

/**
 * WorkflowTriggerApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Maestro
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkflowTriggerApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath the resource path to use
    * @param string $baseName the base name param
    * @param string $paramName the parameter name
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation triggerWorkflow
     *
     * Creates a new workflow instance after authenticating with DS Account Server
     *
     * @param ?string $account_id Account ID
     * @param \DocuSign\Maestro\Model\TriggerPayload $body JSON payload that will be passed to the triggered workflow (required)
     * @param  \DocuSign\Maestro\Api\WorkflowTriggerApi\TriggerWorkflowOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Maestro\Model\TriggerWorkflowViaPostResponse
     */
    public function triggerWorkflow($account_id, $body, \DocuSign\Maestro\Api\WorkflowTriggerApi\TriggerWorkflowOptions $options = null)
    {
        list($response) = $this->triggerWorkflowWithHttpInfo($account_id, $body, $options);
        return $response;
    }

    /**
     * Operation triggerWorkflowWithHttpInfo
     *
     * Creates a new workflow instance after authenticating with DS Account Server
     *
     * @param ?string $account_id Account ID
     * @param \DocuSign\Maestro\Model\TriggerPayload $body JSON payload that will be passed to the triggered workflow (required)
     * @param  \DocuSign\Maestro\Api\WorkflowTriggerApi\TriggerWorkflowOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Maestro\Model\TriggerWorkflowViaPostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function triggerWorkflowWithHttpInfo($account_id, $body, \DocuSign\Maestro\Api\WorkflowTriggerApi\TriggerWorkflowOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling triggerWorkflow');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling triggerWorkflow');
        }
        // parse inputs
        $resourcePath = "aow-auth/v1.0/accounts/{accountId}/workflows/trigger";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        if ($options != null)
        {
            // query params
            if ($options->getMtid() != 'null') {
                $queryParams['mtid'] = $this->apiClient->getSerializer()->toQueryValue($options->getMtid());
            }
            if ($options->getMtsec() != 'null') {
                $queryParams['mtsec'] = $this->apiClient->getSerializer()->toQueryValue($options->getMtsec());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Maestro\Model\TriggerWorkflowViaPostResponse',
                'aow-auth/v1.0/accounts/{accountId}/workflows/trigger'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Maestro\Model\TriggerWorkflowViaPostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Maestro\Model\TriggerWorkflowViaPostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Maestro\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Maestro\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Maestro\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Maestro\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Maestro\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}