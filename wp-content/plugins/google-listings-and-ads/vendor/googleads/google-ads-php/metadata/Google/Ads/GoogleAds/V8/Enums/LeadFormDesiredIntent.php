<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/lead_form_desired_intent.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class LeadFormDesiredIntent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v8/enums/lead_form_desired_intent.protogoogle.ads.googleads.v8.enums"s
LeadFormDesiredIntentEnum"V
LeadFormDesiredIntent
UNSPECIFIED 
UNKNOWN

LOW_INTENT
HIGH_INTENTB�
!com.google.ads.googleads.v8.enumsBLeadFormDesiredIntentProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

