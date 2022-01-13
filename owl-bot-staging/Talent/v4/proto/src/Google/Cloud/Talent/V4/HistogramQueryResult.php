<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/histogram.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Histogram result that matches [HistogramQuery][google.cloud.talent.v4.HistogramQuery] specified in searches.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.HistogramQueryResult</code>
 */
class HistogramQueryResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Requested histogram expression.
     *
     * Generated from protobuf field <code>string histogram_query = 1;</code>
     */
    protected $histogram_query = '';
    /**
     * A map from the values of the facet associated with distinct values to the
     * number of matching entries with corresponding value.
     * The key format is:
     * * (for string histogram) string values stored in the field.
     * * (for named numeric bucket) name specified in `bucket()` function, like
     *   for `bucket(0, MAX, "non-negative")`, the key will be `non-negative`.
     * * (for anonymous numeric bucket) range formatted as `<low>-<high>`, for
     *   example, `0-1000`, `MIN-0`, and `0-MAX`.
     *
     * Generated from protobuf field <code>map<string, int64> histogram = 2;</code>
     */
    private $histogram;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $histogram_query
     *           Requested histogram expression.
     *     @type array|\Google\Protobuf\Internal\MapField $histogram
     *           A map from the values of the facet associated with distinct values to the
     *           number of matching entries with corresponding value.
     *           The key format is:
     *           * (for string histogram) string values stored in the field.
     *           * (for named numeric bucket) name specified in `bucket()` function, like
     *             for `bucket(0, MAX, "non-negative")`, the key will be `non-negative`.
     *           * (for anonymous numeric bucket) range formatted as `<low>-<high>`, for
     *             example, `0-1000`, `MIN-0`, and `0-MAX`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Histogram::initOnce();
        parent::__construct($data);
    }

    /**
     * Requested histogram expression.
     *
     * Generated from protobuf field <code>string histogram_query = 1;</code>
     * @return string
     */
    public function getHistogramQuery()
    {
        return $this->histogram_query;
    }

    /**
     * Requested histogram expression.
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

    /**
     * A map from the values of the facet associated with distinct values to the
     * number of matching entries with corresponding value.
     * The key format is:
     * * (for string histogram) string values stored in the field.
     * * (for named numeric bucket) name specified in `bucket()` function, like
     *   for `bucket(0, MAX, "non-negative")`, the key will be `non-negative`.
     * * (for anonymous numeric bucket) range formatted as `<low>-<high>`, for
     *   example, `0-1000`, `MIN-0`, and `0-MAX`.
     *
     * Generated from protobuf field <code>map<string, int64> histogram = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHistogram()
    {
        return $this->histogram;
    }

    /**
     * A map from the values of the facet associated with distinct values to the
     * number of matching entries with corresponding value.
     * The key format is:
     * * (for string histogram) string values stored in the field.
     * * (for named numeric bucket) name specified in `bucket()` function, like
     *   for `bucket(0, MAX, "non-negative")`, the key will be `non-negative`.
     * * (for anonymous numeric bucket) range formatted as `<low>-<high>`, for
     *   example, `0-1000`, `MIN-0`, and `0-MAX`.
     *
     * Generated from protobuf field <code>map<string, int64> histogram = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHistogram($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->histogram = $arr;

        return $this;
    }

}

