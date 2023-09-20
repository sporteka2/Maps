import './style.css';
import {Map, View} from 'ol';
import TileLayer from 'ol/layer/Tile';
import XYZ from 'ol/source/XYZ';
import OSM from 'ol/source/OSM.js';

import {always,
        noModifierKeys,
        altKeyOnly,
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
import MousePosition from 'ol/control/MousePosition.js';
import OverviewMap from 'ol/control/OverviewMap.js';
import ScaleLine from 'ol/control/ScaleLine.js';
import ZoomSlider from 'ol/control/ZoomSlider.js';
import ZoomToExtent from 'ol/control/ZoomToExtent.js';

import {defaults as defaultsInteraction} from 'ol/interaction/defaults';
import DoubleClickZoom from 'ol/interaction/DoubleClickZoom.js';
import DragAndDrop from 'ol/interaction/DragAndDrop.js';
import DragRotate from 'ol/interaction/DragRotate.js';
import DragRotateAndZoom from 'ol/interaction/DragRotateAndZoom.js';
import DragZoom from 'ol/interaction/DragZoom.js';
import KeyboardPan from 'ol/interaction/KeyboardPan.js';
import KeyboardZoom from 'ol/interaction/KeyboardZoom.js';
import MouseWheelZoom from 'ol/interaction/MouseWheelZoom.js';
import PinchRotate from 'ol/interaction/PinchRotate.js';
import PinchZoom from 'ol/interaction/PinchZoom.js';
import DragPan from 'ol/interaction/DragPan.js';

import BingMaps from 'ol/source/BingMaps.js';

export async function show(m) {
    
    let layers = [];
    
    if (m.layer)
    for (const [id, layer] of Object.entries(m.layer)) {

        const source = m.source[id];
        if (layer.class === "TileLayer") {

            let l = new TileLayer(layer.options);

            switch (source.class) {
                case "XYZ":
                    l.setSource(new XYZ(source.options));
                    break;

                case "OSM":
                    l.setSource(new OSM(source.options));
                    break;

                case "BingMaps":
                    l.setSource(new BingMaps(source.options));
                    break;

                default:

                    break;
            }

            layers.push(l);
        }
    }

    const map = new Map({
        controls: defaults({
            zoom: false,
            attribution: false,
            rotate: false,
        }),
        interactions: defaultsInteraction({
            altShiftDragRotate: false,
            shiftDragZoom: false,
            doubleClickZoom: false,
            dragAndDrop: false,
            keyboard: false,
            mouseWheelZoom: false,
            dragPan: false,
            pinchRotate: false,
            pinchZoom: false,
        }),
        target: m.id,
        layers: layers,
        view: new View(m.view.options)
    });

    // <editor-fold desc="control" defaultstate="collapsed">

    if (m.control)
    for (const c of Object.values(m.control)) {
        switch (c.class) {
            case 'Attribution':
                map.addControl(new Attribution(c.options));
                break;
            case 'FullScreen':
                map.addControl(new FullScreen(c.options));
                break;
            case 'MousePosition':
                map.addControl(new MousePosition(c.options));
                break;
            case 'OverviewMap':
                map.addControl(new OverviewMap(c.options));
                break;
            case 'Rotate':
                map.addControl(new Rotate(c.options));
                break;
            case 'ScaleLine':
                map.addControl(new ScaleLine(c.options));
                break;
            case 'Zoom':
                map.addControl(new Zoom(c.options));
                break;
            case 'ZoomSlider':
                map.addControl(new ZoomSlider(c.options));
                break;
            case 'ZoomToExtent':
                map.addControl(new ZoomToExtent(c.options));
                break;
            default:

                break;
        }
    }

    // </editor-fold>

    // <editor-fold desc="interaction" defaultstate="collapsed">

    const c = {
        always: always,
        noModifierKeys: noModifierKeys,
        altKeyOnly: altKeyOnly,
        altShiftKeysOnly: altShiftKeysOnly,
        platformModifierKeyOnly: platformModifierKeyOnly,
        primaryAction: primaryAction,
        shiftKeyOnly: shiftKeyOnly
    };

    if (m.interaction)
    for (const i of Object.values(m.interaction)) {

        i.options.condition = c[i.options.condition];
        switch (i.class) {
            case 'DoubleClickZoom':
                map.addInteraction(new DoubleClickZoom(i.options));
                break;
            case 'DragAndDrop':
                map.addInteraction(new DragAndDrop(i.options));
                break;
            case 'DragPan':
                map.addInteraction(new DragPan(i.options));
                break;
            case 'DragRotate':
                map.addInteraction(new DragRotate(i.options));
                break;
            case 'DragRotateAndZoom':
                map.addInteraction(new DragRotateAndZoom(i.options));
                break;
            case 'DragZoom':
                map.addInteraction(new DragZoom(i.options));
                break;
            case 'KeyboardPan':
                map.addInteraction(new KeyboardPan(i.options));
                break;
            case 'KeyboardZoom':
                map.addInteraction(new KeyboardZoom(i.options));
                break;
            case 'MouseWheelZoom':
                map.addInteraction(new MouseWheelZoom(i.options));
                break;
            case 'PinchRotate':
                map.addInteraction(new PinchRotate(i.options));
                break;
            case 'PinchZoom':
                map.addInteraction(new PinchZoom(i.options));
                break;
            default:

                break;
        }
    }

    // </editor-fold>

    if (m.marker)
    for (const mr of Object.values(m.marker)) {

        const point = mr.point;
        
        const {default: getMarker} = await import('./marker.js');

        const getImgHeight = (src) => {
            return new Promise((resolve, reject) => {
                const img = new Image();
                img.onload = () => resolve(img.naturalHeight);
                img.onerror = (err) => reject(err);
                img.src = src;
            });
        };

        const marker = getMarker(point, mr.img,
                await getImgHeight(mr.img));

        map.addLayer(marker);
    }
}
