<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Geographic region of the search.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.LocationFilter</code>
 */
class LocationFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The address name, such as "Mountain View" or "Bay Area".
     *
     * Generated from protobuf field <code>string address = 1;</code>
     */
    protected $address = '';
    /**
     * CLDR region code of the country/region of the address. This is used
     * to address ambiguity of the user-input location, for example, "Liverpool"
     * against "Liverpool, NY, US" or "Liverpool, UK".
     * Set this field to bias location resolution toward a specific country
     * or territory. If this field is not set, application behavior is biased
     * toward the United States by default.
     * See
     * https://www.unicode.org/cldr/charts/30/supplemental/territory_information.html
     * for details. Example: "CH" for Switzerland.
     * Note that this filter is not applicable for Profile Search related queries.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     */
    protected $region_code = '';
    /**
     * The latitude and longitude of the geographic center to search from. This
     * field is ignored if `address` is provided.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 3;</code>
     */
    protected $lat_lng = null;
    /**
     * The distance_in_miles is applied when the location being searched for is
     * identified as a city or smaller. This field is ignored if the location
     * being searched for is a state or larger.
     *
     * Generated from protobuf field <code>double distance_in_miles = 4;</code>
     */
    protected $distance_in_miles = 0.0;
    /**
     * Allows the client to return jobs without a
     * set location, specifically, telecommuting jobs (telecommuting is considered
     * by the service as a special location.
     * [Job.posting_region][google.cloud.talent.v4beta1.Job.posting_region] indicates if a job permits telecommuting.
     * If this field is set to [TelecommutePreference.TELECOMMUTE_ALLOWED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_ALLOWED],
     * telecommuting jobs are searched, and [address][google.cloud.talent.v4beta1.LocationFilter.address] and [lat_lng][google.cloud.talent.v4beta1.LocationFilter.lat_lng] are
     * ignored. If not set or set to
     * [TelecommutePreference.TELECOMMUTE_EXCLUDED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_EXCLUDED], telecommute job are not
     * searched.
     * This filter can be used by itself to search exclusively for telecommuting
     * jobs, or it can be combined with another location
     * filter to search for a combination of job locations,
     * such as "Mountain View" or "telecommuting" jobs. However, when used in
     * combination with other location filters, telecommuting jobs can be
     * treated as less relevant than other jobs in the search response.
     * This field is only used for job search requests.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference telecommute_preference = 5;</code>
     */
    protected $telecommute_preference = 0;
    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * are excluded.
     * Currently only supported in profile search.
     *
     * Generated from protobuf field <code>bool negated = 6;</code>
     */
    protected $negated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           The address name, such as "Mountain View" or "Bay Area".
     *     @type string $region_code
     *           CLDR region code of the country/region of the address. This is used
     *           to address ambiguity of the user-input location, for example, "Liverpool"
     *           against "Liverpool, NY, US" or "Liverpool, UK".
     *           Set this field to bias location resolution toward a specific country
     *           or territory. If this field is not set, application behavior is biased
     *           toward the United States by default.
     *           See
     *           https://www.unicode.org/cldr/charts/30/supplemental/territory_information.html
     *           for details. Example: "CH" for Switzerland.
     *           Note that this filter is not applicable for Profile Search related queries.
     *     @type \Google\Type\LatLng $lat_lng
     *           The latitude and longitude of the geographic center to search from. This
     *           field is ignored if `address` is provided.
     *     @type float $distance_in_miles
     *           The distance_in_miles is applied when the location being searched for is
     *           identified as a city or smaller. This field is ignored if the location
     *           being searched for is a state or larger.
     *     @type int $telecommute_preference
     *           Allows the client to return jobs without a
     *           set location, specifically, telecommuting jobs (telecommuting is considered
     *           by the service as a special location.
     *           [Job.posting_region][google.cloud.talent.v4beta1.Job.posting_region] indicates if a job permits telecommuting.
     *           If this field is set to [TelecommutePreference.TELECOMMUTE_ALLOWED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_ALLOWED],
     *           telecommuting jobs are searched, and [address][google.cloud.talent.v4beta1.LocationFilter.address] and [lat_lng][google.cloud.talent.v4beta1.LocationFilter.lat_lng] are
     *           ignored. If not set or set to
     *           [TelecommutePreference.TELECOMMUTE_EXCLUDED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_EXCLUDED], telecommute job are not
     *           searched.
     *           This filter can be used by itself to search exclusively for telecommuting
     *           jobs, or it can be combined with another location
     *           filter to search for a combination of job locations,
     *           such as "Mountain View" or "telecommuting" jobs. However, when used in
     *           combination with other location filters, telecommuting jobs can be
     *           treated as less relevant than other jobs in the search response.
     *           This field is only used for job search requests.
     *     @type bool $negated
     *           Whether to apply negation to the filter so profiles matching the filter
     *           are excluded.
     *           Currently only supported in profile search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * The address name, such as "Mountain View" or "Bay Area".
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * The address name, such as "Mountain View" or "Bay Area".
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * CLDR region code of the country/region of the address. This is used
     * to address ambiguity of the user-input location, for example, "Liverpool"
     * against "Liverpool, NY, US" or "Liverpool, UK".
     * Set this field to bias location resolution toward a specific country
     * or territory. If this field is not set, application behavior is biased
     * toward the United States by default.
     * See
     * https://www.unicode.org/cldr/charts/30/supplemental/territory_information.html
     * for details. Example: "CH" for Switzerland.
     * Note that this filter is not applicable for Profile Search related queries.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * CLDR region code of the country/region of the address. This is used
     * to address ambiguity of the user-input location, for example, "Liverpool"
     * against "Liverpool, NY, US" or "Liverpool, UK".
     * Set this field to bias location resolution toward a specific country
     * or territory. If this field is not set, application behavior is biased
     * toward the United States by default.
     * See
     * https://www.unicode.org/cldr/charts/30/supplemental/territory_information.html
     * for details. Example: "CH" for Switzerland.
     * Note that this filter is not applicable for Profile Search related queries.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * The latitude and longitude of the geographic center to search from. This
     * field is ignored if `address` is provided.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 3;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getLatLng()
    {
        return $this->lat_lng;
    }

    public function hasLatLng()
    {
        return isset($this->lat_lng);
    }

    public function clearLatLng()
    {
        unset($this->lat_lng);
    }

    /**
     * The latitude and longitude of the geographic center to search from. This
     * field is ignored if `address` is provided.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 3;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setLatLng($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->lat_lng = $var;

        return $this;
    }

    /**
     * The distance_in_miles is applied when the location being searched for is
     * identified as a city or smaller. This field is ignored if the location
     * being searched for is a state or larger.
     *
     * Generated from protobuf field <code>double distance_in_miles = 4;</code>
     * @return float
     */
    public function getDistanceInMiles()
    {
        return $this->distance_in_miles;
    }

    /**
     * The distance_in_miles is applied when the location being searched for is
     * identified as a city or smaller. This field is ignored if the location
     * being searched for is a state or larger.
     *
     * Generated from protobuf field <code>double distance_in_miles = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDistanceInMiles($var)
    {
        GPBUtil::checkDouble($var);
        $this->distance_in_miles = $var;

        return $this;
    }

    /**
     * Allows the client to return jobs without a
     * set location, specifically, telecommuting jobs (telecommuting is considered
     * by the service as a special location.
     * [Job.posting_region][google.cloud.talent.v4beta1.Job.posting_region] indicates if a job permits telecommuting.
     * If this field is set to [TelecommutePreference.TELECOMMUTE_ALLOWED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_ALLOWED],
     * telecommuting jobs are searched, and [address][google.cloud.talent.v4beta1.LocationFilter.address] and [lat_lng][google.cloud.talent.v4beta1.LocationFilter.lat_lng] are
     * ignored. If not set or set to
     * [TelecommutePreference.TELECOMMUTE_EXCLUDED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_EXCLUDED], telecommute job are not
     * searched.
     * This filter can be used by itself to search exclusively for telecommuting
     * jobs, or it can be combined with another location
     * filter to search for a combination of job locations,
     * such as "Mountain View" or "telecommuting" jobs. However, when used in
     * combination with other location filters, telecommuting jobs can be
     * treated as less relevant than other jobs in the search response.
     * This field is only used for job search requests.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference telecommute_preference = 5;</code>
     * @return int
     */
    public function getTelecommutePreference()
    {
        return $this->telecommute_preference;
    }

    /**
     * Allows the client to return jobs without a
     * set location, specifically, telecommuting jobs (telecommuting is considered
     * by the service as a special location.
     * [Job.posting_region][google.cloud.talent.v4beta1.Job.posting_region] indicates if a job permits telecommuting.
     * If this field is set to [TelecommutePreference.TELECOMMUTE_ALLOWED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_ALLOWED],
     * telecommuting jobs are searched, and [address][google.cloud.talent.v4beta1.LocationFilter.address] and [lat_lng][google.cloud.talent.v4beta1.LocationFilter.lat_lng] are
     * ignored. If not set or set to
     * [TelecommutePreference.TELECOMMUTE_EXCLUDED][google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference.TELECOMMUTE_EXCLUDED], telecommute job are not
     * searched.
     * This filter can be used by itself to search exclusively for telecommuting
     * jobs, or it can be combined with another location
     * filter to search for a combination of job locations,
     * such as "Mountain View" or "telecommuting" jobs. However, when used in
     * combination with other location filters, telecommuting jobs can be
     * treated as less relevant than other jobs in the search response.
     * This field is only used for job search requests.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.LocationFilter.TelecommutePreference telecommute_preference = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTelecommutePreference($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\LocationFilter\TelecommutePreference::class);
        $this->telecommute_preference = $var;

        return $this;
    }

    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * are excluded.
     * Currently only supported in profile search.
     *
     * Generated from protobuf field <code>bool negated = 6;</code>
     * @return bool
     */
    public function getNegated()
    {
        return $this->negated;
    }

    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * are excluded.
     * Currently only supported in profile search.
     *
     * Generated from protobuf field <code>bool negated = 6;</code>
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

