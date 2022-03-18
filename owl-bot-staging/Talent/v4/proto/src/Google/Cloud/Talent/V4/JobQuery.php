<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/filters.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The query required to perform a search query.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.JobQuery</code>
 */
class JobQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * The query string that matches against the job title, description, and
     * location fields.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     */
    protected $query = '';
    /**
     * The language code of [query][google.cloud.talent.v4.JobQuery.query]. For example, "en-US". This field helps to
     * better interpret the query.
     * If a value isn't specified, the query language code is automatically
     * detected, which may not be accurate.
     * Language code should be in BCP-47 format, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     *
     * Generated from protobuf field <code>string query_language_code = 14;</code>
     */
    protected $query_language_code = '';
    /**
     * This filter specifies the company entities to search against.
     * If a value isn't specified, jobs are searched for against all
     * companies.
     * If multiple values are specified, jobs are searched against the
     * companies specified.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}". For
     * example, "projects/foo/tenants/bar/companies/baz".
     * At most 20 company filters are allowed.
     *
     * Generated from protobuf field <code>repeated string companies = 2;</code>
     */
    private $companies;
    /**
     * The location filter specifies geo-regions containing the jobs to
     * search against. See [LocationFilter][google.cloud.talent.v4.LocationFilter] for more information.
     * If a location value isn't specified, jobs fitting the other search
     * criteria are retrieved regardless of where they're located.
     * If multiple values are specified, jobs are retrieved from any of the
     * specified locations. If different values are specified for the
     * [LocationFilter.distance_in_miles][google.cloud.talent.v4.LocationFilter.distance_in_miles] parameter, the maximum provided
     * distance is used for all locations.
     * At most 5 location filters are allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.LocationFilter location_filters = 3;</code>
     */
    private $location_filters;
    /**
     * The category filter specifies the categories of jobs to search against.
     * See [JobCategory][google.cloud.talent.v4.JobCategory] for more information.
     * If a value isn't specified, jobs from any category are searched against.
     * If multiple values are specified, jobs from any of the specified
     * categories are searched against.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.JobCategory job_categories = 4;</code>
     */
    private $job_categories;
    /**
     * Allows filtering jobs by commute time with different travel methods (for
     *  example, driving or public transit).
     * Note: This only works when you specify a [CommuteMethod][google.cloud.talent.v4.CommuteMethod]. In this case,
     * [location_filters][google.cloud.talent.v4.JobQuery.location_filters] is ignored.
     *  Currently we don't support sorting by commute time.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.CommuteFilter commute_filter = 5;</code>
     */
    protected $commute_filter = null;
    /**
     * This filter specifies the company [Company.display_name][google.cloud.talent.v4.Company.display_name]
     * of the jobs to search against. The company name must match the value
     * exactly (case sensitive).
     * Alternatively, if the value being searched for is wrapped in
     * `SUBSTRING_MATCH([value])`, the company name must contain a case
     * insensitive substring match of the value. Using this function may increase
     * latency.
     * Sample Values: `["Google LLC", "SUBSTRING_MATCH(google)"]`
     * If a value isn't specified, jobs within the search results are
     * associated with any company.
     * If multiple values are specified, jobs within the search results may be
     * associated with any of the specified companies.
     * At most 20 company display name filters are allowed.
     *
     * Generated from protobuf field <code>repeated string company_display_names = 6;</code>
     */
    private $company_display_names;
    /**
     * This search filter is applied only to
     * [Job.compensation_info][google.cloud.talent.v4.Job.compensation_info]. For example, if the filter is specified
     * as "Hourly job with per-hour compensation > $15", only jobs meeting
     * these criteria are searched. If a filter isn't defined, all open jobs
     * are searched.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.CompensationFilter compensation_filter = 7;</code>
     */
    protected $compensation_filter = null;
    /**
     * This filter specifies a structured syntax to match against the
     * [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] marked as `filterable`.
     * The syntax for this expression is a subset of SQL syntax.
     * Supported operators are: `=`, `!=`, `<`, `<=`, `>`, and `>=` where the
     * left of the operator is a custom field key and the right of the operator
     * is a number or a quoted string. You must escape backslash (\\) and
     * quote (\") characters.
     * Supported functions are `LOWER([field_name])` to
     * perform a case insensitive match and `EMPTY([field_name])` to filter on the
     * existence of a key.
     * Boolean expressions (AND/OR/NOT) are supported up to 3 levels of
     * nesting (for example, "((A AND B AND C) OR NOT D) AND E"), a maximum of 100
     * comparisons or functions are allowed in the expression. The expression
     * must be < 10000 bytes in length.
     * Sample Query:
     * `(LOWER(driving_license)="class \"a\"" OR EMPTY(driving_license)) AND
     * driving_years > 10`
     *
     * Generated from protobuf field <code>string custom_attribute_filter = 8;</code>
     */
    protected $custom_attribute_filter = '';
    /**
     * This flag controls the spell-check feature. If false, the
     * service attempts to correct a misspelled query,
     * for example, "enginee" is corrected to "engineer".
     * Defaults to false: a spell check is performed.
     *
     * Generated from protobuf field <code>bool disable_spell_check = 9;</code>
     */
    protected $disable_spell_check = false;
    /**
     * The employment type filter specifies the employment type of jobs to
     * search against, such as [EmploymentType.FULL_TIME][google.cloud.talent.v4.EmploymentType.FULL_TIME].
     * If a value isn't specified, jobs in the search results includes any
     * employment type.
     * If multiple values are specified, jobs in the search results include
     * any of the specified employment types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.EmploymentType employment_types = 10;</code>
     */
    private $employment_types;
    /**
     * This filter specifies the locale of jobs to search against,
     * for example, "en-US".
     * If a value isn't specified, the search results can contain jobs in any
     * locale.
     * Language codes should be in BCP-47 format, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     * At most 10 language code filters are allowed.
     *
     * Generated from protobuf field <code>repeated string language_codes = 11;</code>
     */
    private $language_codes;
    /**
     * Jobs published within a range specified by this filter are searched
     * against.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.TimestampRange publish_time_range = 12;</code>
     */
    protected $publish_time_range = null;
    /**
     * This filter specifies a list of job names to be excluded during search.
     * At most 400 excluded job names are allowed.
     *
     * Generated from protobuf field <code>repeated string excluded_jobs = 13;</code>
     */
    private $excluded_jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *           The query string that matches against the job title, description, and
     *           location fields.
     *           The maximum number of allowed characters is 255.
     *     @type string $query_language_code
     *           The language code of [query][google.cloud.talent.v4.JobQuery.query]. For example, "en-US". This field helps to
     *           better interpret the query.
     *           If a value isn't specified, the query language code is automatically
     *           detected, which may not be accurate.
     *           Language code should be in BCP-47 format, such as "en-US" or "sr-Latn".
     *           For more information, see
     *           [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $companies
     *           This filter specifies the company entities to search against.
     *           If a value isn't specified, jobs are searched for against all
     *           companies.
     *           If multiple values are specified, jobs are searched against the
     *           companies specified.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}". For
     *           example, "projects/foo/tenants/bar/companies/baz".
     *           At most 20 company filters are allowed.
     *     @type \Google\Cloud\Talent\V4\LocationFilter[]|\Google\Protobuf\Internal\RepeatedField $location_filters
     *           The location filter specifies geo-regions containing the jobs to
     *           search against. See [LocationFilter][google.cloud.talent.v4.LocationFilter] for more information.
     *           If a location value isn't specified, jobs fitting the other search
     *           criteria are retrieved regardless of where they're located.
     *           If multiple values are specified, jobs are retrieved from any of the
     *           specified locations. If different values are specified for the
     *           [LocationFilter.distance_in_miles][google.cloud.talent.v4.LocationFilter.distance_in_miles] parameter, the maximum provided
     *           distance is used for all locations.
     *           At most 5 location filters are allowed.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $job_categories
     *           The category filter specifies the categories of jobs to search against.
     *           See [JobCategory][google.cloud.talent.v4.JobCategory] for more information.
     *           If a value isn't specified, jobs from any category are searched against.
     *           If multiple values are specified, jobs from any of the specified
     *           categories are searched against.
     *     @type \Google\Cloud\Talent\V4\CommuteFilter $commute_filter
     *           Allows filtering jobs by commute time with different travel methods (for
     *            example, driving or public transit).
     *           Note: This only works when you specify a [CommuteMethod][google.cloud.talent.v4.CommuteMethod]. In this case,
     *           [location_filters][google.cloud.talent.v4.JobQuery.location_filters] is ignored.
     *            Currently we don't support sorting by commute time.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $company_display_names
     *           This filter specifies the company [Company.display_name][google.cloud.talent.v4.Company.display_name]
     *           of the jobs to search against. The company name must match the value
     *           exactly (case sensitive).
     *           Alternatively, if the value being searched for is wrapped in
     *           `SUBSTRING_MATCH([value])`, the company name must contain a case
     *           insensitive substring match of the value. Using this function may increase
     *           latency.
     *           Sample Values: `["Google LLC", "SUBSTRING_MATCH(google)"]`
     *           If a value isn't specified, jobs within the search results are
     *           associated with any company.
     *           If multiple values are specified, jobs within the search results may be
     *           associated with any of the specified companies.
     *           At most 20 company display name filters are allowed.
     *     @type \Google\Cloud\Talent\V4\CompensationFilter $compensation_filter
     *           This search filter is applied only to
     *           [Job.compensation_info][google.cloud.talent.v4.Job.compensation_info]. For example, if the filter is specified
     *           as "Hourly job with per-hour compensation > $15", only jobs meeting
     *           these criteria are searched. If a filter isn't defined, all open jobs
     *           are searched.
     *     @type string $custom_attribute_filter
     *           This filter specifies a structured syntax to match against the
     *           [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] marked as `filterable`.
     *           The syntax for this expression is a subset of SQL syntax.
     *           Supported operators are: `=`, `!=`, `<`, `<=`, `>`, and `>=` where the
     *           left of the operator is a custom field key and the right of the operator
     *           is a number or a quoted string. You must escape backslash (\\) and
     *           quote (\") characters.
     *           Supported functions are `LOWER([field_name])` to
     *           perform a case insensitive match and `EMPTY([field_name])` to filter on the
     *           existence of a key.
     *           Boolean expressions (AND/OR/NOT) are supported up to 3 levels of
     *           nesting (for example, "((A AND B AND C) OR NOT D) AND E"), a maximum of 100
     *           comparisons or functions are allowed in the expression. The expression
     *           must be < 10000 bytes in length.
     *           Sample Query:
     *           `(LOWER(driving_license)="class \"a\"" OR EMPTY(driving_license)) AND
     *           driving_years > 10`
     *     @type bool $disable_spell_check
     *           This flag controls the spell-check feature. If false, the
     *           service attempts to correct a misspelled query,
     *           for example, "enginee" is corrected to "engineer".
     *           Defaults to false: a spell check is performed.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $employment_types
     *           The employment type filter specifies the employment type of jobs to
     *           search against, such as [EmploymentType.FULL_TIME][google.cloud.talent.v4.EmploymentType.FULL_TIME].
     *           If a value isn't specified, jobs in the search results includes any
     *           employment type.
     *           If multiple values are specified, jobs in the search results include
     *           any of the specified employment types.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $language_codes
     *           This filter specifies the locale of jobs to search against,
     *           for example, "en-US".
     *           If a value isn't specified, the search results can contain jobs in any
     *           locale.
     *           Language codes should be in BCP-47 format, such as "en-US" or "sr-Latn".
     *           For more information, see
     *           [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     *           At most 10 language code filters are allowed.
     *     @type \Google\Cloud\Talent\V4\TimestampRange $publish_time_range
     *           Jobs published within a range specified by this filter are searched
     *           against.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $excluded_jobs
     *           This filter specifies a list of job names to be excluded during search.
     *           At most 400 excluded job names are allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * The query string that matches against the job title, description, and
     * location fields.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The query string that matches against the job title, description, and
     * location fields.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * The language code of [query][google.cloud.talent.v4.JobQuery.query]. For example, "en-US". This field helps to
     * better interpret the query.
     * If a value isn't specified, the query language code is automatically
     * detected, which may not be accurate.
     * Language code should be in BCP-47 format, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     *
     * Generated from protobuf field <code>string query_language_code = 14;</code>
     * @return string
     */
    public function getQueryLanguageCode()
    {
        return $this->query_language_code;
    }

    /**
     * The language code of [query][google.cloud.talent.v4.JobQuery.query]. For example, "en-US". This field helps to
     * better interpret the query.
     * If a value isn't specified, the query language code is automatically
     * detected, which may not be accurate.
     * Language code should be in BCP-47 format, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     *
     * Generated from protobuf field <code>string query_language_code = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_language_code = $var;

        return $this;
    }

    /**
     * This filter specifies the company entities to search against.
     * If a value isn't specified, jobs are searched for against all
     * companies.
     * If multiple values are specified, jobs are searched against the
     * companies specified.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}". For
     * example, "projects/foo/tenants/bar/companies/baz".
     * At most 20 company filters are allowed.
     *
     * Generated from protobuf field <code>repeated string companies = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * This filter specifies the company entities to search against.
     * If a value isn't specified, jobs are searched for against all
     * companies.
     * If multiple values are specified, jobs are searched against the
     * companies specified.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}". For
     * example, "projects/foo/tenants/bar/companies/baz".
     * At most 20 company filters are allowed.
     *
     * Generated from protobuf field <code>repeated string companies = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompanies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->companies = $arr;

        return $this;
    }

    /**
     * The location filter specifies geo-regions containing the jobs to
     * search against. See [LocationFilter][google.cloud.talent.v4.LocationFilter] for more information.
     * If a location value isn't specified, jobs fitting the other search
     * criteria are retrieved regardless of where they're located.
     * If multiple values are specified, jobs are retrieved from any of the
     * specified locations. If different values are specified for the
     * [LocationFilter.distance_in_miles][google.cloud.talent.v4.LocationFilter.distance_in_miles] parameter, the maximum provided
     * distance is used for all locations.
     * At most 5 location filters are allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.LocationFilter location_filters = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocationFilters()
    {
        return $this->location_filters;
    }

    /**
     * The location filter specifies geo-regions containing the jobs to
     * search against. See [LocationFilter][google.cloud.talent.v4.LocationFilter] for more information.
     * If a location value isn't specified, jobs fitting the other search
     * criteria are retrieved regardless of where they're located.
     * If multiple values are specified, jobs are retrieved from any of the
     * specified locations. If different values are specified for the
     * [LocationFilter.distance_in_miles][google.cloud.talent.v4.LocationFilter.distance_in_miles] parameter, the maximum provided
     * distance is used for all locations.
     * At most 5 location filters are allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.LocationFilter location_filters = 3;</code>
     * @param \Google\Cloud\Talent\V4\LocationFilter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocationFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4\LocationFilter::class);
        $this->location_filters = $arr;

        return $this;
    }

    /**
     * The category filter specifies the categories of jobs to search against.
     * See [JobCategory][google.cloud.talent.v4.JobCategory] for more information.
     * If a value isn't specified, jobs from any category are searched against.
     * If multiple values are specified, jobs from any of the specified
     * categories are searched against.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.JobCategory job_categories = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobCategories()
    {
        return $this->job_categories;
    }

    /**
     * The category filter specifies the categories of jobs to search against.
     * See [JobCategory][google.cloud.talent.v4.JobCategory] for more information.
     * If a value isn't specified, jobs from any category are searched against.
     * If multiple values are specified, jobs from any of the specified
     * categories are searched against.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.JobCategory job_categories = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Talent\V4\JobCategory::class);
        $this->job_categories = $arr;

        return $this;
    }

    /**
     * Allows filtering jobs by commute time with different travel methods (for
     *  example, driving or public transit).
     * Note: This only works when you specify a [CommuteMethod][google.cloud.talent.v4.CommuteMethod]. In this case,
     * [location_filters][google.cloud.talent.v4.JobQuery.location_filters] is ignored.
     *  Currently we don't support sorting by commute time.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.CommuteFilter commute_filter = 5;</code>
     * @return \Google\Cloud\Talent\V4\CommuteFilter|null
     */
    public function getCommuteFilter()
    {
        return $this->commute_filter;
    }

    public function hasCommuteFilter()
    {
        return isset($this->commute_filter);
    }

    public function clearCommuteFilter()
    {
        unset($this->commute_filter);
    }

    /**
     * Allows filtering jobs by commute time with different travel methods (for
     *  example, driving or public transit).
     * Note: This only works when you specify a [CommuteMethod][google.cloud.talent.v4.CommuteMethod]. In this case,
     * [location_filters][google.cloud.talent.v4.JobQuery.location_filters] is ignored.
     *  Currently we don't support sorting by commute time.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.CommuteFilter commute_filter = 5;</code>
     * @param \Google\Cloud\Talent\V4\CommuteFilter $var
     * @return $this
     */
    public function setCommuteFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\CommuteFilter::class);
        $this->commute_filter = $var;

        return $this;
    }

    /**
     * This filter specifies the company [Company.display_name][google.cloud.talent.v4.Company.display_name]
     * of the jobs to search against. The company name must match the value
     * exactly (case sensitive).
     * Alternatively, if the value being searched for is wrapped in
     * `SUBSTRING_MATCH([value])`, the company name must contain a case
     * insensitive substring match of the value. Using this function may increase
     * latency.
     * Sample Values: `["Google LLC", "SUBSTRING_MATCH(google)"]`
     * If a value isn't specified, jobs within the search results are
     * associated with any company.
     * If multiple values are specified, jobs within the search results may be
     * associated with any of the specified companies.
     * At most 20 company display name filters are allowed.
     *
     * Generated from protobuf field <code>repeated string company_display_names = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompanyDisplayNames()
    {
        return $this->company_display_names;
    }

    /**
     * This filter specifies the company [Company.display_name][google.cloud.talent.v4.Company.display_name]
     * of the jobs to search against. The company name must match the value
     * exactly (case sensitive).
     * Alternatively, if the value being searched for is wrapped in
     * `SUBSTRING_MATCH([value])`, the company name must contain a case
     * insensitive substring match of the value. Using this function may increase
     * latency.
     * Sample Values: `["Google LLC", "SUBSTRING_MATCH(google)"]`
     * If a value isn't specified, jobs within the search results are
     * associated with any company.
     * If multiple values are specified, jobs within the search results may be
     * associated with any of the specified companies.
     * At most 20 company display name filters are allowed.
     *
     * Generated from protobuf field <code>repeated string company_display_names = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompanyDisplayNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->company_display_names = $arr;

        return $this;
    }

    /**
     * This search filter is applied only to
     * [Job.compensation_info][google.cloud.talent.v4.Job.compensation_info]. For example, if the filter is specified
     * as "Hourly job with per-hour compensation > $15", only jobs meeting
     * these criteria are searched. If a filter isn't defined, all open jobs
     * are searched.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.CompensationFilter compensation_filter = 7;</code>
     * @return \Google\Cloud\Talent\V4\CompensationFilter|null
     */
    public function getCompensationFilter()
    {
        return $this->compensation_filter;
    }

    public function hasCompensationFilter()
    {
        return isset($this->compensation_filter);
    }

    public function clearCompensationFilter()
    {
        unset($this->compensation_filter);
    }

    /**
     * This search filter is applied only to
     * [Job.compensation_info][google.cloud.talent.v4.Job.compensation_info]. For example, if the filter is specified
     * as "Hourly job with per-hour compensation > $15", only jobs meeting
     * these criteria are searched. If a filter isn't defined, all open jobs
     * are searched.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.CompensationFilter compensation_filter = 7;</code>
     * @param \Google\Cloud\Talent\V4\CompensationFilter $var
     * @return $this
     */
    public function setCompensationFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\CompensationFilter::class);
        $this->compensation_filter = $var;

        return $this;
    }

    /**
     * This filter specifies a structured syntax to match against the
     * [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] marked as `filterable`.
     * The syntax for this expression is a subset of SQL syntax.
     * Supported operators are: `=`, `!=`, `<`, `<=`, `>`, and `>=` where the
     * left of the operator is a custom field key and the right of the operator
     * is a number or a quoted string. You must escape backslash (\\) and
     * quote (\") characters.
     * Supported functions are `LOWER([field_name])` to
     * perform a case insensitive match and `EMPTY([field_name])` to filter on the
     * existence of a key.
     * Boolean expressions (AND/OR/NOT) are supported up to 3 levels of
     * nesting (for example, "((A AND B AND C) OR NOT D) AND E"), a maximum of 100
     * comparisons or functions are allowed in the expression. The expression
     * must be < 10000 bytes in length.
     * Sample Query:
     * `(LOWER(driving_license)="class \"a\"" OR EMPTY(driving_license)) AND
     * driving_years > 10`
     *
     * Generated from protobuf field <code>string custom_attribute_filter = 8;</code>
     * @return string
     */
    public function getCustomAttributeFilter()
    {
        return $this->custom_attribute_filter;
    }

    /**
     * This filter specifies a structured syntax to match against the
     * [Job.custom_attributes][google.cloud.talent.v4.Job.custom_attributes] marked as `filterable`.
     * The syntax for this expression is a subset of SQL syntax.
     * Supported operators are: `=`, `!=`, `<`, `<=`, `>`, and `>=` where the
     * left of the operator is a custom field key and the right of the operator
     * is a number or a quoted string. You must escape backslash (\\) and
     * quote (\") characters.
     * Supported functions are `LOWER([field_name])` to
     * perform a case insensitive match and `EMPTY([field_name])` to filter on the
     * existence of a key.
     * Boolean expressions (AND/OR/NOT) are supported up to 3 levels of
     * nesting (for example, "((A AND B AND C) OR NOT D) AND E"), a maximum of 100
     * comparisons or functions are allowed in the expression. The expression
     * must be < 10000 bytes in length.
     * Sample Query:
     * `(LOWER(driving_license)="class \"a\"" OR EMPTY(driving_license)) AND
     * driving_years > 10`
     *
     * Generated from protobuf field <code>string custom_attribute_filter = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomAttributeFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_attribute_filter = $var;

        return $this;
    }

    /**
     * This flag controls the spell-check feature. If false, the
     * service attempts to correct a misspelled query,
     * for example, "enginee" is corrected to "engineer".
     * Defaults to false: a spell check is performed.
     *
     * Generated from protobuf field <code>bool disable_spell_check = 9;</code>
     * @return bool
     */
    public function getDisableSpellCheck()
    {
        return $this->disable_spell_check;
    }

    /**
     * This flag controls the spell-check feature. If false, the
     * service attempts to correct a misspelled query,
     * for example, "enginee" is corrected to "engineer".
     * Defaults to false: a spell check is performed.
     *
     * Generated from protobuf field <code>bool disable_spell_check = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableSpellCheck($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_spell_check = $var;

        return $this;
    }

    /**
     * The employment type filter specifies the employment type of jobs to
     * search against, such as [EmploymentType.FULL_TIME][google.cloud.talent.v4.EmploymentType.FULL_TIME].
     * If a value isn't specified, jobs in the search results includes any
     * employment type.
     * If multiple values are specified, jobs in the search results include
     * any of the specified employment types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.EmploymentType employment_types = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmploymentTypes()
    {
        return $this->employment_types;
    }

    /**
     * The employment type filter specifies the employment type of jobs to
     * search against, such as [EmploymentType.FULL_TIME][google.cloud.talent.v4.EmploymentType.FULL_TIME].
     * If a value isn't specified, jobs in the search results includes any
     * employment type.
     * If multiple values are specified, jobs in the search results include
     * any of the specified employment types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.EmploymentType employment_types = 10;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmploymentTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Talent\V4\EmploymentType::class);
        $this->employment_types = $arr;

        return $this;
    }

    /**
     * This filter specifies the locale of jobs to search against,
     * for example, "en-US".
     * If a value isn't specified, the search results can contain jobs in any
     * locale.
     * Language codes should be in BCP-47 format, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     * At most 10 language code filters are allowed.
     *
     * Generated from protobuf field <code>repeated string language_codes = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguageCodes()
    {
        return $this->language_codes;
    }

    /**
     * This filter specifies the locale of jobs to search against,
     * for example, "en-US".
     * If a value isn't specified, the search results can contain jobs in any
     * locale.
     * Language codes should be in BCP-47 format, such as "en-US" or "sr-Latn".
     * For more information, see
     * [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47).
     * At most 10 language code filters are allowed.
     *
     * Generated from protobuf field <code>repeated string language_codes = 11;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguageCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->language_codes = $arr;

        return $this;
    }

    /**
     * Jobs published within a range specified by this filter are searched
     * against.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.TimestampRange publish_time_range = 12;</code>
     * @return \Google\Cloud\Talent\V4\TimestampRange|null
     */
    public function getPublishTimeRange()
    {
        return $this->publish_time_range;
    }

    public function hasPublishTimeRange()
    {
        return isset($this->publish_time_range);
    }

    public function clearPublishTimeRange()
    {
        unset($this->publish_time_range);
    }

    /**
     * Jobs published within a range specified by this filter are searched
     * against.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.TimestampRange publish_time_range = 12;</code>
     * @param \Google\Cloud\Talent\V4\TimestampRange $var
     * @return $this
     */
    public function setPublishTimeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\TimestampRange::class);
        $this->publish_time_range = $var;

        return $this;
    }

    /**
     * This filter specifies a list of job names to be excluded during search.
     * At most 400 excluded job names are allowed.
     *
     * Generated from protobuf field <code>repeated string excluded_jobs = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludedJobs()
    {
        return $this->excluded_jobs;
    }

    /**
     * This filter specifies a list of job names to be excluded during search.
     * At most 400 excluded job names are allowed.
     *
     * Generated from protobuf field <code>repeated string excluded_jobs = 13;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludedJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->excluded_jobs = $arr;

        return $this;
    }

}

