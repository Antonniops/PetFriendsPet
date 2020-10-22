(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[6],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/productform/ProductFormComponent.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/admin/productform/ProductFormComponent.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
  template: __webpack_require__(/*! ./ProductForm.html */ "./resources/js/components/admin/productform/ProductForm.html"),
  data: function data() {
    return {
      producto: {
        nombre: "",
        descripcion: "",
        precio: null,
        precio_oferta: null,
        categoria: "",
        marca: "",
        peso_unidad: null,
        ud_peso: "",
        tipo_animal: "",
        destacado: false,
        edad: "",
        imagen: ""
      },
      //Imagen previsualizacion
      temp_img: null,
      errors: []
    };
  },
  methods: {
    insertarProducto: function insertarProducto() {
      var _this = this;

      //Header para el envio en la peticion
      var config = {
        headers: {
          "content-type": "multipart/form-data"
        }
      }; //Creacion de objeto de envio, para el formato correcto de imagen

      var data = new FormData();

      for (var prop in this.producto) {
        data.append(prop, this.producto[prop]);
      } //Envio de datos


      axios.post("/api/product", data, config).then(function (res) {
        //Si no hay errores redirige al listado de productos
        if (res.data.success) {
          _this.$router.push("/admin/productos");
        } //Formateo de la respuesta de errores


        _this.errors = res.data.errors;
        _this.errors = Object.values(res.data);
        _this.errors = _this.errors.flat();
      })["catch"](function (err) {
        console.log(err);
      });
    },
    onImageChange: function onImageChange(e) {
      //Captura la imagen del formulario
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return; //Asigna la imagen al objeto de envio

      this.producto.imagen = files[0];
      this.createImage(files[0]);
    },
    //Crea la imagen de previsualizacion
    createImage: function createImage(file) {
      var _this2 = this;

      var reader = new FileReader();

      reader.onload = function (e) {
        _this2.temp_img = e.target.result;
      };

      reader.readAsDataURL(file);
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true&":
/*!*************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true& ***!
  \*************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true&");

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

/***/ "./resources/js/components/admin/productform/ProductForm.html":
/*!********************************************************************!*\
  !*** ./resources/js/components/admin/productform/ProductForm.html ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<form class=\"m-5\" enctype=\"multipart/form-data\">\r\n\r\n    <h3 class=\"mb-3\">Formulario de un producto</h3>\r\n\r\n    <div>\r\n        <ul>\r\n            <li v-for=\"err in errors\" class=\"text-danger mb-1 ml-3\">\r\n                {{err}}\r\n            </li>\r\n        </ul>\r\n    </div>\r\n\r\n    <section class=\"row\">\r\n        <section class=\"col-6\">\r\n            <div class=\"form-group\">\r\n                <label for=\"nombre\">Nombre</label>\r\n                <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\" v-model=\"producto.nombre\">\r\n                <div class=\"bg-danger\" v-if=\"errors.nombre\">{{errors.nombre}}</div>\r\n            </div>\r\n            <div class=\"form-group\">\r\n                <label for=\"descripcion\">Descripción</label>\r\n                <textarea class=\"form-control\" id=\"descripcion\" rows=\"3\" name=\"descripcion\" v-model=\"producto.descripcion\"></textarea>\r\n            </div>\r\n            <div class=\"form-group\">\r\n                <label for=\"precio\">Precio</label>\r\n                <input type=\"text\" class=\"form-control\" id=\"precio\" name=\"precio\" v-model=\"producto.precio\">\r\n            </div>\r\n\r\n            <div class=\"form-group\">\r\n                <label for=\"precio_oferta\">Precio Oferta</label>\r\n                <input type=\"text\" class=\"form-control\" id=\"precio_oferta\" name=\"precio_oferta\" v-model=\"producto.precio_oferta\">\r\n            </div>\r\n\r\n            <div class=\"form-group\">\r\n                <label for=\"categoria\">Categoría</label>\r\n                <input type=\"text\" class=\"form-control\" id=\"categoria\" name=\"categoria\" v-model=\"producto.categoria\">\r\n            </div>\r\n\r\n            <div class=\"form-group\">\r\n                <label for=\"marca\">Marca</label>\r\n                <input type=\"text\" class=\"form-control\" id=\"marca\" name=\"marca\" v-model=\"producto.marca\">\r\n            </div>\r\n        </section>\r\n\r\n        <section class=\"col-6\">\r\n            <div class=\"form-group\">\r\n                <label for=\"peso_unidad\">Peso de la unidad</label>\r\n                <input type=\"number\" class=\"form-control\" id=\"peso_unidad\" name=\"peso_unidad\" v-model=\"producto.peso_unidad\">\r\n            </div>\r\n            <div class=\"form-group\">\r\n                <label for=\"ud_peso\">Unidad de peso</label>\r\n                <select class=\"form-control\" id=\"ud_peso\" name=\"ud_peso\" min=\"0\" v-model=\"producto.ud_peso\">\r\n                  <option value=\"g\">Gramos</option>\r\n                  <option value=\"kg\">Kilogramos</option>\r\n                </select>\r\n            </div>\r\n            <div class=\"form-group\">\r\n                <label for=\"tipo_animal\">Tipo animal</label>\r\n                <select class=\"form-control\" id=\"tipo_animal\" name=\"tipo_animal\" v-model=\"producto.tipo_animal\">\r\n                  <option value=\"perro\">Perro</option>\r\n                  <option value=\"gato\">Gato</option>\r\n                  <option value=\"pez\">Pez</option>\r\n                  <option value=\"roedor\">Roedor</option>\r\n                  <option value=\"pajaro\">Pájaro</option>\r\n                  <option value=\"reptil\">Reptil</option>\r\n                </select>\r\n            </div>\r\n            <div class=\"form-group\">\r\n                <label for=\"edad\">Edad</label>\r\n                <select class=\"form-control\" id=\"edad\" name=\"edad\" v-model=\"producto.edad\">\r\n                  <option disabled>Perros</option>\r\n                  <option value=\"puppy\">Puppy</option>\r\n                  <option value=\"adult\">Adult</option>\r\n                  <option value=\"senior\">Senior</option>\r\n                  <option disabled>Gatos</option>\r\n                  <option value=\"kitten\">Kitten</option>\r\n                  <option value=\"adult\">Adult</option>\r\n                  <option value=\"senior\">Senior</option>\r\n                  <option disabled>Otros</option>\r\n                  <option value=\"roedor\">Estándar</option>\r\n\r\n                </select>\r\n            </div>\r\n\r\n            <div class=\"form-group form-check text-right my-4\">\r\n                <input type=\"checkbox\" class=\"form-check-input\" id=\"destacado\" name=\"destacado\" v-model=\"producto.destacado\">\r\n                <label class=\"form-check-label\" for=\"destacado\">Destacado</label>\r\n            </div>\r\n\r\n            <div class=\"form-group\">\r\n                <label for=\"imagen\">Imagen del producto</label>\r\n                <input type=\"file\" class=\"form-control-file\" id=\"imagen\" name=\"imagen\" v-on:change=\"onImageChange\">\r\n\r\n                <div class=\"col-md-3 mt-3\" v-if=\"producto.imagen\">\r\n                    <img :src=\"temp_img\" class=\"img-responsive\" width=\"150\">\r\n                </div>\r\n            </div>\r\n        </section>\r\n    </section>\r\n\r\n\r\n    <button type=\"submit\" class=\"btn btn-primary\" @click.prevent=\"insertarProducto()\">Crear</button>\r\n</form>";

/***/ }),

/***/ "./resources/js/components/admin/productform/ProductFormComponent.vue":
/*!****************************************************************************!*\
  !*** ./resources/js/components/admin/productform/ProductFormComponent.vue ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ProductFormComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ProductFormComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/productform/ProductFormComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _productform_css_vue_type_style_index_0_id_2daa0031_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true& */ "./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ProductFormComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  "2daa0031",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/productform/ProductFormComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/productform/ProductFormComponent.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/components/admin/productform/ProductFormComponent.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductFormComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./ProductFormComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/admin/productform/ProductFormComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProductFormComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true&":
/*!****************************************************************************************************************************!*\
  !*** ./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true& ***!
  \****************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_productform_css_vue_type_style_index_0_id_2daa0031_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!./productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./resources/js/components/admin/productform/productform.css?vue&type=style&index=0&id=2daa0031&lang=css&scoped=true&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_productform_css_vue_type_style_index_0_id_2daa0031_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_productform_css_vue_type_style_index_0_id_2daa0031_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_productform_css_vue_type_style_index_0_id_2daa0031_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_productform_css_vue_type_style_index_0_id_2daa0031_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_productform_css_vue_type_style_index_0_id_2daa0031_lang_css_scoped_true___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ })

}]);