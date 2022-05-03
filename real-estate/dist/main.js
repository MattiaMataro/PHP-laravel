/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _models_address__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./models/address */ \"./src/models/address.js\");\n/* harmony import */ var _models_building__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./models/building */ \"./src/models/building.js\");\n/* harmony import */ var _models_geo__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./models/geo */ \"./src/models/geo.js\");\nObject(function webpackMissingModule() { var e = new Error(\"Cannot find module './style.css'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }());\n\n\n\n\n\nfetch(\"http://localhost:3000/buildings\")\n  .then((response) => response.json())\n  .then((buildings) =>\n    buildings.map(\n      (building) =>\n        new _models_building__WEBPACK_IMPORTED_MODULE_1__.Building(\n          building.id,\n          building.type,\n          building.name,\n          building.description,\n          new _models_address__WEBPACK_IMPORTED_MODULE_0__.Address(\n            building.address.street,\n            building.address.city,\n            building.address.zipCode,\n            building.address.suite,\n            new _models_geo__WEBPACK_IMPORTED_MODULE_2__.Geo(building.address.geo.lat, building.address.geo.lon)\n          )\n        )\n    )\n  )\n  .then((buildings) => console.log(buildings));\n\n\n//# sourceURL=webpack://real-estate/./src/index.js?");

/***/ }),

/***/ "./src/models/address.js":
/*!*******************************!*\
  !*** ./src/models/address.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"Address\": () => (/* binding */ Address)\n/* harmony export */ });\nclass Address {\n  constructor(street, city, zipcode, suite, geo) {\n    this.street = street;\n    this.city = city;\n    this.zipCode = zipcode;\n    this.suite = suite;\n    this.geo = geo;\n  }\n}\n\n\n//# sourceURL=webpack://real-estate/./src/models/address.js?");

/***/ }),

/***/ "./src/models/building.js":
/*!********************************!*\
  !*** ./src/models/building.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"Building\": () => (/* binding */ Building)\n/* harmony export */ });\nclass Building {\n  constructor(id, type, name, description, address, geo) {\n    this.id = id;\n    this.type = type;\n    this.name = name;\n    this.description = description;\n    this.address = address;\n    this.geo = geo;\n  }\n}\n\n\n//# sourceURL=webpack://real-estate/./src/models/building.js?");

/***/ }),

/***/ "./src/models/geo.js":
/*!***************************!*\
  !*** ./src/models/geo.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"Geo\": () => (/* binding */ Geo)\n/* harmony export */ });\nclass Geo {\n  constructor(lat, lon) {\n    this.latitude = lat;\n    this.longitude = lon;\n  }\n}\n\n\n//# sourceURL=webpack://real-estate/./src/models/geo.js?");

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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/index.js");
/******/ 	
/******/ })()
;