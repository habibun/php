<?php

class GoogleMaps
{
    public function getCoordinatesFromAddress($address) {
        // calls Google Maps webservice
    }
}

class OpenStreetMap
{
    public function getCoordinatesFromAddress($address) {
        // calls OpenStreetMap webservice
    }
}


class StoreService
{
    public function getStoreCoordinates($store) {
        $geolocationService = new GoogleMaps();
        // or $geolocationService = GoogleMaps::getInstance() if you use singletons

        return $geolocationService->getCoordinatesFromAddress($store->getAddress());
    }
}

/**
 * Now we want to use the OpenStreetMap instead of GoogleMaps, how do we do? We have to change the code of StoreService, and all the other classes that use GoogleMaps
 */