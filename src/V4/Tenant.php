<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/tenant.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Tenant resource represents a tenant in the service. A tenant is a group or
 * entity that shares common access with specific privileges for resources like
 * jobs. Customer may create multiple tenants to provide data isolation for
 * different groups.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.Tenant</code>
 */
class Tenant extends \Google\Protobuf\Internal\Message
{
    /**
     * Required during tenant update.
     * The resource name for a tenant. This is generated by the service when a
     * tenant is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. Client side tenant identifier, used to uniquely identify the
     * tenant.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string external_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $external_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required during tenant update.
     *           The resource name for a tenant. This is generated by the service when a
     *           tenant is created.
     *           The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     *           "projects/foo/tenants/bar".
     *     @type string $external_id
     *           Required. Client side tenant identifier, used to uniquely identify the
     *           tenant.
     *           The maximum number of allowed characters is 255.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Tenant::initOnce();
        parent::__construct($data);
    }

    /**
     * Required during tenant update.
     * The resource name for a tenant. This is generated by the service when a
     * tenant is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required during tenant update.
     * The resource name for a tenant. This is generated by the service when a
     * tenant is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Client side tenant identifier, used to uniquely identify the
     * tenant.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string external_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * Required. Client side tenant identifier, used to uniquely identify the
     * tenant.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string external_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_id = $var;

        return $this;
    }

}

