<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header employmedit" >
          <h5 class="modal-title" id="editmodalLabel">Editar empleado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
                <div class="col-md-6">
                    <label for="name">Nombre</label>
                    <input class="form-control " style="border-radius: 3rem;" placeholder="Escribe el nombre de tu empleado" type="text" name="name" id="name" value="" required>
                </div>
                <div class="col-md-6">
                    <label for="identification">Apellidos</label>
                    <input class="form-control" placeholder="Escribe el nombre de tu empleado" type="text"    style="border-radius: 3rem;"name="document" id="document" value="" required>
                </div>
                <div class="col-md-6">
                    <label for="address">Identificacion</label>
                    <input class="form-control" style="border-radius: 3rem;"  placeholder="Escribe un número de identificación" type="text" name="address" id="address" value="" required>
                </div>
                <div class="col-md-6">
                    <label for="phone">Teléfono</label>
                    <input class="form-control" style="border-radius: 3rem;" placeholder="Escribe un número de teléfono" type="number" name="phone" id="phone" value="" required>
                </div>
                <div class="col-md-6">
                    <label for="city">Ciudad</label>
                    <select class="form-control" name="city" id="city" aria-placeholder="Selecciona una ciudad" style="border-radius: 3rem;" required>
                        <option value="">Seleccione una ciudad</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="city">Departamento</label>
                    <select class="form-control" name="city" id="city" 
                    style="border-radius: 3rem;" aria-placeholder="Selecciona un departamento" required>
                        <option value="">Seleccione una ciudad</option>
                    </select>
                </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn button-cancelar" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn button-save">Guardar</button>
        </div>
      </div>
    </div>
</div>