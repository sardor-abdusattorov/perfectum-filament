document.addEventListener("DOMContentLoaded", function () {
  const faqItems = document.querySelectorAll(".new-faq__lists ul li a");

  faqItems.forEach(function (item) {
    item.addEventListener("click", function (e) {
      e.preventDefault();

      const parent = this.parentElement;
      const answer = parent.querySelector(".answer");

      if (parent.classList.contains("active")) {
        parent.classList.remove("active");
        answer.style.display = "none";
      } else {
        parent.classList.add("active");
        answer.style.display = "block";
      }
    });
  });

  // Accordion
  try {
    function Accordion(el, multiple) {
      this.el = el;
      this.multiple = multiple || false;
      if (!el) return;
      el.querySelectorAll(".link").forEach(function (link) {
        link.addEventListener("click", this._toggle.bind(this));
      }, this);
    }
    Accordion.prototype._toggle = function (e) {
      var link = e.currentTarget;
      var parent = link.parentElement;
      var next = link.nextElementSibling;
      if (!next) return;
      var isOpen = next.style.display === "block";
      if (!this.multiple) {
        this.el
          .querySelectorAll(
            ".submenu, .submenu2, .accordion__content, .accordion__content2",
          )
          .forEach(function (sub) {
            if (sub !== next) {
              sub.style.display = "none";
              sub.parentElement.classList.remove("open");
            }
          });
      }
      next.style.display = isOpen ? "none" : "block";
      parent.classList.toggle("open", !isOpen);
    };
    var acc1 = document.getElementById("accordion");
    var acc2 = document.getElementById("accordion-2");
    if (acc1) new Accordion(acc1, false);
    if (acc2) new Accordion(acc2, false);
  } catch (e) {}

  // Swipe drawer
  try {
    document.querySelectorAll("[data-swipe-drawer]").forEach(function (drawer) {
      var panelSel = "[data-swipe-panel]";
      var openClass = drawer.dataset.swipeOpenClass;
      var startX = 0,
        offsetX = 0,
        diffX = 0,
        panelWidth = 0,
        allowClick = true;

      drawer.addEventListener("touchstart", function (e) {
        diffX = 0;
        panelWidth = drawer.querySelector(panelSel).offsetWidth;
        startX = e.touches[0].pageX;
        offsetX = drawer.classList.contains(openClass) ? 0 : -panelWidth;
        allowClick = false;
        setTimeout(function () {
          allowClick = true;
        }, 250);
        drawer.style.visibility = "visible";
      });
      drawer.addEventListener("touchmove", function (e) {
        diffX = e.touches[0].pageX - startX;
        var pos = offsetX + diffX;
        if (pos >= -panelWidth && pos <= 0) {
          var panel = drawer.querySelector(panelSel);
          var overlay = drawer.querySelector("[data-swipe-overlay]");
          panel.style.transform = "translate3d(" + pos + "px,0,0)";
          panel.style.transitionDuration = "0s";
          if (overlay) {
            overlay.style.opacity = 1 - (-1 / panelWidth) * pos;
            overlay.style.transitionDuration = "0s";
          }
        }
      });
      drawer.addEventListener("touchend", function () {
        var open = false,
          close = false;
        if (!allowClick) {
          if (diffX > 20) open = true;
          else if (diffX < -20) close = true;
        }
        if (open || diffX >= panelWidth / 2) {
          drawer.classList.add(openClass);
          document.body.classList.add("no-scroll");
        } else if (close || diffX < -panelWidth / 2) {
          drawer.classList.remove(openClass);
          document.body.classList.remove("no-scroll");
        }
        drawer.removeAttribute("style");
        var panel = drawer.querySelector(panelSel);
        if (panel) panel.removeAttribute("style");
        var overlay = drawer.querySelector("[data-swipe-overlay]");
        if (overlay) overlay.removeAttribute("style");
      });
    });

    document
      .querySelectorAll("[data-swipe-overlay], [data-swipe-close]")
      .forEach(function (el) {
        el.addEventListener("click", function (e) {
          e.preventDefault();
          document
            .querySelectorAll("[data-swipe-drawer]")
            .forEach(function (drawer) {
              drawer.classList.remove(drawer.dataset.swipeOpenClass);
            });
          document.body.classList.remove("no-scroll");
        });
      });

    document.querySelectorAll("[data-swipe-open]").forEach(function (el) {
      el.addEventListener("click", function (e) {
        e.preventDefault();
        document
          .querySelectorAll("[data-swipe-drawer]")
          .forEach(function (drawer) {
            drawer.classList.add(drawer.dataset.swipeOpenClass);
          });
        document.body.classList.add("no-scroll");
      });
    });
  } catch (e) {}

  // Burger menu
  var burgerMenu = document.getElementById("burger-menu");
  var mobileMenu = document.querySelector(".mobile-menu");

  if (burgerMenu) {
    burgerMenu.addEventListener("click", function () {
      var isOpen = burgerMenu.classList.toggle("open");
      if (isOpen) {
        if (mobileMenu) mobileMenu.classList.add("active");
        document.body.classList.add("scroll-disabled");
      } else {
        if (mobileMenu) mobileMenu.classList.remove("active");
        document.body.classList.remove("scroll-disabled");
        document
          .querySelectorAll(".mobile-menu__menu-dropdown")
          .forEach(function (d) {
            d.classList.remove("open");
            d.style.maxHeight = "";
          });
        document
          .querySelectorAll(".mobile-menu__menu li.active")
          .forEach(function (i) {
            i.classList.remove("active");
          });
      }
    });
  }

  // Mobile dropdown
  document.querySelectorAll("a[data-get-dropdown]").forEach(function (trigger) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault();
      var parentLi = this.closest("li");
      if (!parentLi) return;
      var dropdown = parentLi.querySelector(".mobile-menu__menu-dropdown");
      if (!dropdown) return;
      var isVisible = dropdown.classList.contains("open");
      document
        .querySelectorAll(".mobile-menu__menu-dropdown")
        .forEach(function (d) {
          d.classList.remove("open");
          d.style.maxHeight = "";
        });
      document
        .querySelectorAll(".mobile-menu__menu li.active")
        .forEach(function (i) {
          i.classList.remove("active");
        });
      if (!isVisible) {
        dropdown.classList.add("open");
        parentLi.classList.add("active");
        dropdown.style.maxHeight = "0";
        setTimeout(function () {
          dropdown.style.maxHeight = dropdown.scrollHeight + "px";
        }, 10);
      }
    });
  });

  // Main block Swiper with progress bars
  try {
    var slides = document.querySelectorAll(".main-block__item");
    var progressContainer = document.querySelector(".main-block__progress");
    var AUTOPLAY_DELAY = 7000;
    var progressInterval = null,
      activeProgressBar = null;
    var startTime = 0,
      isPaused = false,
      pausedTime = 0,
      pauseStartTime = 0;

    if (slides.length && progressContainer) {
      progressContainer.innerHTML = "";
      slides.forEach(function (_, i) {
        var item = document.createElement("div");
        item.className = "main-block__progress-item";
        var bar = document.createElement("div");
        bar.className = "main-block__progress-bar";
        bar.dataset.index = i;
        item.appendChild(bar);
        progressContainer.appendChild(item);
      });
    }

    function resetProgressBars() {
      document
        .querySelectorAll(".main-block__progress-bar")
        .forEach(function (b) {
          b.style.width = "0%";
        });
    }
    function stopProgressAnimation() {
      if (progressInterval) {
        clearInterval(progressInterval);
        progressInterval = null;
      }
    }
    function updateProgress() {
      if (!activeProgressBar || isPaused) return;
      var progress = Math.min(
        (Date.now() - startTime - pausedTime) / AUTOPLAY_DELAY,
        1,
      );
      activeProgressBar.style.width = progress * 100 + "%";
      if (progress >= 1) stopProgressAnimation();
    }
    function startProgressAnimation(index) {
      stopProgressAnimation();
      resetProgressBars();
      var bars = document.querySelectorAll(".main-block__progress-bar");
      activeProgressBar = bars[index];
      if (!activeProgressBar) return;
      startTime = Date.now();
      isPaused = false;
      pausedTime = 0;
      progressInterval = setInterval(updateProgress, 16);
    }

    new Swiper(".main-block__list", {
      effect: "fade",
      fadeEffect: { crossFade: true },
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      speed: 800,
      autoHeight: true,
      autoplay: { delay: AUTOPLAY_DELAY, disableOnInteraction: false },
      navigation: { nextEl: ".main-block__next", prevEl: ".main-block__prev" },
      on: {
        init: function () {
          startProgressAnimation(this.realIndex);
        },
        slideChange: function () {
          startProgressAnimation(this.realIndex);
        },
        autoplayStart: function () {
          if (isPaused) {
            isPaused = false;
            pausedTime += Date.now() - pauseStartTime;
          }
        },
        autoplayStop: function () {
          if (!isPaused) {
            isPaused = true;
            pauseStartTime = Date.now();
          }
        },
        beforeDestroy: function () {
          stopProgressAnimation();
        },
      },
    });
  } catch (e) {}

  // Actions Swiper
  try {
    new Swiper(".main-actions__lists-list", {
      slidesPerView: "auto",
      spaceBetween: 32,
      freeMode: true,
      breakpoints: {
        320: { slidesPerView: 1 },
        576: { slidesPerView: 1 },
        992: { slidesPerView: 3 },
        1200: { slidesPerView: 3 },
      },
    });
  } catch (e) {}

  // News Swiper
  try {
    new Swiper(".main-news__list", {
      slidesPerView: "auto",
      centeredSlides: false,
      spaceBetween: 30,
      autoHeight: true,
      navigation: {
        nextEl: ".main-news__button-next",
        prevEl: ".main-news__button-prev",
      },
      breakpoints: {
        320: { slidesPerView: 1 },
        576: { slidesPerView: "auto" },
        992: { slidesPerView: "auto" },
        1200: { slidesPerView: "auto" },
      },
    });
  } catch (e) {}

  // AOS
  try {
    AOS.init();
  } catch (e) {}

  // Coverage Area Map
  if (document.getElementById('map')) {
    const cities = {
      tashkent: { label: 'Toshkent', lat: 41.2995, lng: 69.2401, zoom: 12 },
      tashkent_region: { label: 'Toshkent viloyati', lat: 41.0042, lng: 69.0116, zoom: 9 },
      andijan: { label: 'Andijon viloyati', lat: 40.7836, lng: 72.3480, zoom: 10 },
      bukhara: { label: 'Buxoro viloyati', lat: 39.7680, lng: 64.4210, zoom: 10 },
      fergana: { label: "Farg\u02BBona viloyati", lat: 40.3770, lng: 71.7870, zoom: 10 },
      jizzakh: { label: 'Jizzax viloyati', lat: 40.1250, lng: 67.8500, zoom: 10 },
      karakalpakstan: { label: "Qoraqalpo\u011Biston Respublikasi", lat: 43.8041, lng: 59.0200, zoom: 8 },
      kashkadarya: { label: 'Qashqadaryo viloyati', lat: 38.8986, lng: 65.7986, zoom: 10 },
      khorezm: { label: 'Xorazm viloyati', lat: 41.5500, lng: 60.6167, zoom: 10 },
      namangan: { label: 'Namangan viloyati', lat: 41.0012, lng: 71.6714, zoom: 10 },
      navoi: { label: 'Navoi viloyati', lat: 40.0839, lng: 65.3690, zoom: 10 },
      samarkand: { label: 'Samarqand viloyati', lat: 39.6547, lng: 66.9597, zoom: 10 },
      surkhandarya: { label: 'Surxondaryo viloyati', lat: 37.9400, lng: 67.5700, zoom: 10 },
      sirdarya: { label: 'Sirdaryo viloyati', lat: 40.4900, lng: 68.7800, zoom: 10 },
    };

    const networks = [
      { value: '5g', label: '5G SA', file: 'assets/data/jz37xM2FS5w14S7YDH4EUU3qXEWuYD0DszQeRoPC.zip', color: '#E60000' },
      { value: '4g', label: '4G', file: 'assets/data/', color: '#4E9FFF' },
      { value: 'voice', label: 'Voice', file: 'assets/data/', color: '#7B4EFF' },
    ];

    const citySelect = document.getElementById('city-select');
    Object.entries(cities).forEach(function([value, city], i) {
      var opt = document.createElement('option');
      opt.value = value;
      opt.textContent = city.label;
      if (i === 0) opt.selected = true;
      citySelect.appendChild(opt);
    });

    const networkOptions = document.getElementById('network-options');
    networks.forEach(function(net, i) {
      var label = document.createElement('label');
      label.className = 'radio-container';
      label.innerHTML =
        '<input type="radio" name="network" value="' + net.value + '" ' + (i === 0 ? 'checked' : '') + '>' +
        '<span class="checkmark"></span>' +
        net.label;
      networkOptions.appendChild(label);
    });

    const map = L.map('map').setView([cities.tashkent.lat, cities.tashkent.lng], cities.tashkent.zoom);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    let coverageLayer = null;
    let currentNetwork = networks[0];
    let currentCity = 'tashkent';

    function loadShapefile(url) {
      if (coverageLayer) {
        map.removeLayer(coverageLayer);
        coverageLayer = null;
      }
      fetch(url)
        .then(function(r) {
          if (!r.ok) throw new Error('Network response was not ok');
          return r.arrayBuffer();
        })
        .then(function(buffer) { return shp.parseZip(buffer); })
        .then(function(geojson) {
          coverageLayer = L.geoJSON(geojson, {
            style: function() {
              return {
                fillColor: currentNetwork.color,
                fillOpacity: 0.3,
                weight: 1,
                color: 'transparent',
              };
            }
          }).addTo(map);
          try {
            map.fitBounds(coverageLayer.getBounds());
          } catch (e) {
            var c = cities[currentCity];
            map.setView([c.lat, c.lng], c.zoom);
          }
        })
        .catch(function(error) {
          console.error('Ошибка загрузки Shape файлов:', error);
          var c = cities[currentCity];
          map.setView([c.lat, c.lng], c.zoom);
        });
    }

    function updateMap() {
      loadShapefile(currentNetwork.file);
    }

    document.querySelectorAll('input[name="network"]').forEach(function(radio) {
      radio.addEventListener('change', function() {
        currentNetwork = networks.find(function(n) { return n.value === this.value; }, this);
        updateMap();
      });
    });

    citySelect.addEventListener('change', function() {
      currentCity = this.value;
      var c = cities[currentCity];
      map.setView([c.lat, c.lng], c.zoom);
    });

    document.getElementById('search-button').addEventListener('click', function() {
      var query = document.getElementById('map-search').value.trim();
      if (!query) return;
      fetch('https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(query) + '+Uzbekistan')
        .then(function(r) { return r.json(); })
        .then(function(data) {
          if (data.length > 0) {
            map.setView([data[0].lat, data[0].lon], 16);
            L.marker([data[0].lat, data[0].lon])
              .addTo(map)
              .bindPopup(data[0].display_name)
              .openPopup();
          } else {
            alert('По вашему запросу ничего не найдено');
          }
        })
        .catch(function() { alert('Ошибка при выполнении поиска'); });
    });

    document.getElementById('map-search').addEventListener('keypress', function(e) {
      if (e.key === 'Enter') document.getElementById('search-button').click();
    });

    var searchButton = document.querySelector('.coverage-area__search-button');
    var searchBlock = document.querySelector('.coverage-area__search');
    var searchIcon = document.querySelector('.coverage-area__search-button .search-icon');
    var closeIcon = document.querySelector('.coverage-area__search-button .close-icon');

    searchButton.addEventListener('click', function(e) {
      e.preventDefault();
      this.classList.toggle('active');
      searchBlock.classList.toggle('active');
      var isActive = this.classList.contains('active');
      searchIcon.style.display = isActive ? 'none' : 'block';
      closeIcon.style.display = isActive ? 'block' : 'none';
      if (isActive) {
        document.getElementById('map-search').focus();
      } else {
        document.getElementById('map-search').value = '';
      }
    });

    updateMap();
  }
});
