<?php

/*
 * This file is part of the hogosha-monitor package
 *
 * Copyright (c) 2016 Guillaume Cavana
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Guillaume Cavana <guillaume.cavana@gmail.com>
 */

namespace Hogosha\Monitor\Model;

/**
 * @author Guillaume Cavana <guillaume.cavana@gmail.com>
 */
class Result
{
    protected $urlInfo;
    protected $statusCode;
    protected $responseTime;
    protected $handlerError;
    protected $validatorResult;
    protected $validatorError;

    /**
     * Constructor.
     *
     * @param UrlInfo   $urlInfo
     * @param string    $statusCode
     * @param float     $responseTime
     * @param string    $handlerError    Get a string error from the handler
     * @param bool|null $validatorResult Get the validator result
     * @param string    $validatorError  Get the validator error
     */
    public function __construct(
        UrlInfo $urlInfo,
        $statusCode,
        $responseTime,
        $handlerError = null,
        $validatorResult = null,
        $validatorError = null
    ) {
        $this->urlInfo = $urlInfo;
        $this->statusCode = $statusCode;
        $this->responseTime = $responseTime;
        $this->handlerError = $handlerError;
        $this->validatorResult = $validatorResult;
        $this->validatorError = $validatorError;
    }

    /**
     * getUrl.
     *
     * @return UrlInfo
     */
    public function getUrl()
    {
        return $this->urlInfo;
    }

    /**
     * getStatusCode.
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * getReponseTime.
     *
     * @return float
     */
    public function getReponseTime()
    {
        return $this->responseTime;
    }

    /**
     * getHandlerError.
     *
     * @return string|null
     */
    public function getHandlerError()
    {
        return $this->handlerError;
    }

    /**
     * getValidatorResult.
     *
     * @return bool
     */
    public function getValidatorResult()
    {
        return $this->validatorResult;
    }

    /**
     * getValidatorError.
     *
     * @return string|null
     */
    public function getValidatorError()
    {
        return $this->validatorError;
    }
}
