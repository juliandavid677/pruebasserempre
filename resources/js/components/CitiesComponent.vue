<template>
  <div>
    <div class="container-fluid">
      <!-- Ejemplo de tabla Listado -->
      <div class="card">
        <div class="card-header">
          <h2>Ciudades</h2>
          <br />

          <button
            class="btn btn-primary btn-lg"
            type="button"
            data-toggle="modal"
            data-target="#abrirmodal"
          >
            <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Ciudad
          </button>
        </div>
        <div class="card-body">
          <div>
            <table >
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th colspan="2"></th>
                </tr>
              </thead>
              <tbody>
                    <tr v-for="(item, index) in listaCities" :key="index">
                  <td width="10px">{{ item.cod }}</td>
                  <td>{{ item.name }}</td>
                  <td width="10px">
                    <a data-toggle="modal"
            data-target="#abrirmodalup" @click="asignar(item.id)" class="btn btn-warning btn-sm">Editar</a>
                  </td>
                  <td width="10px">
                    <a class="btn btn-danger btn-sm" @click="eliminarCiudad(item.id)">Eliminar</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!--Inicio del modal agregar/actualizar-->
    <div
      class="modal fade"
      id="abrirmodal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Agregar ciudad</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group row div-error">
              <div class="text-center text-error">
                <div></div>
              </div>
            </div>

            <form action method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Codigo</label>
                <div class="col-md-9">
                  <input type="number" class="form-control" v-model="codCity" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Ciudad</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" v-model="nameCity" />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              <i class="fa fa-times fa-2x"></i> Cerrar
            </button>
            <button type="button" class="btn btn-success" @click="crearCiudad()">
              <i class="fa fa-save fa-2x"></i> Guardar
            </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->

    <div
      class="modal fade"
      id="abrirmodalup"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Agregar ciudad</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group row div-error">
              <div class="text-center text-error">
                <div></div>
              </div>
            </div>

            <form action method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Codigo</label>
                <div class="col-md-9">
                  <input type="number" class="form-control" v-model="codCity" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Ciudad</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" v-model="nameCity" />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              <i class="fa fa-times fa-2x"></i> Cerrar
            </button>
            <button type="button" class="btn btn-success" @click="actualizarCiudad()">
              <i class="fa fa-save fa-2x"></i> Guardar
            </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
</template>
<script>
import Swal from "sweetalert2";
import "sweetalert2/src/sweetalert2.scss";
export default {
  name: "cities-component",
  created() {
    axios.get("citieindex").then(res => {
      this.listaCities = res.data;
    });
  },
  data() {
    return {
      listaCities: [],
      nameCity: null,
      codCity: null,
      verid:null
    }
  },
  methods: {
      crearCiudad(){
          let formData = new FormData();
          formData.append("codigo", this.codCity);
        formData.append("nombre", this.nameCity);
        axios.post(`citiesstore`, formData).then(res => {
          Swal.fire({
            // position: 'top-end',
            type: "success",
            title: "Operación exitosa!.",
            showConfirmButton: false,
            timer: 2500
          });
          location.reload();
        });
      },
      asignar(id){
          this.verid = id;
      },
      actualizarCiudad(){
          const fec = {
          codigo: this.codCity,
          nombre: this.nameCity
          };
          axios.put(`citieupdate/${this.verid}`, fec).then(res => {
              Swal.fire({
                // position: 'top-end',
                type: "success",
                title: "Operación exitosa!.",
                showConfirmButton: false,
                timer: 2500
              });
              location.reload();
            });

      },
      eliminarCiudad(id){
          axios.delete(`citiedelete/${id}`).then(res => {
              Swal.fire({
                // position: 'top-end',
                type: "success",
                title: "Operación exitosa!.",
                showConfirmButton: false,
                timer: 2500
              });
              location.reload();
            });
      }

  }
};
</script>
