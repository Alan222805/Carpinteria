

@extends('Comun')
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <style>
    #app {
      background-color: #CFD8DC;
    }
  </style>
</head>
@section('ContenidoPrincipal')
<body>
<div id="app">
  <v-app>
    <v-main>
      <h2 class="text-center">Gestión de Inventario</h2>
      <!-- Botón CREAR -->
      <v-card class="mx-auto mt-5 d-flex justify-center align-center" color="transparent" max-width="1280" elevation="0">
        <v-btn class="mx-2" fab dark color="black" @click="formNuevo()"><v-icon dark>mdi-plus</v-icon></v-btn>

        <!-- Tabla y formulario -->
        <v-simple-table class="mt-5" style="background-color: black;">
          <template v-slot:default>
            <thead>
              
              <tr class="black">
                <th class="white--text">ID</th>
                <th class="white--text">Nombre</th>
                <th class="white--text">Color</th>
                <th  class="white--text">Precio</th>
                <th class="white--text">Dimensiones</th>
                <th  class="white--text">Material</th>
                <th  class="white--text">Stock</th>
                <th  class="white--text">Descripción</th>
                <th class="white--text">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="articulo in articulos" :key="articulo.id">
                <td>{{ articulo.id }}</td>
                <td>{{ articulo.nombre }}</td>
                <td>{{ articulo.color }}</td>
                <td>{{ articulo.precio }}</td>
                <td>{{ articulo.dimensiones }}</td>
                <td>{{ articulo.material }}</td>
                <td>{{ articulo.stock }}</td>
                <td>{{ articulo.descripcion }}</td>
                <td>
                  <v-btn class="grey" dark small fab @click="formEditar(articulo.id, articulo.nombre, articulo.color, articulo.precio, articulo.dimensiones, articulo.material, articulo.stock, articulo.descripcion)"><v-icon>mdi-pencil</v-icon></v-btn>
                  <v-btn class="grey" fab dark small @click="borrar(articulo.id)"><v-icon>mdi-delete</v-icon></v-btn>
                </td>
              </tr>
            </tbody>
          </template>
        </v-simple-table>
      </v-card>
      <!-- Componente de Diálogo para CREAR y EDITAR -->
      <v-dialog v-model="dialog" max-width="500">
        <v-card>
          <v-card-title class="black darken-4 white--text">Artículo</v-card-title>

          <v-card-text>
            <v-form>
              <v-container>
                <v-row>
                  <input v-model="articulo.id" hidden></input>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.nombre" label="Nombre" solo required></v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.color" label="Color" solo required></v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.precio" label="Precio" type="number" prefix="$" solo required></v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.dimensiones" label="Dimensiones" solo required></v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.material" label="Material" solo required></v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.stock" label="Stock" type="number" solo required></v-text-field>
                  </v-col>
                  <v-col cols="12">
                    <v-textarea v-model="articulo.descripcion" label="Descripción" solo required></v-textarea>
                  </v-col>
                </v-row>
              </v-container>
            </v-form>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click="dialog=false" color="blue-grey" dark>Cancelar</v-btn>
            <v-btn @click="guardar()" type="submit" color="orange" dark>Guardar</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-main>
  </v-app>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js" integrity="sha512-nqIFZC8560+CqHgXKez61MI0f9XSTKLkm0zFVm/99Wt0jSTZ7yeeYwbzyl0SGn/s8Mulbdw+ScCG41hmO2+FKw==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.all.min.js"></script>
<script>
  let url = 'http://localhost:8000/api/articulo/';
  new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    data() {
      return {
        articulos: [],
        dialog: false,
        operacion: '',
        articulo: {
          id: '',
          nombre: '',
          color: '',
          precio: '',
          dimensiones: '',
          material: '',
          stock: '',
          descripcion: ''
        }
      }
    },
    created() {
      this.mostrar()
    },
    methods: {
      // Métodos para el CRUD
      mostrar: async function () {
        try {
          const response = await axios.get(url);
          this.articulos = response.data;
        } catch (error) {
          console.error('Error al obtener los datos:', error);
        }
      },
      crear: async function () {
        try {
          let parametros = { 
            nombre: this          .articulo.nombre,
            color: this.articulo.color,
            precio: this.articulo.precio,
            dimensiones: this.articulo.dimensiones,
            material: this.articulo.material,
            stock: this.articulo.stock,
            descripcion: this.articulo.descripcion 
          };
          const response = await axios.post(url, parametros);
          this.mostrar();
          this.articulo.nombre = "";
          this.articulo.color = "";
          this.articulo.precio = "";
          this.articulo.dimensiones = "";
          this.articulo.material = "";
          this.articulo.stock = "";
          this.articulo.descripcion = "";
        } catch (error) {
          console.error('Error al crear el artículo:', error);
        }
      },
      editar: async function () {
        try {
          let parametros = { 
            nombre: this.articulo.nombre,
            color: this.articulo.color,
            precio: this.articulo.precio,
            dimensiones: this.articulo.dimensiones,
            material: this.articulo.material,
            stock: this.articulo.stock,
            descripcion: this.articulo.descripcion,
            id: this.articulo.id 
          };
          const response = await axios.put(url + this.articulo.id, parametros);
          this.mostrar();
        } catch (error) {
          console.error('Error al editar el artículo:', error);
        }
      },
      borrar: async function (id) {
        try {
          const result = await Swal.fire({
            title: '¿Confirma eliminar el registro?',
            confirmButtonText: `Confirmar`,
            showCancelButton: true,
          });
          if (result.isConfirmed) {
            const response = await axios.delete(url + id);
            this.mostrar();
            Swal.fire('¡Eliminado!', '', 'success');
          } else if (result.isDenied) {
            // Manejar el caso en que se niegue la eliminación
          }
        } catch (error) {
          console.error('Error al borrar el artículo:', error);
        }
      },
      // Botones y formularios
      guardar: function () {
        if (this.operacion == 'crear') {
          this.crear();
        }
        if (this.operacion == 'editar') {
          this.editar();
        }
        this.dialog = false;
      },
      formNuevo: function () {
        this.dialog = true;
        this.operacion = 'crear';
        this.articulo.id = '';
        this.articulo.nombre = '';
        this.articulo.color = '';
        this.articulo.precio = '';
        this.articulo.dimensiones = '';
        this.articulo.material = '';
        this.articulo.stock = '';
        this.articulo.descripcion = '';
      },
      formEditar: function (id, nombre, color, precio, dimensiones, material, stock, descripcion) {
        this.articulo.id = id;
        this.articulo.nombre = nombre;
        this.articulo.color = color;
        this.articulo.precio = precio;
        this.articulo.dimensiones = dimensiones;
        this.articulo.material = material;
        this.articulo.stock = stock;
        this.articulo.descripcion = descripcion;
        this.dialog = true;
        this.operacion = 'editar';
      }
    }
  });
</script>
</body>
</html>

@endsection

