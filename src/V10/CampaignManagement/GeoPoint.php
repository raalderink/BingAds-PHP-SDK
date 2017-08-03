<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that contains the longitude and latitude coordinates of a geographical location.
     * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.100).aspx GeoPoint Data Object
     * 
     * @used-by LocationAdExtension
     */
    final class GeoPoint
    {
        /**
         * The latitude specified in micro degrees.
         * @var integer
         */
        public $LatitudeInMicroDegrees;

        /**
         * The longitude specified in micro degrees.
         * @var integer
         */
        public $LongitudeInMicroDegrees;
    }

}
