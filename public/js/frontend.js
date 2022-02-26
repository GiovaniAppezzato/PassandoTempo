/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/modules/Modal.js":
/*!***************************************!*\
  !*** ./resources/js/modules/Modal.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Modal)
/* harmony export */ });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

/**
 * Instanciar e controllar o comportamento dos modais.
 * @param  {[HTML]} elementoHTML
 */
var Modal = /*#__PURE__*/function () {
  function Modal(elementoHTML) {
    var _this = this;

    _classCallCheck(this, Modal);

    this.elementoHTML = elementoHTML;
    this.modal = elementoHTML.getAttribute('id');
    this.buttonsOpen = document.querySelectorAll("[data-target=".concat(this.modal, "]"));
    this.buttonsClose = document.querySelectorAll("[data-close=".concat(this.modal, "]"));
    this.abrirModal = this.abrirModal.bind(this);
    this.fecharModal = this.fecharModal.bind(this);

    if (this.buttonsOpen.length !== 0) {
      this.buttonsOpen.forEach(function (button) {
        return button.addEventListener('click', _this.abrirModal);
      });
    }

    if (this.buttonsClose.length !== 0) {
      this.buttonsClose.forEach(function (button) {
        return button.addEventListener('click', _this.fecharModal);
      });
    }
  }

  _createClass(Modal, [{
    key: "abrirModal",
    value: function abrirModal() {
      this.elementoHTML.classList.add('modal-show');
      document.body.style.overflow = 'hidden';
      document.body.scroll = "no";
    }
  }, {
    key: "fecharModal",
    value: function fecharModal() {
      this.elementoHTML.classList.remove('modal-show');
      document.body.style.overflow = 'auto';
      document.body.scroll = "yes";
    }
  }]);

  return Modal;
}();



/***/ }),

/***/ "./resources/js/modules/Slider.js":
/*!****************************************!*\
  !*** ./resources/js/modules/Slider.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Slider)
/* harmony export */ });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var Slider = /*#__PURE__*/function () {
  function Slider(sliderHTML) {
    var _this = this;

    _classCallCheck(this, Slider);

    this.sliderHTML = sliderHTML;
    this.sliderAtual = 0;
    this.id = sliderHTML.getAttribute('id');
    this.length = Number.parseInt(sliderHTML.getAttribute('data-slider'));
    this.translateX = 100 / this.length;
    document.querySelector("[data-next=".concat(this.id, "]")).addEventListener('click', function () {
      return _this.nextSlider();
    });
    document.querySelector("[data-previous=".concat(this.id, "]")).addEventListener('click', function () {
      return _this.previousSlider();
    });
  }

  _createClass(Slider, [{
    key: "nextSlider",
    value: function nextSlider() {
      this.sliderAtual !== this.length - 1 ? this.sliderAtual++ : this.sliderAtual = 0;
      this.sliderHTML.style.transform = "translateX(-".concat(this.sliderAtual * this.translateX, "%)");
    }
  }, {
    key: "previousSlider",
    value: function previousSlider() {
      this.sliderAtual !== 0 ? this.sliderAtual-- : this.sliderAtual = this.length - 1;
      this.sliderHTML.style.transform = "translateX(-".concat(this.sliderAtual * this.translateX, "%)");
    }
  }]);

  return Slider;
}();



/***/ }),

/***/ "./resources/js/modules/resize.js":
/*!****************************************!*\
  !*** ./resources/js/modules/resize.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "resize": () => (/* binding */ resize)
/* harmony export */ });
/**
 * Redimensionamento de elementos HTML para uma proporção especifica.
 * @param  {[object/HTML]} elements
 * @param  {[string]} proportion [16:9, 4:3, ...]
 */
function resize() {
  var elements = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
  var proportion = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
  var controll = {
    elements: elements,
    prop: proportion
  };
  controll.elements.forEach(function (element) {
    var proportion = !controll.prop ? element.getAttribute('data-resize').split(':') : controll.prop.split(':');
    var width = element.offsetWidth;
    element.style.height = "".concat(width * proportion[1] / proportion[0], "px");
  });
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************************!*\
  !*** ./resources/js/frontend.js ***!
  \**********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_Modal_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/Modal.js */ "./resources/js/modules/Modal.js");
/* harmony import */ var _modules_Slider_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/Slider.js */ "./resources/js/modules/Slider.js");
/* harmony import */ var _modules_resize_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/resize.js */ "./resources/js/modules/resize.js");
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }





function ativarScroll() {
  document.body.style.overflow = 'auto';
  document.body.scroll = "yes";
}

function desativarScroll() {
  document.body.style.overflow = 'hidden';
  document.body.scroll = "no";
}

window.addEventListener('DOMContentLoaded', function () {
  var conteudoPagina = document.querySelector('#contentPage');
  /* ===== Menu - nav ===== */

  var menuHTML = document.querySelector('#menu');
  var checkboxMenu = document.querySelector('#checkbox-menu');

  if (menuHTML && checkboxMenu) {
    var abrirMenu = function abrirMenu() {
      menuHTML.classList.add('mobile-menu');
      backgroundMenu.classList.add('is-visible');
      desativarScroll();
    };

    var fecharMenu = function fecharMenu() {
      menuHTML.classList.remove('mobile-menu');
      backgroundMenu.classList.remove('is-visible');
      ativarScroll();
    };

    var backgroundMenu = document.querySelector('#bg-menu-mobile');
    checkboxMenu.addEventListener('change', function () {
      return checkboxMenu.checked ? abrirMenu() : fecharMenu();
    });
  }
  /* ===== Resize HTML ===== */


  var resizeColletions = document.querySelectorAll('[data-resize]');

  if (resizeColletions.length) {
    (0,_modules_resize_js__WEBPACK_IMPORTED_MODULE_2__.resize)(resizeColletions);
    window.addEventListener('resize', function () {
      return (0,_modules_resize_js__WEBPACK_IMPORTED_MODULE_2__.resize)(resizeColletions);
    });
  }
  /* ===== Dropdown ===== */


  var dropdownCollections = document.querySelectorAll('[data-toggle=dropdown]');
  dropdownCollections.forEach(function (item) {
    item.addEventListener('click', function () {
      return item.nextElementSibling.classList.toggle('dropdown--active');
    });
  });
  /* ===== Sidebar ===== */

  var sidebarHTML = document.querySelector('#sidebar');
  var checkboxSidebar = document.querySelector('#checkbox-sidebar');

  function collapseSidebar() {
    checkboxSidebar.checked = true;
    sidebarHTML.classList.add('sidebar--collapse');
    conteudoPagina.classList.add('content-page--expand');
    (0,_modules_resize_js__WEBPACK_IMPORTED_MODULE_2__.resize)(resizeColletions);
    document.querySelectorAll('[data-sidebar=sublinks').forEach(function (sublink) {
      return sublink.classList.remove('sidebar-dropdown--active');
    });
  }

  function expandSidebar() {
    checkboxSidebar.checked = false;
    sidebarHTML.classList.remove('sidebar--collapse');
    conteudoPagina.classList.remove('content-page--expand');
    (0,_modules_resize_js__WEBPACK_IMPORTED_MODULE_2__.resize)(resizeColletions);
  }

  function iniciarSidebar() {
    var loaded = sidebarHTML.getAttribute('sidebar-loaded');
    var active = sidebarHTML.getAttribute('sidebar-active');

    if (loaded !== 'collapse' && window.innerWidth >= 992 && window.innerWidth < 1280) {
      collapseSidebar();
    }

    if (active !== null) {
      document.querySelector(active).classList.add('sidebar-item--active');
    }
  }

  if (sidebarHTML && checkboxSidebar) {
    var dropdownSidebar = function dropdownSidebar() {
      expandSidebar();
      this.nextElementSibling.classList.toggle('sidebar-dropdown--active');
    };

    var itemsDropdown = document.querySelectorAll('[data-sidebar=link-collapse]');
    iniciarSidebar();
    checkboxSidebar.addEventListener('change', function () {
      return checkboxSidebar.checked ? collapseSidebar() : expandSidebar();
    });
    itemsDropdown.forEach(function (link) {
      return link.addEventListener('click', dropdownSidebar);
    });
    window.addEventListener('resize', function () {
      var width = window.innerWidth;

      if (width >= 992 && width < 1280 && !checkboxSidebar.checked) {
        collapseSidebar();
      } else if (width >= 1280 && checkboxSidebar.checked) {
        expandSidebar();
      }
    });
  }
  /* ===== Auto-resize Textarea ===== */


  var textareaCollections = document.querySelectorAll('[data-textarea=resize]');

  function textAutoResize() {
    this.style.height = "auto";
    this.style.height = "".concat(this.scrollHeight + 4, "px");
  }

  textareaCollections.forEach(function (textarea) {
    textarea.addEventListener("input", textAutoResize);
  });
  /* ===== Toast ===== */

  var toast = document.querySelector('[data-toast]');

  function showToast(toast, time) {
    toast.classList.add('toast-show');
    setTimeout(function () {
      return toast.classList.remove('toast-show');
    }, time);
    setTimeout(function () {
      return toast.remove();
    }, time + 1000);
  }

  toast ? window.addEventListener('load', function () {
    return setTimeout(function () {
      return showToast(toast, 4000);
    }, 400);
  }) : '';
  /* ===== Modals ===== */

  var modalsCollections = document.querySelectorAll('[data-modal]');

  var modals = _toConsumableArray(modalsCollections);

  modals = modals.map(function (modal) {
    return new _modules_Modal_js__WEBPACK_IMPORTED_MODULE_0__["default"](modal);
  });
  /* ===== Slider ===== */

  var sliderCollections = document.querySelectorAll('[data-slider]');
  sliderCollections.forEach(function (slider) {
    return new _modules_Slider_js__WEBPACK_IMPORTED_MODULE_1__["default"](slider);
  });
});
})();

/******/ })()
;