<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/company_service.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Request of the CreateCompany method.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.CreateCompanyRequest</code>
 */
class CreateCompanyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the tenant under which the company is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The company to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Company company = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $company = null;

    /**
     * @param string                          $parent  Required. Resource name of the tenant under which the company is created.
     *
     *                                                 The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     *                                                 "projects/foo/tenants/bar". Please see
     *                                                 {@see CompanyServiceClient::tenantName()} for help formatting this field.
     * @param \Google\Cloud\Talent\V4\Company $company Required. The company to be created.
     *
     * @return \Google\Cloud\Talent\V4\CreateCompanyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Talent\V4\Company $company): self
    {
        return (new self())
            ->setParent($parent)
            ->setCompany($company);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the tenant under which the company is created.
     *           The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     *           "projects/foo/tenants/bar".
     *     @type \Google\Cloud\Talent\V4\Company $company
     *           Required. The company to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\CompanyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the tenant under which the company is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the tenant under which the company is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The company to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Company company = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Talent\V4\Company|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    public function hasCompany()
    {
        return isset($this->company);
    }

    public function clearCompany()
    {
        unset($this->company);
    }

    /**
     * Required. The company to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Company company = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Talent\V4\Company $var
     * @return $this
     */
    public function setCompany($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\Company::class);
        $this->company = $var;

        return $this;
    }

}

