<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/histogram.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The histogram request.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.HistogramQuery</code>
 */
class HistogramQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * An expression specifies a histogram request against matching jobs for
     * searches.
     * See [SearchJobsRequest.histogram_queries][google.cloud.talent.v4.SearchJobsRequest.histogram_queries] for details about syntax.
     *
     * Generated from protobuf field <code>string histogram_query = 1;</code>
     */
    protected $histogram_query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $histogram_query
     *           An expression specifies a histogram request against matching jobs for
     *           searches.
     *           See [SearchJobsRequest.histogram_queries][google.cloud.talent.v4.SearchJobsRequest.histogram_queries] for details about syntax.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Histogram::initOnce();
        parent::__construct($data);
    }

    /**
     * An expression specifies a histogram request against matching jobs for
     * searches.
     * See [SearchJobsRequest.histogram_queries][google.cloud.talent.v4.SearchJobsRequest.histogram_queries] for details about syntax.
     *
     * Generated from protobuf field <code>string histogram_query = 1;</code>
     * @return string
     */
    public function getHistogramQuery()
    {
        return $this->histogram_query;
    }

    /**
     * An expression specifies a histogram request against matching jobs for
     * searches.
     * See [SearchJobsRequest.histogram_queries][google.cloud.talent.v4.SearchJobsRequest.histogram_queries] for details about syntax.
     *
     * Generated from protobuf field <code>string histogram_query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHistogramQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->histogram_query = $var;

        return $this;
    }

}

