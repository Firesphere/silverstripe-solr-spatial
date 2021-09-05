<?php

namespace Firesphere\SolrSpatial\Extensions;

use SilverStripe\ORM\DataExtension;

class SpatialDataObjectExtension extends DataExtension
{

    private static $db = [
        'Lat' => 'Varchar(25)',
        'Lng' => 'Varchar(25)'
    ];

    private static $casting = [
        'Spatial'    => 'Spatial',
        'getSpatial' => 'Spatial'
    ];

    public function getSpatial()
    {
        return sprintf('%s,%s', $this->owner->Lat, $this->owner->Lng);
    }
}
