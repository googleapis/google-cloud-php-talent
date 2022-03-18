<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update profile request
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.UpdateProfileRequest</code>
 */
class UpdateProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Profile to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Profile profile = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $profile = null;
    /**
     * A field mask to specify the profile fields to update.
     * A full update is performed if it is unset.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4beta1\Profile $profile
     *           Required. Profile to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           A field mask to specify the profile fields to update.
     *           A full update is performed if it is unset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\ProfileService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Profile to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Profile profile = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Talent\V4beta1\Profile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * Required. Profile to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Profile profile = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Talent\V4beta1\Profile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Profile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * A field mask to specify the profile fields to update.
     * A full update is performed if it is unset.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * A field mask to specify the profile fields to update.
     * A full update is performed if it is unset.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

