<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/ad_group_asset.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class AdGroupAsset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v8/enums/asset_link_status.protogoogle.ads.googleads.v8.enums"l
AssetLinkStatusEnum"U
AssetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

PAUSEDB�
!com.google.ads.googleads.v8.enumsBAssetLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
4google/ads/googleads/v8/enums/asset_field_type.protogoogle.ads.googleads.v8.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINKB�
!com.google.ads.googleads.v8.enumsBAssetFieldTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/resources/ad_group_asset.proto!google.ads.googleads.v8.resources5google/ads/googleads/v8/enums/asset_link_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
AdGroupAssetD
resource_name (	B-�A�A\'
%googleads.googleapis.com/AdGroupAsset=
ad_group (	B+�A�A�A"
 googleads.googleapis.com/AdGroup8
asset (	B)�A�A�A 
googleads.googleapis.com/Asset\\

field_type (2@.google.ads.googleads.v8.enums.AssetFieldTypeEnum.AssetFieldTypeB�A�AR
status (2B.google.ads.googleads.v8.enums.AssetLinkStatusEnum.AssetLinkStatus:w�At
%googleads.googleapis.com/AdGroupAssetKcustomers/{customer_id}/adGroupAssets/{ad_group_id}~{asset_id}~{field_type}B�
%com.google.ads.googleads.v8.resourcesBAdGroupAssetProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

