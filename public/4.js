(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/pedidos/PedidosComponent.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/admin/pedidos/PedidosComponent.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
/* harmony default export */ __webpack_exports__["default"] = ({
  template: __webpack_require__(/*! ./Pedidos.html */ "./resources/js/components/admin/pedidos/Pedidos.html"),
  data: function data() {
    return {
      pedidos: [],
      completedOrder: null,
      token: this.$store.getters.getToken
    };
  },
  created: function created() {
    var _this = this;

    // Axios header
    var config = {
      headers: {
        Authorization: "Bearer ".concat(this.token)
      }
    }; // Peticion

    axios.get('/api/order', config).then(function (res) {
      _this.pedidos = res.data;
    });
  },
  methods: {
    completeOrder: function completeOrder(order_id) {
      var _this2 = this;

      // Window confirm
      var conf = confirm("¿Marcar pedido como realizado?");

      if (conf) {
        // Request Bearer Token
        var config = {
          headers: {
            Authorization: "Bearer ".concat(this.token)
          }
        };
        axios.post("/api/order/complete", {
          order_id: order_id
        }, config).then(function (res) {
          // Check order id
          var pedido = _this2.pedidos.find(function (elem) {
            return elem.id == order_id;
          }); // Get index id


          pedido = _this2.pedidos.indexOf(pedido); // Set as completed

          _this2.pedidos[pedido].estado = "completado";
        })["catch"](function (error) {
          _this2.completedOrder = error.response.data.msg;
          setTimeout(function () {
            _this2.completedOrder = null;
          }, 3000);
        });
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css&":
/*!*************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css& ***!
  \*************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "td{\r\n    text-align: center;\n}\n.pedidos-title{\r\n    border: 1px solid black;\r\n    max-width: 200px;\n}\ni{\r\n    cursor: pointer;\n}\n.status{\r\n    padding: 0.25em 0.4em;\r\n    font-size: 75%;\r\n    font-weight: 700;\r\n    line-height: 1;\r\n    text-align: center;\r\n    white-space: nowrap;\r\n    vertical-align: baseline;\r\n    border-radius: 0.25rem;\r\n    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css&":
/*!*****************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./pedidos.css?vue&type=style&index=0&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./resources/js/components/admin/pedidos/Pedidos.html":
/*!************************************************************!*\
  !*** ./resources/js/components/admin/pedidos/Pedidos.html ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"mt-5\">\r\n\r\n    <div class=\"pedidos-title rounded text-center mb-3\">\r\n        <h4 class=\"my-auto\">Pedidos</h4>\r\n\r\n    </div>\r\n\r\n    <div class=\"alert alert-danger\" v-if=\"completedOrder\">\r\n        {{completedOrder}}\r\n    </div>\r\n  \r\n    <table class=\"table table-responsive-sm\" style=\"overflow-y:scroll;height:90vh;display:block;\">\r\n\r\n        <thead class=\"thead-dark\">\r\n            <tr>\r\n                <th scope=\"col\">Id</th>\r\n                <th scope=\"col\">Estado</th>\r\n                <th scope=\"col\">Fecha</th>\r\n                <th scope=\"col\">Email</th>\r\n                <th scope=\"col\">CP</th>\r\n                <th scope=\"col\">Calle</th>\r\n                <th scope=\"col\">Número</th>\r\n                <th scope=\"col\">Municipio</th>\r\n                <th scope=\"col\">Total</th>\r\n                <th scope=\"col\"></th>\r\n            </tr>\r\n        </thead>\r\n        <tbody>\r\n            <tr v-for=\"item in pedidos\">\r\n                <th scope=\"row\">{{item.id}}</th>\r\n                <td v-if=\"item.estado == 'pendiente'\" class=\"status badge-warning\">\r\n                    {{item.estado}}\r\n                </td>\r\n                <td v-else-if=\"item.estado == 'pendiente_pago'\" class=\"status badge-danger\">\r\n                    {{item.estado}}\r\n                </td>\r\n                <td v-else class=\"status badge-success\">\r\n                    {{item.estado}}\r\n                </td>\r\n                <td>{{item.fecha_pedido}}</td>\r\n                <td>{{item.email}}</td>\r\n                <td>{{item.codigo_postal}}</td>\r\n                <td>{{item.calle}}</td>\r\n                <td>{{item.numero}}</td>\r\n                <td>{{item.municipio}}</td>\r\n                <td>{{item.total}} €</td>\r\n                <td class=\"row m-0 ml-3 justify-content-end\">\r\n                    <i v-if=\"item.estado !== 'completado'\" class=\"fas fa-check text-success col\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Marcar como realizado\" @click=\"completeOrder(item.id)\"></i>\r\n                    <router-link :to=\"{ path: '/admin/pedidos/detalles/' + item.id }\"><i class=\"fas fa-info-circle text-warning\"></i></router-link>\r\n                </td>\r\n\r\n            </tr>\r\n\r\n        </tbody>\r\n    </table>\r\n</div>";

/***/ }),

/***/ "./resources/js/components/admin/pedidos/PedidosComponent.vue":
/*!********************************************************************!*\
  !*** ./resources/js/components/admin/pedidos/PedidosComponent.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _PedidosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PedidosComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/pedidos/PedidosComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _pedidos_css_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pedidos.css?vue&type=style&index=0&lang=css& */ "./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _PedidosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/pedidos/PedidosComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/pedidos/PedidosComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/components/admin/pedidos/PedidosComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PedidosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./PedidosComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/pedidos/PedidosComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PedidosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css&":
/*!********************************************************************************************!*\
  !*** ./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css& ***!
  \********************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_pedidos_css_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./pedidos.css?vue&type=style&index=0&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/pedidos/pedidos.css?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_pedidos_css_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_pedidos_css_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_pedidos_css_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_pedidos_css_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_pedidos_css_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ })

}]);