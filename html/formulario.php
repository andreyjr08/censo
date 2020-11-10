<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script language="JavaScript" src="../js/reportes.js"></script>
</header>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h5>Familia No: </h5>
            <input type="text" name="txtNumeroFamilia"
                   class="form-control" disabled="disabled" value="123"/>
        </div>
        <div class="col-lg-3">
            <h5>Grupo Etnico: </h5>
            <input type="text" name="name[]" placeholder="Ingrese Grupo Etnico"
                   class="form-control"/>
        </div>
        <div class="col-lg-3">
            <h5>Otro: </h5>
            <input type="text" name="name[]" placeholder="Otro"
                   class="form-control"/>
        </div>
        <div class="col-lg-3">
            <h5>Tiempo habitado: </h5>
            <input type="text" name="name[]" placeholder="Tiempo en la Comunidad"
                   class="form-control"/>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="container">
                <br/>
                <div class="form-group">
                    <form name="add_name" id="add_name">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">

                                <button type="button" name="add" id="add" class="btn btn-success">Agregar M&aacute;s
                                </button>

                                <tr>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Primer Nombre"
                                               class="form-control name_list"/>
                                    </td>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Segundo Nombre"
                                               class="form-control name_list"/>
                                    </td>
                                    <td>
                                        <input type="text" name="name_2" placeholder="Primer Apellido"
                                               class="form-control name_list"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Segundo Apellido"
                                               class="form-control name_list"/>
                                    </td>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Edad"
                                               class="form-control name_list"/>
                                    </td>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Sexo"
                                               class="form-control name_list"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Escolaridad"
                                               class="form-control name_list"/>
                                    </td>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Ocupaci&oacute;n"
                                               class="form-control name_list"/>
                                    </td>
                                    <td>
                                        <input type="text" name="name[]" placeholder="N&uacute;mero de Documento"
                                               class="form-control name_list"/>
                                    </td>
                                </tr>
                            </table>
                            <input type="button" name="submit" id="submit" class="btn btn-info"
                                   value="Enviar Información"/>
                        </div>
                    </form>
                </div>
            </div>

</body>
</html>