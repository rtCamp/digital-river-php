<?php
/**
 * PayoutTransactionsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DigitalRiver\ApiSdk\ApiException;
use DigitalRiver\ApiSdk\Configuration;
use DigitalRiver\ApiSdk\HeaderSelector;
use DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * PayoutTransactionsApi Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutTransactionsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listPayoutTransactions
     *
     * Lists the payout transactions for a payout.
     *
     * @param  string $id Payout ID (required)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. (optional)
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors
     */
    public function listPayoutTransactions($id, $ending_before = null, $starting_after = null, $limit = null)
    {
        list($response) = $this->listPayoutTransactionsWithHttpInfo($id, $ending_before, $starting_after, $limit);
        return $response;
    }

    /**
     * Operation listPayoutTransactionsWithHttpInfo
     *
     * Lists the payout transactions for a payout.
     *
     * @param  string $id Payout ID (required)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. (optional)
     *
     * @throws \DigitalRiver\ApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors|\DigitalRiver\ApiSdk\Model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function listPayoutTransactionsWithHttpInfo($id, $ending_before = null, $starting_after = null, $limit = null)
    {
        $request = $this->listPayoutTransactionsRequest($id, $ending_before, $starting_after, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 408:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\DigitalRiver\ApiSdk\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalRiver\ApiSdk\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalRiver\ApiSdk\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listPayoutTransactionsAsync
     *
     * Lists the payout transactions for a payout.
     *
     * @param  string $id Payout ID (required)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPayoutTransactionsAsync($id, $ending_before = null, $starting_after = null, $limit = null)
    {
        return $this->listPayoutTransactionsAsyncWithHttpInfo($id, $ending_before, $starting_after, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listPayoutTransactionsAsyncWithHttpInfo
     *
     * Lists the payout transactions for a payout.
     *
     * @param  string $id Payout ID (required)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPayoutTransactionsAsyncWithHttpInfo($id, $ending_before = null, $starting_after = null, $limit = null)
    {
        $returnType = '\DigitalRiver\ApiSdk\Model\ListPayoutTransactionResponse';
        $request = $this->listPayoutTransactionsRequest($id, $ending_before, $starting_after, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listPayoutTransactions'
     *
     * @param  string $id Payout ID (required)
     * @param  string $ending_before A cursor for use in pagination. The endingBefore parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with xyz your subsequent calls can include endingBefore&#x3D;xyz in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. The startingAfter parameter is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with xyz, your subsequent calls can include startingAfter&#x3D;xyz in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects returned. Limit can range between 1 and 5000, and the default is 10. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listPayoutTransactionsRequest($id, $ending_before = null, $starting_after = null, $limit = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling listPayoutTransactions'
            );
        }
        if ($limit !== null && $limit > 5000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PayoutTransactionsApi.listPayoutTransactions, must be smaller than or equal to 5000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PayoutTransactionsApi.listPayoutTransactions, must be bigger than or equal to 1.');
        }


        $resourcePath = '/payouts/{id}/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($ending_before !== null) {
            if('form' === 'form' && is_array($ending_before)) {
                foreach($ending_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['endingBefore'] = $ending_before;
            }
        }
        // query params
        if ($starting_after !== null) {
            if('form' === 'form' && is_array($starting_after)) {
                foreach($starting_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['startingAfter'] = $starting_after;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        //$query = \GuzzleHttp\Psr7\build_query($queryParams);
        //this is changed for supporting deepobject in url in the form /skus?createdTime[lt]=2020-09-22T12:09:44Z
        $query = http_build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
