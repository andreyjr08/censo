<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script language="JavaScript" src="../../js/reportes.js"></script>
</header>
<body>

<div class="container">
    <h3 class="mt-5"><a href="https://www.baulphp.com/agregar-y-eliminar-campos-con-jquery-ajax">Formulario</a></h3>
    <hr>
    <div class="row">
        <div class="col-12 col-md-12">
            <!-- Contenido -->
            <div class="container">
                <br />
                <div class="form-group">
                    <form name="add_name" id="add_name">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td><input type="text" name="name[]" placeholder="Ingrese Nombres" class="form-control name_list" /></td>
                                    <td><input type="text" name="name[]" placeholder="Primer Apellido" class="form-control name_list" /></td>
                                    <td><input type="text" name="name[]" placeholder="Segundo Apellido" class="form-control name_list" /></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success">Agregar Más</button></td>
                                </tr>
                            </table>
                            <input type="button" name="submit" id="submit" class="btn btn-info" value="Enviar Información" />
                        </div>
                    </form>
                </div>
            </div>


</body>
</html>