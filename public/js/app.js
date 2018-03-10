/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 34);
/******/ })
/************************************************************************/
/******/ ({

/***/ 1:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Helper = function () {
    function Helper() {
        _classCallCheck(this, Helper);
    }

    _createClass(Helper, null, [{
        key: 'getFormResults',
        value: function getFormResults(form) {
            var formElements = form.elements;
            var formParams = {};
            var dots = 0;
            var elem = null;
            for (var i = 0; i < formElements.length; i += 1) {
                elem = formElements[i];
                switch (elem.type) {
                    case 'submit':
                        break;
                    case 'radio':
                        if (elem.checked) {
                            dots = elem.name.split(".");
                            if (dots.length > 1) {
                                // item.something
                                var brackets = dots[0].search(/\[[0-9]\]/);
                                if (brackets > -1) {
                                    // items[0].something
                                    var key = dots[0].substring(0, brackets); // items
                                    var index = dots[0][brackets + 1]; // 0
                                    if (!formParams.hasOwnProperty(key)) {
                                        formParams[key] = [];
                                    }
                                    if (!formParams[key].hasOwnProperty(index)) {
                                        formParams[key][index] = {};
                                    }
                                    formParams[key][index][dots[1]] = elem.value;
                                } else {
                                    if (!formParams.hasOwnProperty(dots[0])) {
                                        formParams[dots[0]] = {};
                                    }
                                    formParams[dots[0]][dots[1]] = elem.value;
                                }
                            } else if (elem.name.slice(-2) === '[]') {
                                // array[]
                                var _key = elem.name.substring(0, elem.name.length - 2);
                                if (!formParams.hasOwnProperty(_key)) {
                                    formParams[_key] = [];
                                }
                                formParams[_key].push(elem.value);
                            } else {
                                formParams[elem.name] = elem.value;
                            }
                        }
                        break;
                    case 'checkbox':
                        if (elem.checked) {
                            dots = elem.name.split(".");
                            if (dots.length > 1) {
                                var brackets = dots[0].search(/\[[0-9]\]/);
                                if (brackets > -1) {
                                    // items[0].something
                                    var key = dots[0].substring(0, brackets); // items
                                    var index = dots[0][brackets + 1]; // 0
                                    if (!formParams.hasOwnProperty(key)) {
                                        formParams[key] = [];
                                    }
                                    if (!formParams[key].hasOwnProperty(index)) {
                                        formParams[key][index] = {};
                                    }
                                    formParams[key][index][dots[1]] = elem.value;
                                } else {
                                    if (!formParams.hasOwnProperty(dots[0])) {
                                        formParams[dots[0]] = {};
                                    }
                                    formParams[dots[0]][dots[1]] = elem.value;
                                }
                            } else if (elem.name.slice(-2) === '[]') {
                                var _key2 = elem.name.substring(0, elem.name.length - 2);
                                if (!formParams.hasOwnProperty(_key2)) {
                                    formParams[_key2] = [];
                                }
                                formParams[_key2].push(elem.value);
                            } else {
                                formParams[elem.name] = elem.value;
                            }
                        }
                        break;
                    case 'text':
                        if (elem.value != "") {
                            dots = elem.name.split(".");
                            if (dots.length > 1) {
                                var brackets = dots[0].search(/\[[0-9]\]/);
                                if (brackets > -1) {
                                    // items[0].something
                                    var key = dots[0].substring(0, brackets); // items
                                    var index = dots[0][brackets + 1]; // 0
                                    if (!formParams.hasOwnProperty(key)) {
                                        formParams[key] = [];
                                    }
                                    if (!formParams[key].hasOwnProperty(index)) {
                                        formParams[key][index] = {};
                                    }
                                    formParams[key][index][dots[1]] = elem.value;
                                } else {
                                    if (!formParams.hasOwnProperty(dots[0])) {
                                        formParams[dots[0]] = {};
                                    }
                                    formParams[dots[0]][dots[1]] = elem.value;
                                }
                            } else if (elem.name.slice(-2) === '[]') {
                                var _key3 = elem.name.substring(0, elem.name.length - 2);
                                if (!formParams.hasOwnProperty(_key3)) {
                                    formParams[_key3] = [];
                                }
                                formParams[_key3].push(elem.value);
                            } else {
                                formParams[elem.name] = elem.value;
                            }
                        }
                        break;
                    case 'number':
                        if (elem.value != "") {
                            dots = elem.name.split(".");
                            if (dots.length > 1) {
                                var brackets = dots[0].search(/\[[0-9]\]/);
                                if (brackets > -1) {
                                    // items[0].something
                                    var key = dots[0].substring(0, brackets); // items
                                    var index = dots[0][brackets + 1]; // 0
                                    if (!formParams.hasOwnProperty(key)) {
                                        formParams[key] = [];
                                    }
                                    if (!formParams[key].hasOwnProperty(index)) {
                                        formParams[key][index] = {};
                                    }
                                    formParams[key][index][dots[1]] = elem.value;
                                } else {
                                    if (!formParams.hasOwnProperty(dots[0])) {
                                        formParams[dots[0]] = {};
                                    }
                                    formParams[dots[0]][dots[1]] = elem.value;
                                }
                            } else if (elem.name.slice(-2) === '[]') {
                                var _key4 = elem.name.substring(0, elem.name.length - 2);
                                if (!formParams.hasOwnProperty(_key4)) {
                                    formParams[_key4] = [];
                                }
                                formParams[_key4].push(elem.value);
                            } else {
                                formParams[elem.name] = elem.value;
                            }
                        }
                        break;
                    default:
                        dots = elem.name.split(".");
                        if (dots.length > 1) {
                            var brackets = dots[0].search(/\[[0-9]\]/);
                            if (brackets > -1) {
                                // items[0].something
                                var key = dots[0].substring(0, brackets); // items
                                var index = dots[0][brackets + 1]; // 0
                                if (!formParams.hasOwnProperty(key)) {
                                    formParams[key] = [];
                                }
                                if (!formParams[key].hasOwnProperty(index)) {
                                    formParams[key][index] = {};
                                }
                                formParams[key][index][dots[1]] = elem.value;
                            } else {
                                if (!formParams.hasOwnProperty(dots[0])) {
                                    formParams[dots[0]] = {};
                                }
                                formParams[dots[0]][dots[1]] = elem.value;
                            }
                        } else if (elem.name.slice(-2) === '[]') {
                            var _key5 = elem.name.substring(0, elem.name.length - 2);
                            if (!formParams.hasOwnProperty(_key5)) {
                                formParams[_key5] = [];
                            }
                            formParams[_key5].push(elem.value);
                        } else {
                            formParams[elem.name] = elem.value;
                        }
                }
            }

            return formParams;
        }
    }, {
        key: 'encodeQueryData',
        value: function encodeQueryData(data) {
            var ret = [];
            for (var d in data) {
                if (data[d] != "") {
                    ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
                }
            }
            return ret.join('&');
        }
    }, {
        key: 'startLoading',
        value: function startLoading() {
            $("#loader").removeClass("hidden");
        }
    }, {
        key: 'endLoading',
        value: function endLoading() {
            $("#loader").addClass("hidden");
        }
    }]);

    return Helper;
}();

/* harmony default export */ __webpack_exports__["a"] = (Helper);

/***/ }),

/***/ 2:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Errors = function () {
    /**
     * Create a new Errors instance.
     */
    function Errors() {
        _classCallCheck(this, Errors);

        this.errors = {};
    }

    /**
     * Determine if an errors exists for the given field.
     *
     * @param {string} field
     */


    _createClass(Errors, [{
        key: 'has',
        value: function has(field) {
            return this.errors.hasOwnProperty(field);
        }

        /**
         * Determine if we have any errors.
         */

    }, {
        key: 'any',
        value: function any() {
            return Object.keys(this.errors).length > 0;
        }

        /**
         * Retrieve the error message for a field.
         *
         * @param {string} field
         */

    }, {
        key: 'get',
        value: function get(field) {
            if (this.errors[field]) {
                return this.errors[field];
            }
        }

        /**
         * Record the new errors.
         *
         * @param {object} errors
         */

    }, {
        key: 'record',
        value: function record(errors) {
            this.errors = errors;
        }

        /**
         * Clear one or all error fields.
         *
         */

    }, {
        key: 'clear',
        value: function clear() {
            for (var key in this.errors) {
                $('*[data-error="' + key + '"]').removeClass("has-error");
                $('*[data-error="' + key + '"] .error-content').html("");
            }

            this.errors = {};
        }
    }, {
        key: 'show',
        value: function show() {
            for (var key in this.errors) {
                $('*[data-error="' + key + '"]').addClass("has-error");
                $('*[data-error="' + key + '"] .error-content').html(this.errors[key]);
            }
        }
    }]);

    return Errors;
}();

/* harmony default export */ __webpack_exports__["a"] = (Errors);

/***/ }),

/***/ 34:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(35);


/***/ }),

/***/ 35:
/***/ (function(module, exports, __webpack_require__) {

window.base_api = '';
__webpack_require__(36);

console.log(route);

if (route.indexOf('settings') > -1) {
    __webpack_require__(37);
}

/***/ }),

/***/ 36:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__helper_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__classes_Errors__ = __webpack_require__(2);


var errors = new __WEBPACK_IMPORTED_MODULE_1__classes_Errors__["a" /* default */]();

// LOGIN
$("#login-form").submit(function (event) {
    __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].startLoading();
    errors.clear();
    var credentials = __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].getFormResults(this);

    axios.post(base_api + '/login', credentials).then(function (response) {
        console.log(response);
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
        window.location.href = '/dashboard';
    }).catch(function (error) {
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
        errors.record(error.response.data);
        errors.show();
    });

    event.preventDefault();
});

// LOGOUT
$("#btn-logout").on('click', function (evt) {
    $("#logout-form").submit();
});

$("#logout-form").submit(function (event) {

    var data = __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].getFormResults(this);

    axios.post(base_api + '/logout', data).then(function (response) {
        // window.location.href = '/';
    }).catch(function (error) {
        console.log(error);
    });

    event.preventDefault();
});

// SIGN UP
$("#sign-up-form").submit(function (event) {
    __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].startLoading();
    errors.clear();
    var data = __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].getFormResults(this);

    axios.post(base_api + '/register', data).then(function (response) {
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
        $('#sign-up-modal').modal('hide');
        window.location.href = '/';
    }).catch(function (error) {
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
        errors.record(error.response.data.details);
        errors.show();

        console.log(errors);
    });

    event.preventDefault();
});

// FACEBOOK LOGIN
$(document).ready(function () {
    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            //statusChangeCallback(response);
        });
    }
    window.fbAsyncInit = function () {
        FB.init({
            appId: '339394523139551',
            cookie: true,
            xfbml: true,
            version: 'v2.7'
        });
        FB.AppEvents.logPageView();
    };

    (function (d, s, id) {
        var js,
            fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    })(document, 'script', 'facebook-jssdk');
});

function facebookLogin() {
    var on_success = $('#on-success').val();

    FB.login(function (response) {
        if (response.status === 'connected') {
            FB.api('/me', { fields: 'id,email,gender,birthday,first_name,last_name,picture,location,hometown' }, function (response) {

                axios.post(base_api + '/login-facebook', response).then(function (response) {
                    $('#sign-up-modal').modal('hide');
                    console.log(response);
                    if (on_success === "submit-job") {
                        app.submitJob();
                    } else {
                        window.location.href = 'dashboard';
                    }
                }).catch(function (error) {
                    console.log(error.response.data);
                });
            });
        } else {
            console.log(response);
        }
    }, { scope: 'public_profile,email' });
}

$("#btn-sign-up-fb").on('click', function (evt) {
    facebookLogin();
});

$("#btn-login-fb").on('click', function (evt) {
    facebookLogin();
});

$('#login-modal').on('shown.bs.modal', function (e) {
    errors.clear();
});

$('#sign-up-modal').on('shown.bs.modal', function (e) {
    errors.clear();
});

/***/ }),

/***/ 37:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__helper_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__classes_Errors__ = __webpack_require__(2);


var errors = new __WEBPACK_IMPORTED_MODULE_1__classes_Errors__["a" /* default */]();

/**
 * Settings / Profile
 */

$("#update-user").submit(function (event) {
    errors.clear();
    var data = __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].getFormResults(this);
    __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].startLoading();

    axios.put(base_api + '/users/settings-profile', data).then(function (response) {
        location.reload();
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
    }).catch(function (error) {
        errors.record(error.response.data.details);
        errors.show();
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
    });

    event.preventDefault();
});

/**
 * Open user avatar upload dialog
 */
$("#btn-avatar-upload").on('click', function (evt) {
    $("#input-avatar-upload").click();
});

/**
 * Upload user avatar
 */
$("#input-avatar-upload").on('change', function (evt) {
    var files = evt.target.files;
    var formData = new FormData();
    formData.append('file', files[0]);
    var config = {
        headers: {
            'content-type': 'multipart/form-data'
        }
    };
    __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].startLoading();
    axios.post(base_api + '/users/avatar-upload', formData, config).then(function (response) {
        console.log(response.data);
        $("#img-user-avatar").attr("src", "/" + response.data);
        $("#input-user-avatar").val(response.data);
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
    }).catch(function (error) {
        console.log(error);
        __WEBPACK_IMPORTED_MODULE_0__helper_js__["a" /* default */].endLoading();
    });
});

/***/ })

/******/ });