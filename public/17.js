(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[17],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/producto/ProductoComponent.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/shared/producto/ProductoComponent.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      recomendado1: '/storage/sensesalmonypavo.png',
      recomendado2: '/storage/senseadultopatoypavo.png',
      recomendado3: '/storage/sensehumedocordero.png',
      product: {},
      producto_agregado: false,
      ya_en_carrito: false,
      productos_recomendados: []
    };
  },
  template: __webpack_require__(/*! ./Producto.html */ "./resources/js/components/shared/producto/Producto.html"),
  props: ['id'],
  created: function created() {
    var _this = this;

    //En cuanto se crea el componente recibimos el producto mediante axios
    axios.get("/api/product/".concat(this.id)).then(function (res) {
      _this.product = res.data;
      console.log(res); //Agregamos path a atributo imagen

      _this.product.imagen = '/storage/' + res.data.imagen; //Agregamos atributo cantidad, uso vue set para que sea reactivo, sino es estatico

      Vue.set(_this.product, 'cantidad_producto', 1);

      _this.obtenerRecomendados();
    })["catch"](function (error) {
      console.log(error);
    });
    axios.post('/api/product/increment_visits', {
      id_producto: this.id
    }).then(function (res) {
      console.log(res.msg);
    });
  },
  methods: {
    aniadirCarrito: function aniadirCarrito() {
      var _this2 = this;

      //Recibe el carrito de vuex
      var cart = this.$store.getters.getCart; //Si no se ha encontrado el producto en el carrito lo agrega

      if (!cart.find(function (elem) {
        return elem.id === _this2.product.id;
      })) {
        //Vuex mutation addToCart
        this.$store.commit('addToCart', this.product); //Timeout para mostrar una alerta

        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
        this.producto_agregado = true;
        setTimeout(function () {
          _this2.producto_agregado = false;
        }, 2000); //Vuex mutation para guardar en localStorage

        this.$store.commit('saveCart');
      } else {
        //Muestra una alerta en caso de que ya esté en el carrito
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
        this.ya_en_carrito = true;
        setTimeout(function () {
          _this2.ya_en_carrito = false;
        }, 2000);
      }
    },
    //Recibe del componente hijo <formcantidad-component> la cantidad del producto
    actualizarCantidad: function actualizarCantidad(numero_a_modificar) {
      this.product.cantidad_producto += numero_a_modificar;
    },
    //Obtiene un listado de productos recomendados para este producto
    obtenerRecomendados: function obtenerRecomendados() {
      var _this3 = this;

      //Datos para obtener la consulta
      var datos = {
        'animal': this.product.tipo_animal,
        'categoria': this.product.categoria,
        'id_producto_excluir': this.product.id
      };
      axios.post('/api/product/recomendados', datos).then(function (res) {
        _this3.productos_recomendados = res.data.products;
      })["catch"](function (err) {
        console.log(err);
      });
    }
  },
  computed: {
    notification_style: function notification_style() {
      return {
        'alert-success': this.producto_agregado,
        ocultar: !this.producto_agregado
      };
    },
    ya_en_carrito_style: function ya_en_carrito_style() {
      return {
        'alert-warning': this.ya_en_carrito,
        ocultar: !this.ya_en_carrito
      };
    },
    cantidad_producto: function cantidad_producto() {
      return this.product.cantidad_producto;
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css&":
/*!****************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css& ***!
  \****************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, ".img-product[data-v-22ef48c6] {\r\n    max-width: 100%;\n}\n@media only screen and (max-width:576px) {\n.img-product[data-v-22ef48c6] {\r\n        max-width: 130px;\n}\n}\nmain form[data-v-22ef48c6] {\r\n    width: 120px;\n}\nmain .descr-producto .descripcion[data-v-22ef48c6] {\r\n    background-color: #dcd8d8;\n}\nmain .descr-producto .descripcion .titulo-componente[data-v-22ef48c6] {\r\n    font-weight: 700;\n}\nmain .descr-producto hr[data-v-22ef48c6] {\r\n    margin: 0.1px;\r\n    width: 400px;\n}\n.ocultar[data-v-22ef48c6] {\r\n    display: none;\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css&":
/*!********************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css& ***!
  \********************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css&");

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

/***/ "./resources/js/components/shared/producto/Producto.html":
/*!***************************************************************!*\
  !*** ./resources/js/components/shared/producto/Producto.html ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"mt-5\">\r\n\r\n\r\n    <div :class=\"notification_style\" class=\"p-2\">\r\n        <p>El producto se ha agregado al carrito correctamente</p>\r\n    </div>\r\n\r\n    <div :class=\"ya_en_carrito_style\" class=\"p-2\">\r\n        <p>El producto ya se encuentra actualmente en el carrito</p>\r\n    </div>\r\n\r\n\r\n    <section class=\"row justify-content-around\">\r\n\r\n        <section class=\"row my-5 col-md-7 justify-content-between\">\r\n            <div class=\"col-sm-4 text-center\">\r\n                <img :src=\"product.imagen\" class=\"img-product\" alt=\"\">\r\n            </div>\r\n\r\n            <div class=\"col-sm-8 text-center ml-3 mt-4 ml-sm-0 mt-sm-0\">\r\n                <p>{{product.nombre}}</p>\r\n                <p class=\"m-0\">FORMATO</p>\r\n                <span class=\"bg-black p-1 text-white\">{{product.peso_unidad}}{{product.ud_peso}} <small>({{product.precio_kilogramo}}€/{{product.ud_peso}})</small> </span>\r\n\r\n                <p class=\"m-0 mt-3\">PRECIO UNIDAD</p>\r\n                <span class=\"bg-black p-1 text-white\">{{product.precio}}€ </span>\r\n\r\n\r\n                <div class=\"d-flex flex-column align-items-center\">\r\n                    <p class=\"mt-3\">CANTIDAD</p>\r\n                    <form>\r\n                        <!-- MUESTRA EL INPUT DE LA CANTIDAD Y LOS BOTONES DE MAS Y MENOS -->\r\n                        <formcantidad-component :cantidad_producto=\"cantidad_producto\" @modificarCantidad=\"actualizarCantidad\"></formcantidad-component>\r\n\r\n                        <button @click.prevent=\"aniadirCarrito()\" class=\"btn btn-secondary mt-3\">Añadir al carrito</button>\r\n                    </form>\r\n\r\n                </div>\r\n\r\n            </div>\r\n        </section>\r\n\r\n        <section class=\"col-md-4 my-5\">\r\n            <div class=\"text-center mb-2\">\r\n                <p class=\"descripcion-span d-inline-block px-3 py-1 \">RECOMENDADOS</p>\r\n            </div>\r\n\r\n            <div class=\"row justify-content-center align-items-center mb-3\" v-for=\"prod in productos_recomendados\">\r\n                <img :src=\"/storage/ + prod.imagen\" alt=\"\" class=\"col-md-4 col-3\">\r\n\r\n                <div class=\"col-md-7 col-6\">\r\n                    <p>{{prod.nombre}}</p>\r\n                    <button class=\"bg-secondary\"><router-link :to=\"{ path: '/productos/' + prod.id }\" class=\"text-white\">Ver Producto</router-link></button>\r\n                </div>\r\n            </div>\r\n\r\n        </section>\r\n    </section>\r\n\r\n\r\n    <section class=\"container descr-producto\">\r\n        <span class=\"text-white bg-secondary2 px-2\">Descripción</span>\r\n        <hr class=\"bg-secondary\">\r\n\r\n        <section class=\"descripcion p-4\">\r\n\r\n            {{product.descripcion}}\r\n\r\n        </section>\r\n\r\n\r\n\r\n    </section>\r\n\r\n\r\n</div>";

/***/ }),

/***/ "./resources/js/components/shared/producto/ProductoComponent.vue":
/*!***********************************************************************!*\
  !*** ./resources/js/components/shared/producto/ProductoComponent.vue ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ProductoComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ProductoComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/shared/producto/ProductoComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _producto_css_vue_type_style_index_0_id_22ef48c6_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css& */ "./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ProductoComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  "22ef48c6",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/shared/producto/ProductoComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/shared/producto/ProductoComponent.vue?vue&type=script&lang=js&":
/*!************************************************************************************************!*\
  !*** ./resources/js/components/shared/producto/ProductoComponent.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductoComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./ProductoComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/producto/ProductoComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductoComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css&":
/*!***********************************************************************************************************************!*\
  !*** ./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css& ***!
  \***********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_producto_css_vue_type_style_index_0_id_22ef48c6_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/producto/producto.css?vue&type=style&index=0&id=22ef48c6&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_producto_css_vue_type_style_index_0_id_22ef48c6_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_producto_css_vue_type_style_index_0_id_22ef48c6_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_producto_css_vue_type_style_index_0_id_22ef48c6_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_producto_css_vue_type_style_index_0_id_22ef48c6_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_producto_css_vue_type_style_index_0_id_22ef48c6_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ })

}]);