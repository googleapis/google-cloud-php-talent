<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/completion_service.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of auto-complete query.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.CompleteQueryResponse</code>
 */
class CompleteQueryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Results of the matching job/company candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.CompleteQueryResponse.CompletionResult completion_results = 1;</code>
     */
    private $completion_results;
    /**
     * Additional information for the API invocation, such as the request
     * tracking id.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.ResponseMetadata metadata = 2;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Talent\V4\CompleteQueryResponse\CompletionResult>|\Google\Protobuf\Internal\RepeatedField $completion_results
     *           Results of the matching job/company candidates.
     *     @type \Google\Cloud\Talent\V4\ResponseMetadata $metadata
     *           Additional information for the API invocation, such as the request
     *           tracking id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\CompletionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Results of the matching job/company candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.CompleteQueryResponse.CompletionResult completion_results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompletionResults()
    {
        return $this->completion_results;
    }

    /**
     * Results of the matching job/company candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.CompleteQueryResponse.CompletionResult completion_results = 1;</code>
     * @param array<\Google\Cloud\Talent\V4\CompleteQueryResponse\CompletionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompletionResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4\CompleteQueryResponse\CompletionResult::class);
        $this->completion_results = $arr;

        return $this;
    }

    /**
     * Additional information for the API invocation, such as the request
     * tracking id.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.ResponseMetadata metadata = 2;</code>
     * @return \Google\Cloud\Talent\V4\ResponseMetadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Additional information for the API invocation, such as the request
     * tracking id.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.ResponseMetadata metadata = 2;</code>
     * @param \Google\Cloud\Talent\V4\ResponseMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\ResponseMetadata::class);
        $this->metadata = $var;

        return $this;
    }

}

