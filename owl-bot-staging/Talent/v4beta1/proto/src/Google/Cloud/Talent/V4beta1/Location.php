<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that represents a location with full geographic information.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of a location, which corresponds to the address lines field of
     * [google.type.PostalAddress][google.type.PostalAddress]. For example, "Downtown, Atlanta, GA, USA"
     * has a type of [LocationType.NEIGHBORHOOD][google.cloud.talent.v4beta1.Location.LocationType.NEIGHBORHOOD], and "Kansas City, KS, USA"
     * has a type of [LocationType.LOCALITY][google.cloud.talent.v4beta1.Location.LocationType.LOCALITY].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Location.LocationType location_type = 1;</code>
     */
    protected $location_type = 0;
    /**
     * Postal address of the location that includes human readable information,
     * such as postal delivery and payments addresses. Given a postal address,
     * a postal service can deliver items to a premises, P.O. Box, or other
     * delivery location.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress postal_address = 2;</code>
     */
    protected $postal_address = null;
    /**
     * An object representing a latitude/longitude pair.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 3;</code>
     */
    protected $lat_lng = null;
    /**
     * Radius in miles of the job location. This value is derived from the
     * location bounding box in which a circle with the specified radius
     * centered from [google.type.LatLng][google.type.LatLng] covers the area associated with the
     * job location.
     * For example, currently, "Mountain View, CA, USA" has a radius of
     * 6.17 miles.
     *
     * Generated from protobuf field <code>double radius_miles = 4;</code>
     */
    protected $radius_miles = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $location_type
     *           The type of a location, which corresponds to the address lines field of
     *           [google.type.PostalAddress][google.type.PostalAddress]. For example, "Downtown, Atlanta, GA, USA"
     *           has a type of [LocationType.NEIGHBORHOOD][google.cloud.talent.v4beta1.Location.LocationType.NEIGHBORHOOD], and "Kansas City, KS, USA"
     *           has a type of [LocationType.LOCALITY][google.cloud.talent.v4beta1.Location.LocationType.LOCALITY].
     *     @type \Google\Type\PostalAddress $postal_address
     *           Postal address of the location that includes human readable information,
     *           such as postal delivery and payments addresses. Given a postal address,
     *           a postal service can deliver items to a premises, P.O. Box, or other
     *           delivery location.
     *     @type \Google\Type\LatLng $lat_lng
     *           An object representing a latitude/longitude pair.
     *     @type float $radius_miles
     *           Radius in miles of the job location. This value is derived from the
     *           location bounding box in which a circle with the specified radius
     *           centered from [google.type.LatLng][google.type.LatLng] covers the area associated with the
     *           job location.
     *           For example, currently, "Mountain View, CA, USA" has a radius of
     *           6.17 miles.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of a location, which corresponds to the address lines field of
     * [google.type.PostalAddress][google.type.PostalAddress]. For example, "Downtown, Atlanta, GA, USA"
     * has a type of [LocationType.NEIGHBORHOOD][google.cloud.talent.v4beta1.Location.LocationType.NEIGHBORHOOD], and "Kansas City, KS, USA"
     * has a type of [LocationType.LOCALITY][google.cloud.talent.v4beta1.Location.LocationType.LOCALITY].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Location.LocationType location_type = 1;</code>
     * @return int
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * The type of a location, which corresponds to the address lines field of
     * [google.type.PostalAddress][google.type.PostalAddress]. For example, "Downtown, Atlanta, GA, USA"
     * has a type of [LocationType.NEIGHBORHOOD][google.cloud.talent.v4beta1.Location.LocationType.NEIGHBORHOOD], and "Kansas City, KS, USA"
     * has a type of [LocationType.LOCALITY][google.cloud.talent.v4beta1.Location.LocationType.LOCALITY].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Location.LocationType location_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLocationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\Location\LocationType::class);
        $this->location_type = $var;

        return $this;
    }

    /**
     * Postal address of the location that includes human readable information,
     * such as postal delivery and payments addresses. Given a postal address,
     * a postal service can deliver items to a premises, P.O. Box, or other
     * delivery location.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress postal_address = 2;</code>
     * @return \Google\Type\PostalAddress|null
     */
    public function getPostalAddress()
    {
        return $this->postal_address;
    }

    public function hasPostalAddress()
    {
        return isset($this->postal_address);
    }

    public function clearPostalAddress()
    {
        unset($this->postal_address);
    }

    /**
     * Postal address of the location that includes human readable information,
     * such as postal delivery and payments addresses. Given a postal address,
     * a postal service can deliver items to a premises, P.O. Box, or other
     * delivery location.
     *
     * Generated from protobuf field <code>.google.type.PostalAddress postal_address = 2;</code>
     * @param \Google\Type\PostalAddress $var
     * @return $this
     */
    public function setPostalAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\PostalAddress::class);
        $this->postal_address = $var;

        return $this;
    }

    /**
     * An object representing a latitude/longitude pair.
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
     * An object representing a latitude/longitude pair.
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
     * Radius in miles of the job location. This value is derived from the
     * location bounding box in which a circle with the specified radius
     * centered from [google.type.LatLng][google.type.LatLng] covers the area associated with the
     * job location.
     * For example, currently, "Mountain View, CA, USA" has a radius of
     * 6.17 miles.
     *
     * Generated from protobuf field <code>double radius_miles = 4;</code>
     * @return float
     */
    public function getRadiusMiles()
    {
        return $this->radius_miles;
    }

    /**
     * Radius in miles of the job location. This value is derived from the
     * location bounding box in which a circle with the specified radius
     * centered from [google.type.LatLng][google.type.LatLng] covers the area associated with the
     * job location.
     * For example, currently, "Mountain View, CA, USA" has a radius of
     * 6.17 miles.
     *
     * Generated from protobuf field <code>double radius_miles = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setRadiusMiles($var)
    {
        GPBUtil::checkDouble($var);
        $this->radius_miles = $var;

        return $this;
    }

}

