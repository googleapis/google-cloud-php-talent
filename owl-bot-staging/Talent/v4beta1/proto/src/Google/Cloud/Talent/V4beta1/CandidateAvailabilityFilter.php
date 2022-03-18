<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deprecated. Use AvailabilityFilter instead.
 * Filter on availability signals.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CandidateAvailabilityFilter</code>
 */
class CandidateAvailabilityFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * It is false by default. If true, API excludes all the potential available
     * profiles.
     *
     * Generated from protobuf field <code>bool negated = 1;</code>
     */
    protected $negated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $negated
     *           It is false by default. If true, API excludes all the potential available
     *           profiles.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * It is false by default. If true, API excludes all the potential available
     * profiles.
     *
     * Generated from protobuf field <code>bool negated = 1;</code>
     * @return bool
     */
    public function getNegated()
    {
        return $this->negated;
    }

    /**
     * It is false by default. If true, API excludes all the potential available
     * profiles.
     *
     * Generated from protobuf field <code>bool negated = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegated($var)
    {
        GPBUtil::checkBool($var);
        $this->negated = $var;

        return $this;
    }

}

