<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AdExtensionByAdReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/jj713608(v=msads.90).aspx AdExtensionByAdReportColumn Value Set
     * 
     * @used-by AdExtensionByAdReportRequest
     */
    final class AdExtensionByAdReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad title. */
        const AdTitle = 'AdTitle';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The type name that corresponds to the AdExtensionTypeId column. */
        const AdExtensionType = 'AdExtensionType';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

        /** Click type refers to each component of an ad that a customer can click. */
        const ClickType = 'ClickType';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The number of billable and non-billable times that the ad extension was clicked. */
        const TotalClicks = 'TotalClicks';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The Bing Ads assigned identifier of an ad extension. */
        const AdExtensionId = 'AdExtensionId';

        /** The version attribute of an ad extension. */
        const AdExtensionVersion = 'AdExtensionVersion';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The title part 1 attribute of an ad. */
        const TitlePart1 = 'TitlePart1';

        /** The title part 2 attribute of an ad. */
        const TitlePart2 = 'TitlePart2';
    }

}
