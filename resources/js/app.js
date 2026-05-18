import * as bootstrap from 'bootstrap';
import Swiper from 'swiper/bundle';
import AOS from 'aos';
import L from 'leaflet';
import markerIcon from 'leaflet/dist/images/marker-icon.png';
import markerIconRetina from 'leaflet/dist/images/marker-icon-2x.png';
import markerShadow from 'leaflet/dist/images/marker-shadow.png';

window.bootstrap = bootstrap;
window.Swiper = Swiper;
window.AOS = AOS;
window.L = L;

delete L.Icon.Default.prototype._getIconUrl;
L.Icon.Default.mergeOptions({
    iconUrl: markerIcon,
    iconRetinaUrl: markerIconRetina,
    shadowUrl: markerShadow,
});

import './main.js';
import './scripts.js';
