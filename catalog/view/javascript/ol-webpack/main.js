import './style.css';
import {Map, View} from 'ol';
import TileLayer from 'ol/layer/Tile';
import XYZ from 'ol/source/XYZ';
import OSM from 'ol/source/OSM.js';
import {fromLonLat} from 'ol/proj';
import {altKeyOnly,
        altShiftKeysOnly,
        platformModifierKeyOnly,
        primaryAction,
        shiftKeyOnly
        } from 'ol/events/condition';

import {defaults} from 'ol/control/defaults';
import Zoom from 'ol/control/Zoom.js';
import Attribution from 'ol/control/Attribution.js';
import FullScreen from 'ol/control/FullScreen.js';
import Rotate from 'ol/control/Rotate.js';

import {defaults as defaultsInteraction} from 'ol/interaction/defaults';
import DoubleClickZoom from 'ol/interaction/DoubleClickZoom.js';
import DragRotateAndZoom from 'ol/interaction/DragRotateAndZoom.js';

export async function show(
        map_id, geocode, markerImage, zoom = 0,
        zoomControl, zoomOptions,
        attributionControl,
        fullScreenControl, fullScreenOptions,
        rotateControl, rotateControlOptions,
        doubleClickZoom, doubleClickZoomOptions,
        dragRotateAndZoom, dragRotateAndZoomOptions) {

    const re = /\s*,\s*/;
    const LatLon = geocode.split(re);
    const lon = LatLon[1];
    const lat = LatLon[0];

    const point = fromLonLat([lon, lat]);

    const {default: getMarker} = await import('./marker.js');
    const marker = getMarker(point, markerImage, await getImageHeight(markerImage));

    const map = new Map({
        controls: defaults({
            zoom: false,
            attribution: false,
            rotate: false,
        }),
        interactions: defaultsInteraction({
            doubleClickZoom: false
        }),
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

    if (zoomControl === "1")
        map.addControl(
                new Zoom(zoomOptions));

    if (attributionControl === "1")
        map.addControl(
                new Attribution());

    if (fullScreenControl === "1")
        map.addControl(
                new FullScreen(fullScreenOptions));

    if (rotateControl === "1")
        map.addControl(
                new Rotate(rotateControlOptions));


    if (doubleClickZoom === "1")
        map.addInteraction(
                new DoubleClickZoom(doubleClickZoomOptions));

    if (dragRotateAndZoom === "1") {
        const o = dragRotateAndZoomOptions;
        const d = o["duration"];
        switch (o["condition"]) {
            case 'altKeyOnly':
                map.addInteraction(
                        new DragRotateAndZoom({
                            condition: altKeyOnly,
                            duration: d
                        }));
                        break;
            case 'altShiftKeysOnly':
                map.addInteraction(
                        new DragRotateAndZoom({
                            condition: altShiftKeysOnly,
                            duration: d
                        }));
                        break;
            case 'platformModifierKeyOnly':
                map.addInteraction(
                        new DragRotateAndZoom({
                            condition: platformModifierKeyOnly,
                            duration: d
                        }));
                        break;
            case 'primaryAction':
                map.addInteraction(
                        new DragRotateAndZoom({
                            condition: primaryAction,
                            duration: d
                        }));
                        break;
            case 'shiftKeyOnly':
                map.addInteraction(
                        new DragRotateAndZoom({
                            condition: shiftKeyOnly,
                            duration: d
                        }));
                        break;
        }
    }

}


import { getImageSize } from 'react-image-size';
async function getImageHeight(img) {
    try {
        const dimensions = await getImageSize(img);
        return dimensions['height'];
    } catch (error) {
        console.error(error);
    }
}

