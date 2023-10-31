<?php

// Heading
$_["heading_title"] = "Maps";

// Text
$_["text_extension"] = "Extensions";
$_["text_success"] = "Success: You have modified Maps module!";
$_["text_edit"] = "Edit Maps Module";

// Tab
$_["tab_general"] = "General";
$_["tab_markers"] = "Markers";
$_["tab_size"] = "Size";

// Entry
$_["entry_name"] = "Module Name";
$_["entry_status"] = "Status";
$_["entry_width"] = "Map Width";
$_["entry_height"] = "Map Height";
$_["entry_controls"] = "Controls";

$_["text_options"] = "Options";
$_["text_advanced"] = "Advanced";
$_["text_labels"] = "Labels";
$_["text_classNames"] = "CSS class names";

$_["entry_coordinate_longitude"] = "longitude";
$_["entry_coordinate_latitude"] = "latitude";

$_["text_marker_point"] = "Point";
$_["entry_marker_image"] = "Image";
$_["text_add_marker"] = "Add marker";
$_["text_delete_marker"] = "Delete marker";

$_["text_view_center"] = "Center";

$_["entry_view_projection"] = "projection";
$_["entry_view_projection_undefined"] = "";
$_["entry_view_projection_EPSG_3857"] = "EPSG:3857";
$_["entry_view_projection_EPSG_4326"] = "EPSG:4326";
$_["help_view_projection"] = "The projection.";

$_["entry_view_resolution"] = "resolution";
$_["help_view_resolution"] =
    "The initial resolution for the view. The units are projection units per pixel (e.g. meters per pixel). An alternative to setting this is to set zoom. Layer sources will not be fetched if neither this nor zoom are defined, but they can be set later with #setZoom or #setResolution.";

$_["entry_view_zoom"] = "zoom";
$_["help_view_zoom"] =
    "Only used if resolution is not defined. Zoom level used to calculate the initial resolution for the view.";

$_["entry_item_class"] = "Class";
$_["entry_item_title"] = "Title";

$_["entry_target"] = "target";
$_["help_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';

$_["entry_layers"] = "Layers";

$_["entry_view"] = "View";

$_["entry_TileLayer_className"] = "className";
$_["entry_TileLayer_opacity"] = "opacity";
$_["entry_TileLayer_zIndex"] = "zIndex";
$_["entry_TileLayer_minResolution"] = "minResolution";
$_["entry_TileLayer_maxResolution"] = "maxResolution";
$_["entry_TileLayer_minZoom"] = "minZoom";
$_["entry_TileLayer_maxZoom"] = "maxZoom";
$_["entry_TileLayer_source"] = "source";
$_["entry_TileLayer_useInterimTilesOnError"] = "useInterimTilesOnError";
$_["entry_TileLayer_visible"] = "visible";
$_["entry_TileLayer_preload"] = "preload";
$_["help_TileLayer"] =
    "For layer sources that provide pre-rendered, tiled images in grids that are organized by zoom levels for specific resolutions.";
$_["help_TileLayer_className"] =
    "A CSS class name to set to the layer element.";
$_["help_TileLayer_opacity"] = "Opacity (0, 1).";
$_["help_TileLayer_zIndex"] =
    'The z-index for layer rendering. At rendering time, the layers will be ordered, first by Z-index and then by position. When undefined, a zIndex of 0 is assumed for layers that are added to the map\'s layers collection, or Infinity when the layer\'s setMap() method was used.';
$_["help_TileLayer_minResolution"] =
    "The minimum resolution (inclusive) at which this layer will be visible.";
$_["help_TileLayer_maxResolution"] =
    "The maximum resolution (exclusive) below which this layer will be visible.";
$_["help_TileLayer_minZoom"] =
    "The minimum view zoom level (exclusive) above which this layer will be visible.";
$_["help_TileLayer_maxZoom"] =
    "The maximum view zoom level (inclusive) at which this layer will be visible.";
$_["help_TileLayer_source"] = "Source for this layer.";
$_["help_TileLayer_useInterimTilesOnError"] = "Use interim tiles on error.";
$_["help_TileLayer_visible"] = "Visibility.";
$_["help_TileLayer_preload"] =
    "Preload. Load low-resolution tiles up to <code>preload</code> levels. <code>0</code> means no preloading.";

$_["text_add_layer"] = "Add layer";
$_["text_delete_layer"] = "Delete layer";

$_["entry_source"] = "source";
$_["help_source"] = "";

$_["entry_XYZ_attributions"] = "attributions";
$_["entry_XYZ_attributionsCollapsible"] = "attributionsCollapsible";
$_["entry_XYZ_cacheSize"] = "cacheSize";
$_["entry_XYZ_crossOrigin"] = "crossOrigin";
$_["entry_XYZ_interpolate"] = "interpolate";
$_["entry_XYZ_opaque"] = "opaque";
$_["entry_XYZ_projection"] = "projection";
$_["entry_XYZ_reprojectionErrorThreshold"] = "reprojectionErrorThreshold";
$_["entry_XYZ_maxZoom"] = "maxZoom";
$_["entry_XYZ_minZoom"] = "minZoom";
$_["entry_XYZ_maxResolution"] = "maxResolution";
$_["entry_XYZ_tilePixelRatio"] = "tilePixelRatio";
$_["entry_XYZ_gutter"] = "gutter";
$_["entry_XYZ_url"] = "url";
$_["entry_XYZ_wrapX"] = "wrapX";
$_["entry_XYZ_transition"] = "transition";
$_["entry_XYZ_zDirection"] = "zDirection";
$_["help_XYZ"] =
    "Layer source for tile data with URLs in a set XYZ format that are defined in a URL template.";
$_["help_XYZ_attributions"] = "Attributions.";
$_["help_XYZ_attributionsCollapsible"] = "Attributions are collapsible.";
$_["help_XYZ_cacheSize"] =
    "Initial tile cache size. Will auto-grow to hold at least the number of tiles in the viewport.";
$_["help_XYZ_crossOrigin"] =
    'The <code>crossOrigin</code> attribute for loaded images. Note that you must provide a <code>crossOrigin</code> value if you want to access pixel data with the Canvas renderer. See <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_enabled_image">https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_enabled_image</a> for more detail.';
$_["help_XYZ_interpolate"] =
    "Use interpolated values when resampling. By default, linear interpolation is used when resampling. Set to false to use the nearest neighbor instead.";
$_["help_XYZ_opaque"] = "Whether the layer is opaque.";
$_["help_XYZ_projection"] = "Projection.";
$_["help_XYZ_reprojectionErrorThreshold"] =
    "Maximum allowed reprojection error (in pixels). Higher values can increase reprojection performance, but decrease precision.";
$_["help_XYZ_maxZoom"] = "Optional max zoom level.";
$_["help_XYZ_minZoom"] = "Optional min zoom level.";
$_["help_XYZ_maxResolution"] = "Optional tile grid resolution at level zero.";
$_["help_XYZ_tilePixelRatio"] =
    "The pixel ratio used by the tile service. For example, if the tile service advertizes 256px by 256px tiles but actually sends 512px by 512px images (for retina/hidpi devices) then <code>tilePixelRatio</code> should be set to <code>2</code>.";
$_["help_XYZ_gutter"] =
    "The size in pixels of the gutter around image tiles to ignore. This allows artifacts of rendering at tile edges to be ignored. Supported images should be wider and taller than the tile size by a value of <code>2 x gutter</code>.";
$_["help_XYZ_url"] =
    "URL template. Must include <code>{x}</code>, <code>{y}</code> or <code>{-y}</code>, and <code>{z}</code> placeholders. A <code>{?-?}</code> template pattern, for example <code>subdomain{a-f}.domain.com</code>, may be used instead of defining each one separately in the <code>urls</code> option.";
$_["help_XYZ_wrapX"] = "Whether to wrap the world horizontally.";
$_["help_XYZ_transition"] =
    "Duration of the opacity transition for rendering. To disable the opacity transition, pass <code>transition: 0</code>.";
$_["help_XYZ_zDirection"] =
    "Choose whether to use tiles with a higher or lower zoom level when between integer zoom levels.";

$_["entry_OSM_attributions"] = "attributions";
$_["entry_OSM_attributionsCollapsible"] = "attributionsCollapsible";
$_["entry_OSM_cacheSize"] = "cacheSize";
$_["entry_OSM_crossOrigin"] = "crossOrigin";
$_["entry_OSM_interpolate"] = "interpolate";
$_["entry_OSM_opaque"] = "opaque";
$_["entry_OSM_projection"] = "projection";
$_["entry_OSM_reprojectionErrorThreshold"] = "reprojectionErrorThreshold";
$_["entry_OSM_maxZoom"] = "maxZoom";
$_["entry_OSM_minZoom"] = "minZoom";
$_["entry_OSM_maxResolution"] = "maxResolution";
$_["entry_OSM_tilePixelRatio"] = "tilePixelRatio";
$_["entry_OSM_gutter"] = "gutter";
$_["entry_OSM_url"] = "url";
$_["entry_OSM_wrapX"] = "wrapX";
$_["entry_OSM_transition"] = "transition";
$_["entry_OSM_zDirection"] = "zDirection";
$_["help_OSM"] = "Layer source for the OpenStreetMap tile server.";
$_["help_OSM_attributions"] = "Attributions.";
$_["help_OSM_attributionsCollapsible"] = "Attributions are collapsible.";
$_["help_OSM_cacheSize"] =
    "Initial tile cache size. Will auto-grow to hold at least the number of tiles in the viewport.";
$_["help_OSM_crossOrigin"] =
    'The <code>crossOrigin</code> attribute for loaded images. Note that you must provide a <code>crossOrigin</code> value if you want to access pixel data with the Canvas renderer. See <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_enabled_image">https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_enabled_image</a> for more detail.';
$_["help_OSM_interpolate"] =
    "Use interpolated values when resampling. By default, linear interpolation is used when resampling. Set to false to use the nearest neighbor instead.";
$_["help_OSM_opaque"] = "Whether the layer is opaque.";
$_["help_OSM_projection"] = "Projection.";
$_["help_OSM_reprojectionErrorThreshold"] =
    "Maximum allowed reprojection error (in pixels). Higher values can increase reprojection performance, but decrease precision.";
$_["help_OSM_maxZoom"] = "Optional max zoom level.";
$_["help_OSM_minZoom"] = "Optional min zoom level.";
$_["help_OSM_maxResolution"] = "Optional tile grid resolution at level zero.";
$_["help_OSM_tilePixelRatio"] =
    "The pixel ratio used by the tile service. For example, if the tile service advertizes 256px by 256px tiles but actually sends 512px by 512px images (for retina/hidpi devices) then <code>tilePixelRatio</code> should be set to <code>2</code>.";
$_["help_OSM_gutter"] =
    "The size in pixels of the gutter around image tiles to ignore. This allows artifacts of rendering at tile edges to be ignored. Supported images should be wider and taller than the tile size by a value of <code>2 x gutter</code>.";
$_["help_OSM_url"] =
    "URL template. Must include <code>{x}</code>, <code>{y}</code> or <code>{-y}</code>, and <code>{z}</code> placeholders. A <code>{?-?}</code> template pattern, for example <code>subdomain{a-f}.domain.com</code>, may be used instead of defining each one separately in the <code>urls</code> option.";
$_["help_OSM_wrapX"] = "Whether to wrap the world horizontally.";
$_["help_OSM_transition"] =
    "Duration of the opacity transition for rendering. To disable the opacity transition, pass <code>transition: 0</code>.";
$_["help_OSM_zDirection"] =
    "Choose whether to use tiles with a higher or lower zoom level when between integer zoom levels.";

$_["entry_BingMaps_cacheSize"] = "cacheSize";
$_["entry_BingMaps_hidpi"] = "hidpi";
$_["entry_BingMaps_culture"] = "culture";
$_["entry_BingMaps_interpolate"] = "interpolate";
$_["entry_BingMaps_reprojectionErrorThreshold"] = "reprojectionErrorThreshold";
$_["entry_BingMaps_wrapX"] = "wrapX";
$_["entry_BingMaps_transition"] = "transition";
$_["entry_BingMaps_zDirection"] = "zDirection";
$_["entry_BingMaps_placeholderTiles"] = "placeholderTiles";
$_["entry_BingMaps_key"] = "key";
$_["entry_BingMaps_imagerySet"] = "imagerySet";
$_["entry_BingMaps_maxZoom"] = "maxZoom";
$_["help_BingMaps"] = "Layer source for Bing Maps tile data.";
$_["help_BingMaps_cacheSize"] =
    "Initial tile cache size. Will auto-grow to hold at least the number of tiles in the viewport.";
$_["help_BingMaps_hidpi"] = "If true hidpi tiles will be requested.";
$_["help_BingMaps_culture"] = "Culture code.";
$_["help_BingMaps_interpolate"] =
    "Use interpolated values when resampling. By default, linear interpolation is used when resampling. Set to false to use the nearest neighbor instead.";
$_["help_BingMaps_reprojectionErrorThreshold"] =
    "Maximum allowed reprojection error (in pixels). Higher values can increase reprojection performance, but decrease precision.";
$_["help_BingMaps_wrapX"] = "Whether to wrap the world horizontally.";
$_["help_BingMaps_transition"] =
    "Duration of the opacity transition for rendering. To disable the opacity transition, pass transition: 0.";
$_["help_BingMaps_zDirection"] =
    "Choose whether to use tiles with a higher or lower zoom level when between integer zoom levels. See getZForResolution.";
$_["help_BingMaps_placeholderTiles"] =
    "Whether to show BingMaps placeholder tiles when zoomed past the maximum level provided in an area. When false, requests beyond the maximum zoom level will return no tile. When true, the placeholder tile will be returned. When not set, the default behaviour of the imagery set takes place, which is unique for each imagery set in BingMaps.";
$_["help_BingMaps_key"] =
    'Bing Maps API key. Get yours at <a href="https://www.bingmapsportal.com/">https://www.bingmapsportal.com/</a>.';
$_["help_BingMaps_imagerySet"] = "Type of imagery.";
$_["help_BingMaps_maxZoom"] =
    'Max zoom. Default is what\'s advertized by the BingMaps service.';

$_["entry_source_attributions"] = "attributions";
$_["help_source_attributions"] = "";

$_["entry_source_url"] = "";
$_["help_source_url"] = "";

$_["text_Attribution"] = "Attribution";
$_["entry_Attribution_collapsible"] = "collapsible";
$_["entry_Attribution_collapsible_true"] = "Yes";
$_["entry_Attribution_collapsible_false"] = "No";
$_["entry_Attribution_collapsed"] = "collapsed";
$_["entry_Attribution_target"] = "target";
$_["entry_Attribution_className"] = "className";
$_["entry_Attribution_expandClassName"] = "expandClassName";
$_["entry_Attribution_collapseClassName"] = "collapseClassName";
$_["help_Attribution"] =
    "Control to show all the attributions associated with the layer sources in the map.";
$_["help_Attribution_collapsible"] =
    "Specify if attributions can be collapsed. If not specified, sources control this behavior with their <code>attributionsCollapsible</code> setting.";
$_["help_Attribution_collapsed"] =
    "Specify if attributions should be collapsed at startup.";
$_["help_Attribution_label"] =
    "Instead of text, also an element (e.g. a span element) can be used.";
$_["help_Attribution_collapseLabel"] =
    "Instead of text, also an element (e.g. a span element) can be used.";
$_["help_Attribution_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_Attribution_className"] = "CSS class name.";
$_["help_Attribution_expandClassName"] =
    'CSS class name for the expanded attributions button. Defaults to className + \'-expand\'.';
$_["help_Attribution_collapseClassName"] =
    'CSS class name for the collapsed attributions button. Defaults to className + \'-collapse\'.';

$_["text_FullScreen"] = "FullScreen";
$_["entry_FullScreen_keys"] = "keys";
$_["entry_FullScreen_source"] = "source";
$_["entry_FullScreen_target"] = "target";
$_["entry_FullScreen_className"] = "className";
$_["entry_FullScreen_activeClassName"] = "activeClassName";
$_["entry_FullScreen_inactiveClassName"] = "inactiveClassName";
$_["help_FullScreen"] =
    "Provides a button that when clicked fills up the full screen with the map.";
$_["help_FullScreen_keys"] = "Full keyboard access.";
$_["help_FullScreen_source"] =
    "The element to be displayed fullscreen. When not provided, the element containing the map viewport will be displayed fullscreen.";
$_["help_FullScreen_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_FullScreen_className"] = "CSS class name.";
$_["help_FullScreen_activeClassName"] =
    'CSS class name for the button when full-screen is active. Defaults to className + \'-true\'.';
$_["help_FullScreen_inactiveClassName"] =
    'CSS class name for the button when full-screen is inactive. Defaults to className + \'-false\'.';

$_["text_MousePosition"] = "MousePosition";
$_["entry_MousePosition_target"] = "target";
$_["entry_MousePosition_coordinateFormat"] = "coordinateFormat";
$_["entry_MousePosition_projection"] = "projection";
$_["entry_MousePosition_placeholder"] = "placeholder";
$_["entry_MousePosition_wrapX"] = "wrapX";
$_["entry_MousePosition_className"] = "className";
$_["help_MousePosition"] =
    "A control to show the 2D coordinates of the mouse cursor. On touch devices, which usually do not have a mouse cursor, the coordinates of the currently touched position are shown.";
$_["help_MousePosition_coordinateFormat"] = "Coordinate format.";
$_["help_MousePosition_projection"] =
    "Projection. Default is the view projection.";
$_["help_MousePosition_placeholder"] =
    'Markup to show when the mouse position is not available (e.g. when the pointer leaves the map viewport). By default, a non-breaking space is rendered initially and the last position is retained when the mouse leaves the viewport. When a string is provided (e.g. \'no position\' or \'\' for an empty string) it is used as a placeholder.';
$_["help_MousePosition_wrapX"] =
    'Wrap the world horizontally on the projection\'s antimeridian, if it is a global projection.';
$_["help_MousePosition_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_MousePosition_className"] = "CSS class name.";

$_["text_OverviewMap"] = "OverviewMap";
$_["entry_OverviewMap_collapsed"] = "collapsed";
$_["entry_OverviewMap_collapsible"] = "collapsible";
$_["entry_OverviewMap_layers"] = "layers";
$_["entry_OverviewMap_rotateWithView"] = "rotateWithView";
$_["entry_OverviewMap_target"] = "target";
$_["entry_OverviewMap_className"] = "className";
$_["help_OverviewMap"] =
    "Create a new control with a map acting as an overview map for another defined map.";
$_["help_OverviewMap_collapsed"] =
    "Whether the control should start collapsed or not (expanded).";
$_["help_OverviewMap_label"] =
    "Text label to use for the collapsed overviewmap button. Instead of text, also an element (e.g. a span element) can be used.";
$_["help_OverviewMap_collapseLabel"] =
    "Text label to use for the expanded overviewmap button. Instead of text, also an element (e.g. a span element) can be used.";
$_["help_OverviewMap_collapsible"] =
    "Whether the control can be collapsed or not.";
$_["help_OverviewMap_layers"] = "Layers for the overview map.";
$_["help_OverviewMap_rotateWithView"] =
    "Whether the control view should rotate with the main map view.";
$_["help_OverviewMap_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_OverviewMap_className"] = "CSS class name.";

$_["text_Rotate"] = "Rotate";
$_["entry_Rotate_duration"] = "duration";
$_["entry_Rotate_autoHide"] = "autoHide";
$_["entry_Rotate_target"] = "target";
$_["entry_Rotate_className"] = "className";
$_["entry_Rotate_compassClassName"] = "compassClassName";
$_["help_Rotate"] =
    "A button control to reset rotation to 0. To style this control use css selector <code>.ol-rotate</code>. A <code>.ol-hidden</code> css selector is added to the button when the rotation is 0.";
$_["help_Rotate_duration"] = "Animation duration in milliseconds.";
$_["help_Rotate_autoHide"] = "Hide the control when rotation is 0.";
$_["help_Rotate_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_Rotate_className"] = "CSS class name.";
$_["help_Rotate_compassClassName"] = "CSS class name for the compass.";

$_["text_ScaleLine"] = "ScaleLine";
$_["entry_ScaleLine_minWidth"] = "minWidth";
$_["entry_ScaleLine_maxWidth"] = "maxWidth";
$_["entry_ScaleLine_target"] = "target";
$_["entry_ScaleLine_bar"] = "bar";
$_["entry_ScaleLine_steps"] = "steps";
$_["entry_ScaleLine_text"] = "text";
$_["entry_ScaleLine_dpi"] = "dpi";
$_["entry_ScaleLine_className"] = "className";
$_["help_ScaleLine"] =
    "A control displaying rough y-axis distances, calculated for the center of the viewport. For conformal projections (e.g. EPSG:3857, the default view projection in OpenLayers), the scale is valid for all directions. No scale line will be shown when the y-axis distance of a pixel at the viewport center cannot be calculated in the view projection.";
$_["help_ScaleLine_minWidth"] =
    "Minimum width in pixels at the OGC default dpi. The width will be adjusted to match the dpi used.";
$_["help_ScaleLine_maxWidth"] =
    "Maximum width in pixels at the OGC default dpi. The width will be adjusted to match the dpi used.";
$_["help_ScaleLine_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_ScaleLine_bar"] = "Render scalebars instead of a line.";
$_["help_ScaleLine_steps"] =
    "Number of steps the scalebar should use. Use even numbers for best results.";
$_["help_ScaleLine_text"] = "Render the text scale above of the scalebar.";
$_["help_ScaleLine_dpi"] =
    "Dpi of output device such as printer. If undefined the OGC default screen pixel size of 0.28mm will be assumed.";
$_["help_ScaleLine_className"] =
    "CSS class name. The default is ol-scale-bar when configured with bar: true. Otherwise the default is ol-scale-line.";

$_["text_Zoom"] = "Zoom";
$_["entry_Zoom_duration"] = "duration";
$_["entry_Zoom_delta"] = "delta";
$_["entry_Zoom_target"] = "target";
$_["entry_Zoom_className"] = "className";
$_["entry_Zoom_zoomInClassName"] = "zoomInClassName";
$_["entry_Zoom_zoomOutClassName"] = "zoomOutClassName";
$_["help_Zoom"] =
    "A control with 2 buttons, one for zoom in and one for zoom out.";
$_["help_Zoom_duration"] = "Animation duration in milliseconds.";
$_["help_Zoom_delta"] = "The zoom delta applied on each click.";
$_["help_Zoom_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_Zoom_className"] = 'CSS class name. Defaults to \'ol-zoom\'.';
$_["help_Zoom_zoomInClassName"] =
    'CSS class name for the zoom-in button. Defaults to className + \'-in\'.';
$_["help_Zoom_zoomOutClassName"] =
    'CSS class name for the zoom-out button. Defaults to className + \'-out\'.';

$_["text_ZoomToExtent"] = "ZoomToExtent";
$_["entry_ZoomToExtent_target"] = "target";
$_["entry_ZoomToExtent_className"] = "className";
$_["help_ZoomToExtent"] =
    "A button control which, when pressed, changes the map view to a specific extent.";
$_["help_ZoomToExtent_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_ZoomToExtent_className"] = "CSS class name.";

$_["text_ZoomSlider"] = "ZoomSlider";
$_["entry_ZoomSlider_duration"] = "duration";
$_["entry_ZoomSlider_target"] = "target";
$_["entry_ZoomSlider_className"] = "className";
$_["help_ZoomSlider"] = "A slider type of control for zooming.";
$_["help_ZoomSlider_duration"] = "Animation duration in milliseconds.";
$_["help_ZoomSlider_target"] =
    'Specify a target if you want the control to be rendered outside of the map\'s viewport.';
$_["help_ZoomSlider_className"] = "CSS class name.";

$_["text_add_control"] = "Add control";
$_["text_delete_control"] = "Delete control";

$_["entry_events_condition"] = "condition";
$_["entry_events_condition_always"] = "always";
$_["entry_events_condition_noModifierKeys"] = "noModifierKeys";
$_["entry_events_condition_altKeyOnly"] = "altKeyOnly";
$_["entry_events_condition_altShiftKeysOnly"] = "altShiftKeysOnly";
$_["entry_events_condition_platformModifierKeyOnly"] =
    "platformModifierKeyOnly";
$_["entry_events_condition_primaryAction"] = "primaryAction";
$_["entry_events_condition_shiftKeyOnly"] = "shiftKeyOnly";
$_["help_events_condition_noModifierKeys"] =
    "If no modifier key (alt-, shift- or platform-modifier-key) is pressed.";
$_["help_events_condition_altKeyOnly"] = "If only the alt-key is pressed";
$_["help_events_condition_altShiftKeysOnly"] =
    "If only the alt-key and shift-key is pressed";
$_["help_events_condition_platformModifierKeyOnly"] =
    "If only the platform-modifier-key (the meta-key on Mac, ctrl-key otherwise) is pressed";
$_["help_events_condition_shiftKeyOnly"] = "If only the shift-key is pressed";
$_["help_events_condition_primaryAction"] =
    'If the event originates from a primary pointer in contact with the surface or if the left mouse button is pressed. See <a href="https://www.w3.org/TR/pointerevents/#button-states">https://www.w3.org/TR/pointerevents/#button-states</a>.';

$_["entry_source_url"] = "Url";

$_["entry_interactions"] = "Interactions";

$_["text_kinetic"] = "Kinetic";
$_["entry_kinetic_decay"] = "decay";
$_["entry_kinetic_minVelocity"] = "minVelocity";
$_["entry_kinetic_delay"] = "delay";
$_["help_kinetic_decay"] = "Rate of decay (must be negative).";
$_["help_kinetic_minVelocity"] = "Minimum velocity (pixels/millisecond).";
$_["help_kinetic_delay"] =
    "Delay to consider to calculate the kinetic initial values (milliseconds).";

$_["text_DoubleClickZoom"] = "DoubleClickZoom";
$_["entry_DoubleClickZoom_duration"] = "duration";
$_["entry_DoubleClickZoom_delta"] = "delta";
$_["help_DoubleClickZoom"] =
    "Allows the user to zoom by double-clicking on the map.";
$_["help_DoubleClickZoom_duration"] = "Animation duration in milliseconds.";
$_["help_DoubleClickZoom_delta"] =
    "The zoom delta applied on each double click.";

$_["text_DragRotateAndZoom"] = "DragRotateAndZoom";
$_["entry_DragRotateAndZoom_duration"] = "duration";
$_["help_DragRotateAndZoom"] =
    "Allows the user to zoom and rotate the map by clicking and dragging on the map. This interaction is only supported for mouse devices.";
$_["help_DragRotateAndZoom_duration"] = "Animation duration in milliseconds.";

$_["text_DragRotate"] = "DragRotate";
$_["entry_DragRotate_duration"] = "duration";
$_["help_DragRotate"] =
    "Allows the user to rotate the map by clicking and dragging on the map. This interaction is only supported for mouse devices.";
$_["help_DragRotate_duration"] = "Animation duration in milliseconds.";

$_["text_DragAndDrop"] = "DragAndDrop";
$_["entry_DragAndDrop_projection"] = "projection";
$_["help_DragAndDrop"] = "Handles input of vector data by drag and drop.";
$_["help_DragAndDrop_projection"] =
    'Target projection. By default, the map\'s view\'s projection is used.';

$_["text_KeyboardZoom"] = "KeyboardZoom";
$_["entry_KeyboardZoom_duration"] = "duration";
$_["entry_KeyboardZoom_delta"] = "delta";
$_["help_KeyboardZoom"] =
    "Allows the user to zoom the map using keyboard + and -.";
$_["help_KeyboardZoom_duration"] = "Animation duration in milliseconds.";
$_["help_KeyboardZoom_delta"] = "The zoom level delta on each key press.";

$_["text_KeyboardPan"] = "KeyboardPan";
$_["entry_KeyboardPan_duration"] = "duration";
$_["entry_KeyboardPan_pixelDelta"] = "pixelDelta";
$_["help_KeyboardPan"] =
    "Allows the user to pan the map using keyboard arrows.";
$_["help_KeyboardPan_duration"] = "Animation duration in milliseconds.";
$_["help_KeyboardPan_pixelDelta"] =
    "The amount of pixels to pan on each key press.";

$_["text_DragPan"] = "DragPan";
$_["entry_DragPan_onFocusOnly"] = "onFocusOnly";
$_["help_DragPan"] = "Allows the user to pan the map by dragging the map.";
$_["help_DragPan_onFocusOnly"] =
    'When the map\'s target has a tabindex attribute set, the interaction will only handle events when the map has the focus.';

$_["text_MouseWheelZoom"] = "MouseWheelZoom";
$_["entry_MouseWheelZoom_duration"] = "duration";
$_["entry_MouseWheelZoom_onFocusOnly"] = "onFocusOnly";
$_["entry_MouseWheelZoom_maxDelta"] = "maxDelta";
$_["entry_MouseWheelZoom_timeout"] = "timeout";
$_["entry_MouseWheelZoom_useAnchor"] = "useAnchor";
$_["entry_MouseWheelZoom_constrainResolution"] = "constrainResolution";
$_["help_MouseWheelZoom"] =
    "Allows the user to zoom the map by scrolling the mouse wheel.";
$_["help_MouseWheelZoom_duration"] = "Animation duration in milliseconds.";
$_["help_MouseWheelZoom_onFocusOnly"] =
    'When the map\'s target has a attribute set, the interaction will only handle events when the map has the focus.';
$_["help_MouseWheelZoom_maxDelta"] = "Maximum mouse wheel delta.";
$_["help_MouseWheelZoom_timeout"] =
    "Mouse wheel timeout duration in milliseconds.";
$_["help_MouseWheelZoom_useAnchor"] =
    'Enable zooming using the mouse\'s location as the anchor. When set to false, zooming in and out will zoom to the center of the screen instead of zooming on the mouse\'s location.';
$_["help_MouseWheelZoom_constrainResolution"] =
    "If true, the mouse wheel zoom event will always animate to the closest zoom level after an interaction; false means intermediary zoom levels are allowed.";

$_["entry_PinchRotate_duration"] = "duration";
$_["entry_PinchRotate_threshold"] = "threshold";
$_["help_PinchRotate"] =
    "Allows the user to rotate the map by twisting with two fingers on a touch screen.";
$_["help_PinchRotate_duration"] =
    "The duration of the animation in milliseconds.";
$_["help_PinchRotate_threshold"] =
    "Minimal angle in radians to start a rotation.";

$_["entry_PinchZoom_duration"] = "duration";
$_["help_PinchZoom"] =
    "Allows the user to zoom the map by pinching with two fingers on a touch screen.";
$_["help_PinchZoom_duration"] = "Animation duration in milliseconds.";

$_["entry_DragZoom_duration"] = "duration";
$_["entry_DragZoom_out"] = "out";
$_["entry_DragZoom_minArea"] = "minArea";
$_["entry_DragZoom_className"] = "className";
$_["help_DragZoom"] =
    "Allows the user to zoom the map by clicking and dragging on the map.";
$_["help_DragZoom_duration"] = "Animation duration in milliseconds.";
$_["help_DragZoom_out"] = "Use interaction for zooming out.";
$_["help_DragZoom_minArea"] =
    "The minimum area of the box in pixel, this value is used by the parent default boxEndCondition function.";
$_["help_DragZoom_className"] = "CSS class name for styling the box.";

$_["text_add_interaction"] = "Add interaction";
$_["text_delete_interaction"] = "Delete interaction";

$_["help_gc"] = "Please enter location geocode manually.";

// Error
$_["error_warning"] = "Warning: Please check the form carefully for errors!";
$_["error_permission"] =
    "Warning: You do not have permission to modify Maps module!";
$_["error_name"] = "Module Name must be between 3 and 64 characters!";
$_["error_width"] = "Width required!";
$_["error_height"] = "Height required!";
