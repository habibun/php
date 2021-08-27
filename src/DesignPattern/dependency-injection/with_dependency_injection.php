<?php

class GoogleMaps implements GeolocationService
{
    public function getCoordinatesFromAddress($address) {
        // calls Google Maps webservice
    }
}

class OpenStreetMap implements GeolocationService
{
    public function getCoordinatesFromAddress($address) {
        // calls OpenStreetMap webservice
    }
}

interface GeolocationService {
    public function getCoordinatesFromAddress($address);
}


class StoreService
{
    private $geoLocationService;

    /**
     * StoreService constructor.
     * @param $geoLocationService
     */
    public function __construct(GeolocationService $geoLocationService)
    {
        $this->geoLocationService = $geoLocationService;
    }


    public function getStoreCoordinates($store) {
        return $this->geoLocationService->getCoordinatesFromAddress($store->getAddress());
    }
}

/**
 * Now, it is for the user of the StoreService to decide which implementation to use. And it can be changed anytime, without having to rewrite the StoreService.
 */