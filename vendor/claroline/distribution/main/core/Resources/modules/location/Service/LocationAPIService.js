export default class LocationAPIService {
    constructor($http, ClarolineAPIService) {
        this.$http = $http
        this.ClarolineAPIService = ClarolineAPIService
    }

    findAll() {
        return this.$http.get(Routing.generate('api_get_locations'));
    }

    create(newLocation) {
        var data = this.ClarolineAPIService.formSerialize('location_form', newLocation);

        return this.$http.post(
            Routing.generate('api_post_location', {'_format': 'html'}),
            data,
            {headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
        )
    }

    delete(locationId) {
        return this.$http.delete(Routing.generate('api_delete_location', {'location': locationId}));
    }

    update(locationId, updatedLocation) {
        var data = this.ClarolineAPIService.formSerialize('location_form', updatedLocation);

        return this.$http.put(
            Routing.generate('api_put_location', {'location': locationId, '_format': 'html'}),
            data,
            {headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
        )
    }
}