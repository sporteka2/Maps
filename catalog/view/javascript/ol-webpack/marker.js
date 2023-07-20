import Feature from 'ol/Feature';
import Point from 'ol/geom/Point';
import VectorSource from 'ol/source/Vector';
import {Icon, Style} from 'ol/style';
import {Vector as VectorLayer} from 'ol/layer';

export default function getMarker(point) {

    const iconFeature = new Feature({
        geometry: new Point(point)
    });

    const img_height = 41;
    const iconStyle = new Style({
        image: new Icon({
            anchor: [0.5, img_height],
            anchorXUnits: 'fraction',
            anchorYUnits: 'pixels',
            src: 'extension/ol/catalog/view/javascript/marker.svg'
        })
    });

    iconFeature.setStyle(iconStyle);

    const vectorSource = new VectorSource({
        features: [iconFeature]
    });

    return new VectorLayer({
        source: vectorSource
    });
}