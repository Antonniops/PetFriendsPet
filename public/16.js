(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[16],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/NavbarComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/shared/NavbarComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      logo_src: '/storage/logo.jpg'
    };
  },
  mounted: function mounted() {
    console.log(this.logged_user);
  },
  computed: {
    numero_items: function numero_items() {
      return this.$store.getters.getCart.length;
    },
    logged_user: function logged_user() {
      return this.$store.getters.getUser;
    }
  },
  methods: {
    logout: function logout() {
      this.$store.commit('logout');
      this.$router.go(0);
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/NavbarComponent.vue?vue&type=template&id=28d688e4&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/shared/NavbarComponent.vue?vue&type=template&id=28d688e4& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
  return _c("header", [
    _c("div", { staticClass: "bg-primary" }, [
      _c(
        "nav",
        { staticClass: "navbar mx-auto row container navegador-logo" },
        [
          _c(
            "section",
            {
              staticClass: "d-flex flex-row barra-superior justify-content-end"
            },
            [
              _c(
                "div",
                [
                  _vm.logged_user
                    ? _c("span", { staticClass: "mx-3 text-white" }, [
                        _vm._v(_vm._s(_vm.logged_user))
                      ])
                    : _vm._e(),
                  _vm._v(" "),
                  _c("router-link", { attrs: { to: "/" } }, [
                    _vm.logged_user
                      ? _c("i", {
                          staticClass: "fas fa-sign-out-alt fa-2x text-white",
                          on: {
                            click: function($event) {
                              return _vm.logout()
                            }
                          }
                        })
                      : _vm._e()
                  ]),
                  _vm._v(" "),
                  _c(
                    "router-link",
                    {
                      staticClass: "text-right dropdown",
                      attrs: { to: "/auth-login" }
                    },
                    [
                      _vm.logged_user == null
                        ? _c("i", {
                            staticClass: "fas fa-user text-white fa-2x"
                          })
                        : _vm._e()
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                [
                  _c(
                    "router-link",
                    {
                      staticClass: "text-right ml-3",
                      attrs: { to: "/carrito" }
                    },
                    [
                      _c("i", {
                        staticClass: "fas fa-shopping-cart text-white fa-2x"
                      }),
                      _vm._v(" "),
                      _c("span", { staticClass: "badge badge-warning" }, [
                        _vm._v(_vm._s(_vm.numero_items))
                      ])
                    ]
                  )
                ],
                1
              )
            ]
          )
        ]
      )
    ]),
    _vm._v(" "),
    _c("nav", { staticClass: "navbar navbar-expand-lg container pt-3" }, [
      _c(
        "div",
        { staticClass: "navbar-brand col-3" },
        [
          _c("router-link", { attrs: { to: "/" } }, [
            _c("img", {
              staticClass: "logo sombra-logo ",
              attrs: { src: _vm.logo_src, alt: " " }
            })
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "busqueda p-0 col-12 col-sm-6 ml-sm-3 col-lg-4" },
        [_c("buscador-component")],
        1
      ),
      _vm._v(" "),
      _vm._m(0),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass: "collapse navbar-collapse col-12 col-md-6 mt-3",
          attrs: { id: "navbarSupportedContent" }
        },
        [
          _c("ul", { staticClass: "navbar-nav" }, [
            _c(
              "li",
              { staticClass: " nav-item" },
              [
                _c(
                  "router-link",
                  {
                    staticClass: "nav-link text-primary ",
                    attrs: { to: "/perros" }
                  },
                  [_vm._v("PERROS")]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "li",
              { staticClass: "nav-item " },
              [
                _c(
                  "router-link",
                  {
                    staticClass: "nav-link text-primary ",
                    attrs: { to: "/gatos" }
                  },
                  [_vm._v("GATOS")]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "li",
              { staticClass: "nav-item " },
              [
                _c(
                  "router-link",
                  {
                    staticClass: "nav-link text-primary ",
                    attrs: { to: "/otros" }
                  },
                  [_vm._v("OTROS")]
                )
              ],
              1
            ),
            _vm._v(" "),
            _vm._m(1)
          ])
        ]
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "navbar-toggler",
        attrs: {
          type: "button",
          "data-toggle": "collapse",
          "data-target": "#navbarSupportedContent",
          "aria-controls": "navbarSupportedContent",
          "aria-expanded": "false",
          "aria-label": "Toggle navigation"
        }
      },
      [
        _c("i", {
          staticClass: "fas fa-bars navbar-toggler-icon",
          staticStyle: { color: "gray", "font-size": "28px" }
        })
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("li", { staticClass: "nav-item " }, [
      _c(
        "a",
        {
          staticClass: "nav-link text-primary ",
          attrs: { href: "./peluqueria.html" }
        },
        [_vm._v("PELUQUERÍA")]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/shared/NavbarComponent.vue":
/*!************************************************************!*\
  !*** ./resources/js/components/shared/NavbarComponent.vue ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _NavbarComponent_vue_vue_type_template_id_28d688e4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavbarComponent.vue?vue&type=template&id=28d688e4& */ "./resources/js/components/shared/NavbarComponent.vue?vue&type=template&id=28d688e4&");
/* harmony import */ var _NavbarComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavbarComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/shared/NavbarComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _NavbarComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _NavbarComponent_vue_vue_type_template_id_28d688e4___WEBPACK_IMPORTED_MODULE_0__["render"],
  _NavbarComponent_vue_vue_type_template_id_28d688e4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/shared/NavbarComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/shared/NavbarComponent.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/shared/NavbarComponent.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./NavbarComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/NavbarComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/shared/NavbarComponent.vue?vue&type=template&id=28d688e4&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/shared/NavbarComponent.vue?vue&type=template&id=28d688e4& ***!
  \*******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarComponent_vue_vue_type_template_id_28d688e4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./NavbarComponent.vue?vue&type=template&id=28d688e4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/shared/NavbarComponent.vue?vue&type=template&id=28d688e4&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarComponent_vue_vue_type_template_id_28d688e4___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarComponent_vue_vue_type_template_id_28d688e4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);