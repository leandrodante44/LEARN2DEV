function salvarEXPERIENCE(name, description, fk_user, type, tech, intro, link, name_file, edit, id_ex) {
    var jsonPOST = {
        "name": name,
        "description": description,
        "id_user": fk_user,
        "type": type,
        "tech": tech,
        "intro": intro,
        "link": link,
        "name_file": name_file,
        "edit": edit,
        "id_ex": id_ex
    };
    debugger
    $.ajax
        ({
            type: "POST",
            url: HANA_XSJS + "InserirExperience.xsjs", data: JSON.stringify(jsonPOST), dataType: "json",
            crossDomain: true,
            headers: {
                "Authorization": "Basic " + btoa(USERNAME + ":" + PASSWORD)
            },
            success: function (data) {
                debugger
                swal("Boa!", "Sua Experience foi criada com sucesso!", "success");
                var url_string = window.location.href
                var url = new URL(url_string);
                var u = url.searchParams.get("u");
                setTimeout(function () { window.location = "experience.php?u=" + u }, 1500);
            },
            error: function (xhr) { // if error occured 
                swal("Ops!", "Erro ao salvar os Dados!", "error");
                setTimeout(function () { window.location = "experience.php?u=" + u }, 1500);
            },
            beforeSend: function (xhr) {
            },
        });
    debugger
}
function carregarTable() {
    var url_string = window.location.href
    var url = new URL(url_string);
    var u = url.searchParams.get("u");
    $.ajax
        ({
            type: "GET",
            url: HANA_ODATA + "experience?$format=json&$expand=typeNav,techNav&$select=id,name,typeNav/name,techNav/name&$filter=fk_user eq '" + u + "'",
            dataType: 'json',
            headers: {
                "Authorization": "Basic " + btoa(USERNAME + ":" + PASSWORD)
            },
            success: function (data) {
                var oData = data.d.results;
                var tEx = $('#divEx');
                $('#divEx').html('');
                $.each(data.d.results, function (index, value) {
                    tEx.append('<tr><td>' + oData[index].name + '</td><td>' + oData[index].typeNav.name + '</td><td>' + oData[index].techNav.name + '</td><td class="text-center"></a><a><i class="fa fa-edit h"></i></a>&nbsp;&nbsp;<a><i class="fa fa-trash h"></i></td></tr>');
                });
            },
            error: function (xhr) { // if error occured
                swal("Ops!", "Erro carregar a lista de Techonlogia!", "error");
            },
            beforeSend: function () {
                $('#divEx').html('<tr><td collspan="4"><center>Carregando Experiences</center></td></tr>')
            },
        });
}
function carregarComboTech() {
    $.ajax
        ({
            type: "GET",
            url: HANA_ODATA + "tech_experience?$format=json",
            dataType: 'json',
            headers: {
                "Authorization": "Basic " + btoa(USERNAME + ":" + PASSWORD)
            },
            success: function (data) {
                var oData = data.d.results;
                var sTech = $('#slcTech');
                $.each(data.d.results, function (index, value) {
                    sTech.append('<option value="' + oData[index].id + '">' + oData[index].name + '</option>');
                });
            },
            error: function (xhr) { // if error occured
                swal("Ops!", "Erro carregar a lista de Techonlogia!", "error");
            },
            beforeSend: function () {
                $('#slcTech').html('<option value="">Selecione a Technologia...</option>')
            },
        });
}
function carregarComboType() {
    $.ajax
        ({
            type: "GET",
            url: HANA_ODATA + "type_experience?$format=json",
            dataType: 'json',
            headers: {
                "Authorization": "Basic " + btoa(USERNAME + ":" + PASSWORD)
            },
            success: function (data) {
                var oData = data.d.results;
                var sTech = $('#slcType');
                $.each(data.d.results, function (index, value) {
                    sTech.append('<option value="' + oData[index].id + '">' + oData[index].name + '</option>');
                });
            },
            error: function (xhr) { // if error occured
                swal("Ops!", "Erro carregar a lista de Categorias!", "error");
            },
            beforeSend: function () {
                $('#slcType').html('<option value="">Selecione a Categoria...</option>')
            },
        });
}
function onInit() {
    carregarComboTech();
    carregarComboType();
    carregarTable();
}
$(document).ready(function () {
    onInit();
});