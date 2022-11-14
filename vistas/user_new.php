<div class="bodis">
  <h1 class="title ">Usuarios</h1>
  <h2 class="subtitle">Nuevo usuario</h2>
</div>
<div class="container pb-6 pt-6">

  <div class="form-rest mb-6 mt-6"></div>

  <form action="./php/usuario_guardar.php" method="POST" 
        class="FormularioAjax" autocomplete="off">
    <div class="columns">
      <div class="column">
        <div class="control">
          <label>Nombre</label>
          <input class="input" type="text" name="usuario_nombre" 
                 pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,50}" maxlength="50" required>
        </div>
      </div>
      <div class="column">
        <div class="control">
          <label>Apellidos</label>
          <input class="input" type="text" name="usuario_apellido" 
                 pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,50}" maxlength="50" required>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="control">
          <label>Usuario</label>
          <input class="input" type="text" name="usuario_usuario" 
                pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{4,30}" maxlength="30" required>
        </div>
      </div>
      <div class="column">
        <div class="control">
          <label>Email</label>
          <input class="input" type="email" name="usuario_email" maxlength="70">
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="control">
          <label>Clave</label>
          <input class="input" type="password" name="usuario_clave_1" 
                pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
        </div>
      </div>
      <div class="column">
        <div class="control">
          <label>Repetir clave</label>
          <input class="input" type="password" name="usuario_clave_2" 
                 pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
        </div>
      </div>
    </div>
    <p class="has-text-centered">
      <button type="submit" class="button is-info is-rounded">Guardar</button>
    </p>
  </form>
</div>
