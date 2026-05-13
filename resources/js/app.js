/* ============================================================
 * Frontend entry point — собирается Vite'ом.
 *
 * Все vendor-зависимости подтягиваются из node_modules:
 *   - bootstrap   (модалки, dropdown'ы, collapse через data-bs-*)
 *   - swiper      (главный слайдер, акции, новости)
 *   - aos         (анимации на скролл)
 *   - leaflet     (карта покрытия)
 *
 * main.js — пользовательский скрипт вёрстки, ожидает глобальные
 * Swiper / AOS / L. Делаем их доступными через window перед
 * подключением main.js.
 * ============================================================ */

// Bootstrap: компоненты через data-атрибуты подхватятся автоматически
// (modal, collapse, dropdown, tab, tooltip, popover, scrollspy, toast).
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// Swiper — берём bundle со всеми модулями (Navigation, Pagination, Autoplay и т.п.)
import Swiper from 'swiper/bundle';
window.Swiper = Swiper;

// AOS — animate on scroll
import AOS from 'aos';
window.AOS = AOS;

// Leaflet — карта
import L from 'leaflet';
window.L = L;

// Иконки маркеров Leaflet — без этого пути к marker-icon.png ломаются
// при сборке через Vite. Подменяем дефолтные URL'ы на ассеты из пакета.
import markerIcon from 'leaflet/dist/images/marker-icon.png';
import markerIconRetina from 'leaflet/dist/images/marker-icon-2x.png';
import markerShadow from 'leaflet/dist/images/marker-shadow.png';

delete L.Icon.Default.prototype._getIconUrl;
L.Icon.Default.mergeOptions({
    iconUrl: markerIcon,
    iconRetinaUrl: markerIconRetina,
    shadowUrl: markerShadow,
});

// Подключаем основной скрипт вёрстки.
// Внутри он уже ждёт DOMContentLoaded и использует Swiper/AOS/L.
import './main.js';
