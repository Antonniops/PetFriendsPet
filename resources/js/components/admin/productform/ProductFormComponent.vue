<script>
export default {
    template: require("./ProductForm.html"),

    data() {
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
        insertarProducto() {
            //Header para el envio en la peticion
            const config = {
                headers: { "content-type": "multipart/form-data" }
            };

            //Creacion de objeto de envio, para el formato correcto de imagen
            let data = new FormData();

            for (const prop in this.producto) {
                data.append(prop, this.producto[prop]);
            }

            //Envio de datos
            axios
                .post("/api/product", data, config)
                .then(res => {
                    //Si no hay errores redirige al listado de productos
                    if (res.data.success) {
                        this.$router.push("/admin/productos");
                    }
                    //Formateo de la respuesta de errores
                    this.errors = res.data.errors;
                    this.errors = Object.values(res.data);
                    this.errors = this.errors.flat();
                })
                .catch(err => {
                    console.log(err);
                });
        },
        onImageChange(e) {
            //Captura la imagen del formulario
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length) return;
            //Asigna la imagen al objeto de envio
            this.producto.imagen = files[0];
            this.createImage(files[0]);
        },
        //Crea la imagen de previsualizacion
        createImage(file) {
            let reader = new FileReader();

            reader.onload = e => {
                this.temp_img = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
};
</script>

<style lang="css" scoped src="./productform.css"></style>
