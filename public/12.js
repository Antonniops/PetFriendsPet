(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[12],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/categoria/CategoriaComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/shared/categoria/CategoriaComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      imagenprueba: '/storage/senseadultopatoypavo.png',
      marcas: [],
      formato: [],
      edad: [],
      productos: [],
      filtros_activos: {
        marca: [],
        edad: [],
        formato: []
      },
      productsToShow: 10
    };
  },
  props: ['animal', 'producto'],
  mounted: function mounted() {
    var _this = this;

    //En cuanto se crea el componente recibimos los filtros mediante axios
    axios.get("/api/product/categoria/".concat(this.animal, "/").concat(this.producto)).then(function (res) {
      _this.marcas = res.data.filters.filter(function (elem) {
        return elem.filter_name === 'marca';
      });
      _this.formato = res.data.filters.filter(function (elem) {
        return elem.filter_name === 'formato';
      });
      _this.edad = res.data.filters.filter(function (elem) {
        return elem.filter_name === 'edad';
      });
      _this.productos = res.data.products;
    })["catch"](function (error) {
      console.log(error);
    });
  },
  methods: {
    aplicarFiltros: function aplicarFiltros() {
      var productosFiltrados = this.productos;
      var filt = this.filtros_activos; //Se recorre el objeto de filtros activados y se devuelve una copia filtrada del array de productos

      var _loop = function _loop(filter) {
        if (filt[filter].length > 0) {
          filt[filter].forEach(function (elem) {
            if (filter == "formato") {
              //El formato viene en forma de "2 kg" y el producto tiene la propiedad peso 2, unidad kg
              //Es necesario hacer split y sacar el primer valor para poder filtrarlo
              productosFiltrados = productosFiltrados.filter(function (prod) {
                return prod.peso_unidad == elem.split(" ")[0];
              });
            } else {
              productosFiltrados = productosFiltrados.filter(function (prod) {
                return prod["" + filter + ""] == elem;
              });
            }
          });
        }
      };

      for (var filter in filt) {
        _loop(filter);
      } //Si no se ha aplicado ningun filtro se devuelve igual


      return productosFiltrados.slice(0, this.productsToShow);
    },
    filtrarPrecioAscendente: function filtrarPrecioAscendente() {
      var productosOrdenados = this.productos;
      productosOrdenados.sort(function (a, b) {
        return a.precio - b.precio;
      });
      return productosOrdenados;
    },
    filtrarPrecioDescendente: function filtrarPrecioDescendente() {
      var productosOrdenados = this.productos;
      productosOrdenados.sort(function (a, b) {
        return b.precio - a.precio;
      });
      return productosOrdenados;
    },
    restablecerFiltros: function restablecerFiltros() {
      this.filtros_activos = {
        marca: [],
        edad: [],
        formato: []
      };
    }
  },
  template: __webpack_require__(/*! ./Categoria.html */ "./resources/js/components/shared/categoria/Categoria.html")
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, ".recuadro-gris[data-v-6c8478f5] {\r\n    background-color: gray;\n}\n.filtro-icon[data-v-6c8478f5] {\r\n    cursor: pointer;\n}\nli[data-v-6c8478f5] {\r\n    list-style-type: none;\r\n    margin: 20px 0;\r\n    cursor: pointer;\r\n    max-width: 180px;\n}\n.filtro[data-v-6c8478f5] {\r\n    font-size: 14px;\n}\n.texto-restablecer[data-v-6c8478f5] {\r\n    cursor: pointer;\n}\n.img-producto[data-v-6c8478f5] {\r\n    width: 120px;\n}\n.ver-mas[data-v-6c8478f5] {\r\n    max-height: 35px;\n}\n@media only screen and (max-width: 480px) {\n.img-producto[data-v-6c8478f5] {\r\n        width: 90px;\n}\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true&");

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

/***/ "./resources/js/components/shared/categoria/Categoria.html":
/*!*****************************************************************!*\
  !*** ./resources/js/components/shared/categoria/Categoria.html ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div>\r\n    <h3 class=\"mt-5\">\r\n        PRODUCTOS\r\n\r\n        <hr>\r\n    </h3>\r\n\r\n    <p class=\"text-right mb-5\">{{aplicarFiltros().length}} RESULTADOS</p>\r\n\r\n\r\n\r\n    <!-- Sección con caja de filtrado -->\r\n    <section class=\"row m-0 justify-content-between\">\r\n\r\n        <section class=\"col-md-3 mb-5\">\r\n\r\n            <div class=\"row recuadro-gris align-items-center p-2 justify-content-between m-0\">\r\n                <p class=\"text-white m-0\">FILTRAR</p>\r\n\r\n                <div>\r\n                    <span class=\"filtro-icon d-md-inline-block d-none\" @click=\"aplicarFiltros()\"><i class=\"fas fa-filter text-white\"></i></span>\r\n                    <span class=\"filtro-icon ml-3\" data-toggle=\"collapse\" data-target=\"#filtercollapse\" aria-expanded=\"true\" aria-controls=\"filtercollapse\">\r\n                        <i class=\"fas fa-sort-down text-white\"></i>\r\n                    </span>\r\n                </div>\r\n\r\n\r\n            </div>\r\n\r\n            <ul class=\"collapse\" id=\"filtercollapse\">\r\n                <li class=\"row justify-content-between\" data-toggle=\"collapse\" data-target=\"#marcacollapse\" aria-expanded=\"false\" aria-controls=\"marcascollapse\">\r\n                    MARCAS\r\n\r\n                    <i class=\"fas fa-chevron-down ml-5\"></i>\r\n\r\n\r\n                    <ul class=\"collapse\" id=\"marcacollapse\">\r\n                        <li v-for=\"item in marcas\" class=\"ml-4\">\r\n                            <input type=\"checkbox\" name=\"\" id=\"\" :value=\"item.valor\" v-model=\"filtros_activos.marca\" @change=\"aplicarFiltros()\">\r\n                            <span class=\"ml-3 filtro\">{{item.valor}}</span>\r\n                        </li>\r\n                    </ul>\r\n                </li>\r\n\r\n                <li class=\"row justify-content-between\" data-toggle=\"collapse\" data-target=\"#formatocollapse\" aria-expanded=\"false\" aria-controls=\"formatocollapse\">\r\n                    FORMATO\r\n\r\n                    <i class=\"fas fa-chevron-down ml-5\"></i>\r\n\r\n                    <ul class=\"collapse\" id=\"formatocollapse\">\r\n                        <li v-for=\"item in formato\" class=\"ml-4\">\r\n                            <input type=\"checkbox\" name=\"\" id=\"\" :value=\"item.valor\" v-model=\"filtros_activos.formato\" @change=\"aplicarFiltros()\">\r\n                            <span class=\"ml-3 filtro\">{{item.valor}}</span>\r\n                        </li>\r\n                    </ul>\r\n                </li>\r\n\r\n                <li class=\"row justify-content-between\" data-toggle=\"collapse\" data-target=\"#preciocollapse\" aria-expanded=\"false\" aria-controls=\"preciocollapse\">\r\n                    PRECIO\r\n\r\n                    <i class=\"fas fa-chevron-down ml-5\"></i>\r\n\r\n                    <ul class=\"collapse\" id=\"preciocollapse\">\r\n                        <li class=\"ml-4\">\r\n                            <input type=\"radio\" id=\"precioAscendente\" name=\"precio\" value=\"ascendente\" @change=\"filtrarPrecioAscendente()\">\r\n                            <span class=\"ml-3 filtro\">Precio Ascendente</span>\r\n                        </li>\r\n                        <li class=\"ml-4\">\r\n                            <input type=\"radio\" id=\"precioDscendente\" name=\"precio\" value=\"descendente\" @change=\"filtrarPrecioDescendente()\">\r\n                            <span class=\"ml-3 filtro\">Precio Descendente</span>\r\n                        </li>\r\n                    </ul>\r\n                </li>\r\n\r\n                <li class=\"row justify-content-between\" data-toggle=\"collapse\" data-target=\"#edadcollapse\" aria-expanded=\"false\" aria-controls=\"edadcollapse\">\r\n                    EDAD\r\n\r\n                    <i class=\"fas fa-chevron-down ml-5\"></i>\r\n\r\n                    <ul class=\"collapse\" id=\"edadcollapse\">\r\n                        <li v-for=\"item in edad\" class=\"ml-4\">\r\n                            <input type=\"checkbox\" name=\"\" id=\"\" :value=\"item.valor\" v-model=\"filtros_activos.edad\" @change=\"aplicarFiltros()\">\r\n                            <span class=\"ml-3 filtro\">{{item.valor}}</span>\r\n                        </li>\r\n                    </ul>\r\n                </li>\r\n\r\n                <li class=\"recuadro-gris p-2 text-center\">\r\n                    <p class=\"text-white m-0 texto-restablecer\" @click=\"restablecerFiltros()\">RESTABLECER</p>\r\n                </li>\r\n            </ul>\r\n\r\n\r\n\r\n        </section>\r\n\r\n\r\n\r\n\r\n        <section class=\"col-md-9 row\">\r\n\r\n            <!-- Listado de productos -->\r\n            <div class=\"text-center mb-5 col-6\" v-for=\"prod in aplicarFiltros()\" :key=\"prod.id\">\r\n                <img :src=\"/storage/ + prod.imagen\" class=\"img-producto\" alt=\"...\">\r\n                <div class=\"mt-4\">\r\n                    <p>{{prod.nombre}}</p>\r\n                    <p>{{prod.precio}} €</p>\r\n                    <router-link :to=\"{ path: '/productos/' + prod.id }\" class=\"btn btn-secondary\">Ver Producto</router-link>\r\n                </div>\r\n            </div>\r\n\r\n            <!-- Boton para ver más productos -->\r\n            <div class=\"mb-5 col-12 d-flex justify-content-center ver-mas\" v-if=\"aplicarFiltros().length\">\r\n                <button class=\"btn btn-primary px-5\" @click=\"productsToShow += 5\">Ver más</button>\r\n            </div>\r\n\r\n\r\n        </section>\r\n\r\n    </section>\r\n</div>";

/***/ }),

/***/ "./resources/js/components/shared/categoria/CategoriaComponent.vue":
/*!*************************************************************************!*\
  !*** ./resources/js/components/shared/categoria/CategoriaComponent.vue ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _CategoriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CategoriaComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/shared/categoria/CategoriaComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _categoria_css_vue_type_style_index_0_id_6c8478f5_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true& */ "./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _CategoriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  "6c8478f5",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/shared/categoria/CategoriaComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/shared/categoria/CategoriaComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/shared/categoria/CategoriaComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CategoriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./CategoriaComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/categoria/CategoriaComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CategoriaComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true&":
/*!*************************************************************************************************************************!*\
  !*** ./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true& ***!
  \*************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_categoria_css_vue_type_style_index_0_id_6c8478f5_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/shared/categoria/categoria.css?vue&type=style&index=0&id=6c8478f5&lang=css&scoped=true&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_categoria_css_vue_type_style_index_0_id_6c8478f5_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_categoria_css_vue_type_style_index_0_id_6c8478f5_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_categoria_css_vue_type_style_index_0_id_6c8478f5_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_categoria_css_vue_type_style_index_0_id_6c8478f5_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_categoria_css_vue_type_style_index_0_id_6c8478f5_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ })

}]);