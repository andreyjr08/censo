$(document).ready(function () {
    var i = 0;
    $('#add').click(function () {
        i++;
        $('#dynamic_field').append('' +
            '<tr>' +
            '<td colspan="4"></td>' +
            '</tr>'+
            '<tr id="row' + i + '">'+
            '<td>' +
            '<input type="text"  name="name[]" placeholder="Primer Nombre" class="form-control name_list" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="name[]" placeholder="Segundo Nombre" class="form-control name_list" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="name[]" placeholder="Primer Apellido" class="form-control name_list" />' +
            '</td>' +
            '<tr>' +

            '<tr id="row' + i + '">'+
            '<td>' +
            '<input type="text" name="name[]" placeholder="Segundo Apellido" class="form-control name_list" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="name[]" placeholder="Edad" class="form-control name_list" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="name[]" placeholder="Sexo" class="form-control name_list" />' +
            '</td>' +
            '<tr>' +

            '<tr id="row' + i + '">'+
            '<td>' +
            '<input type="text" name="name[]" placeholder="Escolaridad" class="form-control name_list" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="name[]" placeholder="Ocupacion" class="form-control name_list" />' +
            '</td>' +
            '<td>' +
            '<input type="text" name="name[]" placeholder="Numero de Documento" class="form-control name_list" />' +
            '</td>' +
            '<button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button>' +
            '</tr>');
    });

    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });

    $('#submit').click(function () {
        $.ajax({
            url: "nombre.php",
            method: "POST",
            data: $('#add_name').serialize(),
            success: function (data) {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });

});