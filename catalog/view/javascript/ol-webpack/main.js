import './style.css';
import {Map, View} from 'ol';
import TileLayer from 'ol/layer/Tile';
import OSM from 'ol/source/OSM.js';
import {fromLonLat} from 'ol/proj';

export async function show(map_id, geocode, zoom = 0) {

    const re = /\s*,\s*/;
    const LatLon = geocode.split(re);
    const lon = LatLon[1];
    const lat = LatLon[0];

    const point = fromLonLat([lon, lat]);

    const {default: getMarker} = await import('./marker.js');
    const marker = getMarker(point);

    const map0 = new Map({
        target: map_id,
        layers: [
            new TileLayer({
                source: new OSM(),
            }),
            marker
        ],
        view: new View({
            center: point,
            zoom: zoom
        })
    });
}
