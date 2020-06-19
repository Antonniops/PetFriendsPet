(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[16],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/HomeComponent.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/HomeComponent.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      imagen_bienvenida: '/storage/Bienvenido_a_petfriend.png',
      destacado1: '/storage/senseadultopatoypavo.png',
      destacado2: '/storage/sensesalmonypavo.png',
      destacado3: '/storage/sensehumedocordero.png',
      masvendido1: '/storage/sensehumedosalmon.jpg',
      masvendido2: '/storage/sensehumedojabaliyciervo.jpg',
      masvendido3: '/storage/sensehumedopolloypato.jpg'
    };
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true& ***!
  \****************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c("cookies-component"),
      _vm._v(" "),
      _c("div", { staticClass: "container mt-1" }, [
        _c("img", {
          staticClass: "imagen-principal",
          attrs: { src: _vm.imagen_bienvenida, alt: "" }
        })
      ]),
      _vm._v(" "),
      _vm._m(0),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass: "carousel slide",
          attrs: { id: "carouselExampleIndicators", "data-ride": "carousel" }
        },
        [
          _vm._m(1),
          _vm._v(" "),
          _c("div", { staticClass: "carousel-inner" }, [
            _c("div", { staticClass: "carousel-item active py-5" }, [
              _c(
                "section",
                {
                  staticClass:
                    "row justify-content-sm-between justify-content-center align-items-center contenedor-slider"
                },
                [
                  _c("img", {
                    staticClass: "d-block col-md-3 col-sm-4 col-6",
                    attrs: { src: _vm.destacado1, width: "150", alt: "..." }
                  }),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "col-md-5 text-center col-sm-6 col-12" },
                    [
                      _c("h3", [_vm._v("Dibaq Sense Pollo y Pavo")]),
                      _vm._v(" "),
                      _c("p", [
                        _vm._v(
                          "Uno de nuestros mejores productos pensados en la salud de tu perro"
                        )
                      ]),
                      _vm._v(" "),
                      _c(
                        "router-link",
                        {
                          staticClass: "btn btn-dark",
                          attrs: { to: "/productos/115" }
                        },
                        [_vm._v("Ver Producto")]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _vm._m(2)
                ]
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "carousel-item py-5" }, [
              _c(
                "section",
                {
                  staticClass:
                    "row justify-content-sm-between justify-content-center align-items-center contenedor-slider"
                },
                [
                  _c("img", {
                    staticClass: "d-block col-md-3 col-sm-4 col-6",
                    attrs: { src: _vm.destacado2, width: "150", alt: "..." }
                  }),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "col-md-5 text-center col-sm-6 col-12" },
                    [
                      _c("h3", [_vm._v("Dibaq Sense Pavo y salmón")]),
                      _vm._v(" "),
                      _c("p", [
                        _vm._v(
                          "Uno de nuestros mejores productos pensados en la salud de tu perro"
                        )
                      ]),
                      _vm._v(" "),
                      _c(
                        "router-link",
                        {
                          staticClass: "btn btn-dark",
                          attrs: { to: "/productos/100" }
                        },
                        [_vm._v("Ver Producto")]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _vm._m(3)
                ]
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "carousel-item py-5" }, [
              _c(
                "section",
                {
                  staticClass:
                    "row justify-content-sm-between justify-content-center align-items-center contenedor-slider"
                },
                [
                  _c("img", {
                    staticClass: "d-block col-md-3 col-sm-4 col-6",
                    attrs: { src: _vm.destacado3, width: "150", alt: "..." }
                  }),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "col-md-5 text-center col-sm-6 col-12" },
                    [
                      _c("h3", [_vm._v("Dibaq Sense Húmedo Cordero")]),
                      _vm._v(" "),
                      _c("p", [
                        _vm._v(
                          "Uno de nuestros mejores productos pensados en la salud de tu perro"
                        )
                      ]),
                      _vm._v(" "),
                      _c(
                        "router-link",
                        {
                          staticClass: "btn btn-dark",
                          attrs: { to: "/productos/112" }
                        },
                        [_vm._v("Ver Producto")]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _vm._m(4)
                ]
              )
            ])
          ]),
          _vm._v(" "),
          _vm._m(5),
          _vm._v(" "),
          _vm._m(6)
        ]
      ),
      _vm._v(" "),
      _c("section", [
        _vm._m(7),
        _vm._v(" "),
        _c(
          "section",
          { staticClass: "row masvendidos justify-content-around" },
          [
            _c("div", { staticClass: "text-center mb-5 col-sm-3 col-12" }, [
              _c("img", {
                attrs: { src: _vm.masvendido1, width: "120", alt: "..." }
              }),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "mt-4" },
                [
                  _c("h5", [_vm._v("Dibaq sense lata Salmón")]),
                  _vm._v(" "),
                  _c(
                    "router-link",
                    {
                      staticClass: "btn btn-secondary",
                      attrs: { to: "/productos/114" }
                    },
                    [_vm._v("Ver Producto")]
                  )
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "text-center mb-5 col-sm-3 col-12" }, [
              _c("img", {
                attrs: { src: _vm.masvendido2, width: "120", alt: "..." }
              }),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "mt-4" },
                [
                  _c("h5", [_vm._v("Dibaq sense lata ciervo y jabalí")]),
                  _vm._v(" "),
                  _c(
                    "router-link",
                    {
                      staticClass: "btn btn-secondary",
                      attrs: { to: "/productos/117" }
                    },
                    [_vm._v("Ver Producto")]
                  )
                ],
                1
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "text-center mb-5 col-sm-3 col-12" }, [
              _c("img", {
                attrs: { src: _vm.masvendido3, width: "120", alt: "..." }
              }),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "mt-4" },
                [
                  _c("h5", [_vm._v("Dibaq sense lata pollo y pato")]),
                  _vm._v(" "),
                  _c(
                    "router-link",
                    {
                      staticClass: "btn btn-secondary",
                      attrs: { to: "/productos/118" }
                    },
                    [_vm._v("Ver Producto")]
                  )
                ],
                1
              )
            ])
          ]
        )
      ])
    ],
    1
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("section", { staticClass: "row mt-5 align-content-center" }, [
      _c("div", { staticClass: "d-none d-sm-block col-sm-4" }, [
        _c("hr", { staticClass: "bg-primary" })
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4 text-primary text-center" }, [
        _c("p", [_vm._v("DESTACADOS")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "d-none d-sm-block col-sm-4" }, [
        _c("hr", { staticClass: "bg-primary" })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("ol", { staticClass: "carousel-indicators" }, [
      _c("li", {
        staticClass: "active",
        attrs: {
          "data-target": "#carouselExampleIndicators",
          "data-slide-to": "0"
        }
      }),
      _vm._v(" "),
      _c("li", {
        attrs: {
          "data-target": "#carouselExampleIndicators",
          "data-slide-to": "1"
        }
      }),
      _vm._v(" "),
      _c("li", {
        attrs: {
          "data-target": "#carouselExampleIndicators",
          "data-slide-to": "2"
        }
      })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "bg-primary col-md-3 col-3 d-none d-md-flex circulo" },
      [_c("p", [_vm._v("DESCUENTO 10%")])]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "bg-primary col-md-3 col-3 d-none d-md-flex circulo" },
      [_c("p", [_vm._v("DESCUENTO 10%")])]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "bg-primary col-md-3 col-3 d-none d-md-flex circulo" },
      [_c("p", [_vm._v("DESCUENTO 10%")])]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "carousel-control-prev",
        attrs: {
          href: "#carouselExampleIndicators",
          role: "button",
          "data-slide": "prev"
        }
      },
      [
        _c("span", {
          staticClass: "carousel-control-prev-icon",
          attrs: { "aria-hidden": "true" }
        }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Previous")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "carousel-control-next",
        attrs: {
          href: "#carouselExampleIndicators",
          role: "button",
          "data-slide": "next"
        }
      },
      [
        _c("span", {
          staticClass: "carousel-control-next-icon",
          attrs: { "aria-hidden": "true" }
        }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Next")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("section", { staticClass: "row mt-5 align-content-center" }, [
      _c("div", { staticClass: "d-none d-sm-block col-sm-4" }, [
        _c("hr", { staticClass: "bg-primary" })
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4 text-primary text-center" }, [
        _c("p", [_vm._v("MÁS VENDIDOS")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "d-none d-sm-block col-sm-4" }, [
        _c("hr", { staticClass: "bg-primary" })
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/HomeComponent.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/HomeComponent.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _HomeComponent_vue_vue_type_template_id_782dcf83_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true& */ "./resources/js/components/HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true&");
/* harmony import */ var _HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./HomeComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/HomeComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _HomeComponent_vue_vue_type_template_id_782dcf83_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _HomeComponent_vue_vue_type_template_id_782dcf83_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "782dcf83",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/HomeComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/HomeComponent.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/HomeComponent.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./HomeComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/HomeComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/components/HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true& ***!
  \**********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_template_id_782dcf83_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/HomeComponent.vue?vue&type=template&id=782dcf83&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_template_id_782dcf83_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_template_id_782dcf83_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);