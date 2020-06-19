(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[11],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/peluqueria/PeluqueriaComponent.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/peluqueria/PeluqueriaComponent.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_datetime__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-datetime */ "./node_modules/vue-datetime/dist/vue-datetime.js");
/* harmony import */ var vue_datetime__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_datetime__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vue_datetime_dist_vue_datetime_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue-datetime/dist/vue-datetime.css */ "./node_modules/vue-datetime/dist/vue-datetime.css");
/* harmony import */ var vue_datetime_dist_vue_datetime_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vue_datetime_dist_vue_datetime_css__WEBPACK_IMPORTED_MODULE_1__);
//
 // You need a specific loader for CSS files


/* harmony default export */ __webpack_exports__["default"] = ({
  template: __webpack_require__(/*! ./Peluqueria.html */ "./resources/js/components/peluqueria/Peluqueria.html"),
  components: {
    datetime: vue_datetime__WEBPACK_IMPORTED_MODULE_0__["Datetime"]
  },
  data: function data() {
    return {
      img_circulo: '/storage/circulo-peluqueria.png',
      img_calendario: '/storage/lavado-perro.png',
      date: null,
      mostrarHorario: true,
      alertLogin: false,
      alertSuccess: false,
      message: ''
    };
  },
  methods: {
    guardarCita: function guardarCita() {
      var _this = this;

      //Si no inicia sesión no podrá coger cita
      if (!this.$store.getters.getToken) {
        this.alertLogin = true;
        this.message = "Debes iniciar sesión para coger una cita.";
        setTimeout(function () {
          _this.alertLogin = false;
        }, 1500);
        return null;
      }

      var newDate = this.date.split("T")[0];
      var data = {
        'fecha_cita': newDate,
        'user_id': this.$store.getters.getUserId
      };
      axios.post('/api/appointment', data).then(function (res) {
        _this.message = res.data.message;

        if (res.data.status == 201) {
          _this.alertSuccess = true;
          setTimeout(function () {
            _this.alertSuccess = false;
          }, 1500);
        } else {
          _this.alertLogin = true;
          setTimeout(function () {
            _this.alertLogin = false;
          }, 1500);
        }
      })["catch"](function (err) {
        console.log(err);
      });
    },
    switchHorarioTarifa: function switchHorarioTarifa() {
      this.mostrarHorario = !this.mostrarHorario;
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true&":
/*!*************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true& ***!
  \*************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "*[data-v-45745c99] {\r\n    margin: 0;\r\n    padding: 0;\n}\n.info-peluqueria[data-v-45745c99] {\r\n    background-color: #e4e1df;\n}\n.theme-orange .vdatetime-popup__header[data-v-45745c99],\r\n.theme-orange .vdatetime-calendar__month__day--selected>span>span[data-v-45745c99],\r\n.theme-orange .vdatetime-calendar__month__day--selected:hover>span>span[data-v-45745c99] {\r\n    background: #FF9800;\n}\n.theme-orange .vdatetime-year-picker__item--selected[data-v-45745c99],\r\n.theme-orange .vdatetime-time-picker__item--selected[data-v-45745c99],\r\n.theme-orange .vdatetime-popup__actions__button[data-v-45745c99] {\r\n    color: #ff9800;\n}\n.contacto[data-v-45745c99] {\r\n    border: 1px solid lightgray;\n}\n.boton-confirmar[data-v-45745c99] {\r\n    border: 0;\r\n    background-color: #b8b5b3;\r\n    color: white;\n}\n.descr-producto .descripcion[data-v-45745c99] {\r\n    background-color: #dcd8d8;\n}\n.descr-producto .descripcion .titulo-componente[data-v-45745c99] {\r\n    font-weight: 700;\n}\n.descr-producto hr[data-v-45745c99] {\r\n    margin: 0.1px;\r\n    max-width: 400px;\n}\n.switch[data-v-45745c99]:hover {\r\n    cursor: pointer;\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--6-2!./peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./resources/js/components/peluqueria/Peluqueria.html":
/*!************************************************************!*\
  !*** ./resources/js/components/peluqueria/Peluqueria.html ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!--MAIN SECTION-->\r\n<main class=\"container mt-5\">\r\n\r\n    <h3>PELUQUERIA</h3>\r\n    <hr>\r\n\r\n    <!--CUADRO INFORMATIVO PELUQUERÍA-->\r\n\r\n    <div class=\"info-peluqueria row align-items-center my-5 justify-content-between\">\r\n        <p class=\"col-10 col-md-7 mt-4 mt-md-0 mx-auto\">\r\n            Bienvenido a nuestro servicio de peluquería. Contamos con un profesional que se encargará de lavar o cortar el pelo a tu perro o gato.\r\n        </p>\r\n\r\n        <div class=\"col-12 col-md-4 text-center\">\r\n            <img :src=\"img_circulo\" alt=\"\">\r\n        </div>\r\n    </div>\r\n\r\n    <div class=\"alert alert-danger p-3\" role=\"alert\" v-if=\"alertLogin\">\r\n        {{message}}\r\n    </div>\r\n\r\n    <div class=\"alert alert-success p-3\" role=\"alert\" v-if=\"alertSuccess\">\r\n        {{message}}\r\n    </div>\r\n\r\n    <!--CALENDARIO Y CONTACTO-->\r\n    <section class=\"my-5\">\r\n        <div class=\"row justify-content-around\">\r\n            <div class=\"col-12 col-md-4 ml-3 mb-5\">\r\n                <label for=\"startDate\" slot=\"before\">Escoja su cita:</label>\r\n                <datetime v-model=\"date\" input-class=\"form-control\" class=\"theme-orange\" placeholder=\"Selecciona la fecha\" :minute-step=\"10\" input-format=\"DD-MM-YYYY\" zone='local' value-zone='local'>\r\n\r\n                </datetime>\r\n\r\n                <button class=\"btn btn-secondary mt-3 text-white px-3 py-1\" @click=\"guardarCita()\">CONFIRMAR</button>\r\n            </div>\r\n\r\n\r\n\r\n            <div class=\"col-12 col-md-3\">\r\n                <h6>CONTÁCTANOS</h6>\r\n\r\n                <div class=\"p-4 contacto\">\r\n                    <p>Llámanos al:</p>\r\n                    <p>951 50 24 55 <i class=\"fas fa-phone text-primary mb-2\"></i></p>\r\n\r\n                    <p>o envíanos un email a:</p>\r\n                    <p><a href=\"mailto:prueba@gmail.com\"> prueba@email.com <i class=\"fas fa-envelope mb-2 text-primary\"></i></a></p>\r\n                </div>\r\n\r\n            </div>\r\n        </div>\r\n\r\n    </section>\r\n\r\n\r\n\r\n\r\n\r\n    <!--HORARIO Y TARIFAS-->\r\n\r\n    <section class=\"container descr-producto\">\r\n        <div class=\"row m-0\">\r\n            <p class=\"text-white bg-secondary2 px-3 py-2 mb-0 switch\" @click=\"switchHorarioTarifa\">Horarios</p>\r\n            <p class=\"text-white bg-secondary px-3 py-2 mb-0 switch\" @click=\"switchHorarioTarifa\">Tarifas</p>\r\n\r\n        </div>\r\n        <hr class=\"bg-secondary\">\r\n\r\n        <section class=\"descripcion p-4\" v-if=\"mostrarHorario\">\r\n            <p>\r\n                Horario disponible:\r\n            </p>\r\n\r\n            <p>\r\n                Lunes: 17:00-20:00\r\n            </p>\r\n\r\n            <p>\r\n                Martes: 17:00-20:00\r\n            </p>\r\n\r\n            <p>\r\n                Miércoles: 17:00-20:00\r\n            </p>\r\n\r\n            <p>\r\n                Jueves: 17:00-20:00\r\n            </p>\r\n\r\n            <p>\r\n                Viernes: 17:00-20:00\r\n            </p>\r\n\r\n\r\n        </section>\r\n\r\n        <section class=\"descripcion p-4\" v-else>\r\n            <p>\r\n                Tarifas disponibles:\r\n            </p>\r\n\r\n            <p>\r\n                Mini: 15€\r\n            </p>\r\n\r\n            <p>\r\n                Medio: 20€\r\n            </p>\r\n\r\n            <p>\r\n                Grande: 25€\r\n            </p>\r\n\r\n\r\n        </section>\r\n    </section>\r\n</main>";

/***/ }),

/***/ "./resources/js/components/peluqueria/PeluqueriaComponent.vue":
/*!********************************************************************!*\
  !*** ./resources/js/components/peluqueria/PeluqueriaComponent.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _PeluqueriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PeluqueriaComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/peluqueria/PeluqueriaComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _peluqueria_css_vue_type_style_index_0_id_45745c99_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true& */ "./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _PeluqueriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  "45745c99",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/peluqueria/PeluqueriaComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/peluqueria/PeluqueriaComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/components/peluqueria/PeluqueriaComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PeluqueriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./PeluqueriaComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/peluqueria/PeluqueriaComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PeluqueriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true&":
/*!********************************************************************************************************************!*\
  !*** ./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true& ***!
  \********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_peluqueria_css_vue_type_style_index_0_id_45745c99_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader!../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--6-2!./peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/peluqueria/peluqueria.css?vue&type=style&index=0&id=45745c99&lang=css&scoped=true&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_peluqueria_css_vue_type_style_index_0_id_45745c99_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_peluqueria_css_vue_type_style_index_0_id_45745c99_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_peluqueria_css_vue_type_style_index_0_id_45745c99_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_peluqueria_css_vue_type_style_index_0_id_45745c99_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_peluqueria_css_vue_type_style_index_0_id_45745c99_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ })

}]);