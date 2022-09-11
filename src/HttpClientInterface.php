<?php

/**
 * @package     FrameX (FX) HttpClient Plugin
 * @link        https://localzet.gitbook.io
 * 
 * @author      localzet <creator@localzet.ru>
 * 
 * @copyright   Copyright (c) 2018-2020 Zorin Projects 
 * @copyright   Copyright (c) 2020-2022 NONA Team
 * 
 * @license     https://www.localzet.ru/license GNU GPLv3 License
 */

namespace FrameX\HttpClient;

/**
 * FrameX Http clients interface
 */
interface HttpClientInterface
{
    /**
     * Send request to the remote server
     *
     * Returns the result (Raw response from the server) on success, FALSE on failure
     *
     * @param string $uri
     * @param string $method
     * @param array $parameters
     * @param array $headers
     * @param bool $multipart
     *
     * @return mixed
     */
    public function request($uri, $method = 'GET', $parameters = [], $headers = [], $multipart = false);

    /**
     * Returns raw response from the server on success, FALSE on failure
     *
     * @return mixed
     */
    public function getResponseBody();

    /**
     * Retriever the headers returned in the response
     *
     * @return array
     */
    public function getResponseHeader();

    /**
     * Returns latest request HTTP status code
     *
     * @return int
     */
    public function getResponseHttpCode();

    /**
     * Returns latest error encountered by the client
     * This can be either a code or error message
     *
     * @return mixed
     */
    public function getResponseClientError();
}
