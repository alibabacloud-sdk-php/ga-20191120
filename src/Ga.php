<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ga\V20191120\Models\AddEntriesToAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AddEntriesToAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAclsWithListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAclsWithListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAdditionalCertificatesWithListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAdditionalCertificatesWithListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachDdosToAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachDdosToAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachLogStoreToEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\AttachLogStoreToEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageAddAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageAddAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageRemoveAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\BandwidthPackageRemoveAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ConfigEndpointProbeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ConfigEndpointProbeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachDdosFromAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachDdosFromAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachLogStoreFromEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DetachLogStoreFromEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAclsFromListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAclsFromListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAdditionalCertificatesFromListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\DissociateAdditionalCertificatesFromListenerResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetSpareIpRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetSpareIpResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAccelerateAreasRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAccelerateAreasResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableBusiRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableBusiRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBusiRegionsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBusiRegionsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenerCertificatesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenerCertificatesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\RemoveEntriesFromAclRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\RemoveEntriesFromAclResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\ReplaceBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\ReplaceBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorConfirmRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorConfirmResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAcceleratorResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAclAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateAclAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackageRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateBandwidthPackageResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupAttributeRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupAttributeResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsResponse;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ga extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ga', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddEntriesToAclRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddEntriesToAclResponse::fromMap($this->doRPCRequest('AddEntriesToAcl', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddEntriesToAclRequest $request
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEntriesToAclWithOptions($request, $runtime);
    }

    /**
     * @param AssociateAclsWithListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateAclsWithListenerResponse::fromMap($this->doRPCRequest('AssociateAclsWithListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateAclsWithListenerRequest $request
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAclsWithListenerWithOptions($request, $runtime);
    }

    /**
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateAdditionalCertificatesWithListenerResponse::fromMap($this->doRPCRequest('AssociateAdditionalCertificatesWithListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * @param AttachDdosToAcceleratorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AttachDdosToAcceleratorResponse
     */
    public function attachDdosToAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachDdosToAcceleratorResponse::fromMap($this->doRPCRequest('AttachDdosToAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachDdosToAcceleratorRequest $request
     *
     * @return AttachDdosToAcceleratorResponse
     */
    public function attachDdosToAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDdosToAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param AttachLogStoreToEndpointGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AttachLogStoreToEndpointGroupResponse
     */
    public function attachLogStoreToEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachLogStoreToEndpointGroupResponse::fromMap($this->doRPCRequest('AttachLogStoreToEndpointGroup', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachLogStoreToEndpointGroupRequest $request
     *
     * @return AttachLogStoreToEndpointGroupResponse
     */
    public function attachLogStoreToEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLogStoreToEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param BandwidthPackageAddAcceleratorRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BandwidthPackageAddAcceleratorResponse
     */
    public function bandwidthPackageAddAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BandwidthPackageAddAcceleratorResponse::fromMap($this->doRPCRequest('BandwidthPackageAddAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BandwidthPackageAddAcceleratorRequest $request
     *
     * @return BandwidthPackageAddAcceleratorResponse
     */
    public function bandwidthPackageAddAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandwidthPackageAddAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param BandwidthPackageRemoveAcceleratorRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BandwidthPackageRemoveAcceleratorResponse
     */
    public function bandwidthPackageRemoveAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BandwidthPackageRemoveAcceleratorResponse::fromMap($this->doRPCRequest('BandwidthPackageRemoveAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BandwidthPackageRemoveAcceleratorRequest $request
     *
     * @return BandwidthPackageRemoveAcceleratorResponse
     */
    public function bandwidthPackageRemoveAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandwidthPackageRemoveAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param ConfigEndpointProbeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigEndpointProbeResponse
     */
    public function configEndpointProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigEndpointProbeResponse::fromMap($this->doRPCRequest('ConfigEndpointProbe', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigEndpointProbeRequest $request
     *
     * @return ConfigEndpointProbeResponse
     */
    public function configEndpointProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configEndpointProbeWithOptions($request, $runtime);
    }

    /**
     * @param CreateAcceleratorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAcceleratorResponse
     */
    public function createAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAcceleratorResponse::fromMap($this->doRPCRequest('CreateAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAcceleratorRequest $request
     *
     * @return CreateAcceleratorResponse
     */
    public function createAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param CreateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAclResponse::fromMap($this->doRPCRequest('CreateAcl', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAclRequest $request
     *
     * @return CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
    }

    /**
     * @param CreateBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateBandwidthPackageResponse
     */
    public function createBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBandwidthPackageResponse::fromMap($this->doRPCRequest('CreateBandwidthPackage', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBandwidthPackageRequest $request
     *
     * @return CreateBandwidthPackageResponse
     */
    public function createBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateEndpointGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateEndpointGroupResponse
     */
    public function createEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEndpointGroupResponse::fromMap($this->doRPCRequest('CreateEndpointGroup', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEndpointGroupRequest $request
     *
     * @return CreateEndpointGroupResponse
     */
    public function createEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateEndpointGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEndpointGroupsResponse
     */
    public function createEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEndpointGroupsResponse::fromMap($this->doRPCRequest('CreateEndpointGroups', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEndpointGroupsRequest $request
     *
     * @return CreateEndpointGroupsResponse
     */
    public function createEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param CreateForwardingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateForwardingRulesResponse
     */
    public function createForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateForwardingRulesResponse::fromMap($this->doRPCRequest('CreateForwardingRules', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateForwardingRulesRequest $request
     *
     * @return CreateForwardingRulesResponse
     */
    public function createForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpSetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateIpSetsResponse
     */
    public function createIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIpSetsResponse::fromMap($this->doRPCRequest('CreateIpSets', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateIpSetsRequest $request
     *
     * @return CreateIpSetsResponse
     */
    public function createIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param CreateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateListenerResponse::fromMap($this->doRPCRequest('CreateListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateListenerRequest $request
     *
     * @return CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateSpareIpsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSpareIpsResponse
     */
    public function createSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSpareIpsResponse::fromMap($this->doRPCRequest('CreateSpareIps', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSpareIpsRequest $request
     *
     * @return CreateSpareIpsResponse
     */
    public function createSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAcceleratorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAcceleratorResponse
     */
    public function deleteAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAcceleratorResponse::fromMap($this->doRPCRequest('DeleteAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAcceleratorRequest $request
     *
     * @return DeleteAcceleratorResponse
     */
    public function deleteAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAclResponse::fromMap($this->doRPCRequest('DeleteAcl', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAclRequest $request
     *
     * @return DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBandwidthPackageResponse::fromMap($this->doRPCRequest('DeleteBandwidthPackage', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteBandwidthPackageRequest $request
     *
     * @return DeleteBandwidthPackageResponse
     */
    public function deleteBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEndpointGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteEndpointGroupResponse
     */
    public function deleteEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEndpointGroupResponse::fromMap($this->doRPCRequest('DeleteEndpointGroup', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEndpointGroupRequest $request
     *
     * @return DeleteEndpointGroupResponse
     */
    public function deleteEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEndpointGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEndpointGroupsResponse
     */
    public function deleteEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEndpointGroupsResponse::fromMap($this->doRPCRequest('DeleteEndpointGroups', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEndpointGroupsRequest $request
     *
     * @return DeleteEndpointGroupsResponse
     */
    public function deleteEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteForwardingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteForwardingRulesResponse
     */
    public function deleteForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteForwardingRulesResponse::fromMap($this->doRPCRequest('DeleteForwardingRules', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteForwardingRulesRequest $request
     *
     * @return DeleteForwardingRulesResponse
     */
    public function deleteForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpSetRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteIpSetResponse
     */
    public function deleteIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpSetResponse::fromMap($this->doRPCRequest('DeleteIpSet', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteIpSetRequest $request
     *
     * @return DeleteIpSetResponse
     */
    public function deleteIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpSetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteIpSetsResponse
     */
    public function deleteIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpSetsResponse::fromMap($this->doRPCRequest('DeleteIpSets', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteIpSetsRequest $request
     *
     * @return DeleteIpSetsResponse
     */
    public function deleteIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteListenerResponse::fromMap($this->doRPCRequest('DeleteListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteListenerRequest $request
     *
     * @return DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSpareIpsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSpareIpsResponse
     */
    public function deleteSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSpareIpsResponse::fromMap($this->doRPCRequest('DeleteSpareIps', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSpareIpsRequest $request
     *
     * @return DeleteSpareIpsResponse
     */
    public function deleteSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAcceleratorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAcceleratorResponse
     */
    public function describeAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAcceleratorResponse::fromMap($this->doRPCRequest('DescribeAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAcceleratorRequest $request
     *
     * @return DescribeAcceleratorResponse
     */
    public function describeAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwidthPackageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBandwidthPackageResponse
     */
    public function describeBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBandwidthPackageResponse::fromMap($this->doRPCRequest('DescribeBandwidthPackage', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBandwidthPackageRequest $request
     *
     * @return DescribeBandwidthPackageResponse
     */
    public function describeBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEndpointGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEndpointGroupResponse
     */
    public function describeEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEndpointGroupResponse::fromMap($this->doRPCRequest('DescribeEndpointGroup', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEndpointGroupRequest $request
     *
     * @return DescribeEndpointGroupResponse
     */
    public function describeEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeIpSetResponse
     */
    public function describeIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpSetResponse::fromMap($this->doRPCRequest('DescribeIpSet', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIpSetRequest $request
     *
     * @return DescribeIpSetResponse
     */
    public function describeIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpSetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeListenerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeListenerResponse
     */
    public function describeListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeListenerResponse::fromMap($this->doRPCRequest('DescribeListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeListenerRequest $request
     *
     * @return DescribeListenerResponse
     */
    public function describeListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListenerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DetachDdosFromAcceleratorRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DetachDdosFromAcceleratorResponse
     */
    public function detachDdosFromAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachDdosFromAcceleratorResponse::fromMap($this->doRPCRequest('DetachDdosFromAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachDdosFromAcceleratorRequest $request
     *
     * @return DetachDdosFromAcceleratorResponse
     */
    public function detachDdosFromAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDdosFromAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param DetachLogStoreFromEndpointGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DetachLogStoreFromEndpointGroupResponse
     */
    public function detachLogStoreFromEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachLogStoreFromEndpointGroupResponse::fromMap($this->doRPCRequest('DetachLogStoreFromEndpointGroup', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachLogStoreFromEndpointGroupRequest $request
     *
     * @return DetachLogStoreFromEndpointGroupResponse
     */
    public function detachLogStoreFromEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLogStoreFromEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param DissociateAclsFromListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateAclsFromListenerResponse::fromMap($this->doRPCRequest('DissociateAclsFromListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DissociateAclsFromListenerRequest $request
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAclsFromListenerWithOptions($request, $runtime);
    }

    /**
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateAdditionalCertificatesFromListenerResponse::fromMap($this->doRPCRequest('DissociateAdditionalCertificatesFromListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime);
    }

    /**
     * @param GetAclRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAclResponse
     */
    public function getAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAclResponse::fromMap($this->doRPCRequest('GetAcl', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAclRequest $request
     *
     * @return GetAclResponse
     */
    public function getAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAclWithOptions($request, $runtime);
    }

    /**
     * @param GetHealthStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetHealthStatusResponse
     */
    public function getHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHealthStatusResponse::fromMap($this->doRPCRequest('GetHealthStatus', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHealthStatusRequest $request
     *
     * @return GetHealthStatusResponse
     */
    public function getHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSpareIpRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetSpareIpResponse
     */
    public function getSpareIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSpareIpResponse::fromMap($this->doRPCRequest('GetSpareIp', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSpareIpRequest $request
     *
     * @return GetSpareIpResponse
     */
    public function getSpareIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpareIpWithOptions($request, $runtime);
    }

    /**
     * @param ListAccelerateAreasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAccelerateAreasResponse
     */
    public function listAccelerateAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAccelerateAreasResponse::fromMap($this->doRPCRequest('ListAccelerateAreas', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAccelerateAreasRequest $request
     *
     * @return ListAccelerateAreasResponse
     */
    public function listAccelerateAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccelerateAreasWithOptions($request, $runtime);
    }

    /**
     * @param ListAcceleratorsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAcceleratorsResponse
     */
    public function listAcceleratorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAcceleratorsResponse::fromMap($this->doRPCRequest('ListAccelerators', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAcceleratorsRequest $request
     *
     * @return ListAcceleratorsResponse
     */
    public function listAccelerators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcceleratorsWithOptions($request, $runtime);
    }

    /**
     * @param ListAclsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAclsResponse
     */
    public function listAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAclsResponse::fromMap($this->doRPCRequest('ListAcls', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAclsRequest $request
     *
     * @return ListAclsResponse
     */
    public function listAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclsWithOptions($request, $runtime);
    }

    /**
     * @param ListAvailableAccelerateAreasRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAvailableAccelerateAreasResponse
     */
    public function listAvailableAccelerateAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAvailableAccelerateAreasResponse::fromMap($this->doRPCRequest('ListAvailableAccelerateAreas', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAvailableAccelerateAreasRequest $request
     *
     * @return ListAvailableAccelerateAreasResponse
     */
    public function listAvailableAccelerateAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableAccelerateAreasWithOptions($request, $runtime);
    }

    /**
     * @param ListAvailableBusiRegionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAvailableBusiRegionsResponse
     */
    public function listAvailableBusiRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAvailableBusiRegionsResponse::fromMap($this->doRPCRequest('ListAvailableBusiRegions', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAvailableBusiRegionsRequest $request
     *
     * @return ListAvailableBusiRegionsResponse
     */
    public function listAvailableBusiRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableBusiRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListBandwidthackagesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBandwidthackagesResponse
     */
    public function listBandwidthackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBandwidthackagesResponse::fromMap($this->doRPCRequest('ListBandwidthackages', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBandwidthackagesRequest $request
     *
     * @return ListBandwidthackagesResponse
     */
    public function listBandwidthackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBandwidthackagesWithOptions($request, $runtime);
    }

    /**
     * @param ListBandwidthPackagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListBandwidthPackagesResponse
     */
    public function listBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBandwidthPackagesResponse::fromMap($this->doRPCRequest('ListBandwidthPackages', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBandwidthPackagesRequest $request
     *
     * @return ListBandwidthPackagesResponse
     */
    public function listBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param ListBusiRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListBusiRegionsResponse
     */
    public function listBusiRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBusiRegionsResponse::fromMap($this->doRPCRequest('ListBusiRegions', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBusiRegionsRequest $request
     *
     * @return ListBusiRegionsResponse
     */
    public function listBusiRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBusiRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListEndpointGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEndpointGroupsResponse
     */
    public function listEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEndpointGroupsResponse::fromMap($this->doRPCRequest('ListEndpointGroups', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEndpointGroupsRequest $request
     *
     * @return ListEndpointGroupsResponse
     */
    public function listEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListForwardingRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListForwardingRulesResponse
     */
    public function listForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListForwardingRulesResponse::fromMap($this->doRPCRequest('ListForwardingRules', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListForwardingRulesRequest $request
     *
     * @return ListForwardingRulesResponse
     */
    public function listForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListIpSetsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListIpSetsResponse
     */
    public function listIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListIpSetsResponse::fromMap($this->doRPCRequest('ListIpSets', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListIpSetsRequest $request
     *
     * @return ListIpSetsResponse
     */
    public function listIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param ListListenerCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListListenerCertificatesResponse::fromMap($this->doRPCRequest('ListListenerCertificates', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListListenerCertificatesRequest $request
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenerCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param ListListenersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListListenersResponse::fromMap($this->doRPCRequest('ListListeners', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListListenersRequest $request
     *
     * @return ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * @param ListSpareIpsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSpareIpsResponse
     */
    public function listSpareIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSpareIpsResponse::fromMap($this->doRPCRequest('ListSpareIps', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSpareIpsRequest $request
     *
     * @return ListSpareIpsResponse
     */
    public function listSpareIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpareIpsWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemSecurityPoliciesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSystemSecurityPoliciesResponse::fromMap($this->doRPCRequest('ListSystemSecurityPolicies', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSystemSecurityPoliciesRequest $request
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param RemoveEntriesFromAclRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveEntriesFromAclResponse::fromMap($this->doRPCRequest('RemoveEntriesFromAcl', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveEntriesFromAclRequest $request
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEntriesFromAclWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceBandwidthPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReplaceBandwidthPackageResponse
     */
    public function replaceBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceBandwidthPackageResponse::fromMap($this->doRPCRequest('ReplaceBandwidthPackage', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReplaceBandwidthPackageRequest $request
     *
     * @return ReplaceBandwidthPackageResponse
     */
    public function replaceBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAcceleratorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAcceleratorResponse
     */
    public function updateAcceleratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAcceleratorResponse::fromMap($this->doRPCRequest('UpdateAccelerator', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAcceleratorRequest $request
     *
     * @return UpdateAcceleratorResponse
     */
    public function updateAccelerator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAcceleratorConfirmRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAcceleratorConfirmResponse
     */
    public function updateAcceleratorConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAcceleratorConfirmResponse::fromMap($this->doRPCRequest('UpdateAcceleratorConfirm', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAcceleratorConfirmRequest $request
     *
     * @return UpdateAcceleratorConfirmResponse
     */
    public function updateAcceleratorConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAcceleratorConfirmWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAclAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAclAttributeResponse::fromMap($this->doRPCRequest('UpdateAclAttribute', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAclAttributeRequest $request
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBandwidthPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateBandwidthPackageResponse
     */
    public function updateBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateBandwidthPackageResponse::fromMap($this->doRPCRequest('UpdateBandwidthPackage', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateBandwidthPackageRequest $request
     *
     * @return UpdateBandwidthPackageResponse
     */
    public function updateBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEndpointGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateEndpointGroupResponse
     */
    public function updateEndpointGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEndpointGroupResponse::fromMap($this->doRPCRequest('UpdateEndpointGroup', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEndpointGroupRequest $request
     *
     * @return UpdateEndpointGroupResponse
     */
    public function updateEndpointGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEndpointGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateEndpointGroupAttributeResponse
     */
    public function updateEndpointGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEndpointGroupAttributeResponse::fromMap($this->doRPCRequest('UpdateEndpointGroupAttribute', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEndpointGroupAttributeRequest $request
     *
     * @return UpdateEndpointGroupAttributeResponse
     */
    public function updateEndpointGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEndpointGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEndpointGroupsResponse
     */
    public function updateEndpointGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEndpointGroupsResponse::fromMap($this->doRPCRequest('UpdateEndpointGroups', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEndpointGroupsRequest $request
     *
     * @return UpdateEndpointGroupsResponse
     */
    public function updateEndpointGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEndpointGroupsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateForwardingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateForwardingRulesResponse
     */
    public function updateForwardingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateForwardingRulesResponse::fromMap($this->doRPCRequest('UpdateForwardingRules', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateForwardingRulesRequest $request
     *
     * @return UpdateForwardingRulesResponse
     */
    public function updateForwardingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateForwardingRulesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpSetRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateIpSetResponse
     */
    public function updateIpSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIpSetResponse::fromMap($this->doRPCRequest('UpdateIpSet', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateIpSetRequest $request
     *
     * @return UpdateIpSetResponse
     */
    public function updateIpSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpSetWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpSetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateIpSetsResponse
     */
    public function updateIpSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIpSetsResponse::fromMap($this->doRPCRequest('UpdateIpSets', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateIpSetsRequest $request
     *
     * @return UpdateIpSetsResponse
     */
    public function updateIpSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpSetsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateListenerResponse
     */
    public function updateListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateListenerResponse::fromMap($this->doRPCRequest('UpdateListener', '2019-11-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateListenerRequest $request
     *
     * @return UpdateListenerResponse
     */
    public function updateListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerWithOptions($request, $runtime);
    }
}
