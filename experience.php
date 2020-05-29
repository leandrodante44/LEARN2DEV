<?php
include 'menu.php';
?>
<script src="js/experience.js"></script>
<?php
if (isset($_GET['r']) && !empty($_GET["r"])) {
    echo '<script>editMode("' . $_GET['r'] . '")</script>';
    $edit = 'true';
} else {
    $edit = 'false';
}
?>
<style>
    .main-content {
        padding-top: 30px;
    }
    .au-card--bg-blue {
        background-image: -webkit-linear-gradient(90deg, #094074 0%, #3b4752 100%);
    }
    .h:hover{
        transform: scale(1.4);
    }
    .table th{
        border-top: none
    }
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="overview-wrap">
                        <h2 class="title-1">My Experiences</h2>
                        <!---<button class="au-btn au-btn-icon au-btn--blue">
                     <i class="zmdi zmdi-plus"></i>Novo RPA2Dev</button>--->
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="overview-wrap">
                        <h2 class="title-1">Adicionar Experience</h2>
                        <!---<button class="au-btn au-btn-icon au-btn--blue">
                     <i class="zmdi zmdi-plus"></i>Novo RPA2Dev</button>--->
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-5">
                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                        <div class="au-card-inner">
                            <div class="table-responsive">
                                <table class="table table-top-countries">
                                    <thead style="color:#fff">
                                        <tr>
                                            <th>Nome</th>
                                            <th>Tipo</th>
                                            <th>Technologia</th>
                                            <th class="text-center">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody id="divEx">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <strong>Descrição</strong> da Experience
                        </div>
                        <div class="card-body card-block">
                            <div class="row m-t-25" id="divRPA"> </div>
                            <form action="processex.php?u=<?php echo $_GET['u'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" id="hdniduser" name="hdniduser" value="<?php echo $_GET['u'] ?>">
                                <input type="hidden" id="hdnedit" name="hdnedit" value="<?php echo $edit ?>">
                                <input type="hidden" id="hdnEx" name="hdnEx" value="<?php if ($edit == 'true') {
                                                                                            echo $_GET['r'];
                                                                                        } else {
                                                                                            echo '1';
                                                                                        } ?>">
                                <input type="hidden" id="hdnpublic" name="hdnpublic" value="true">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Titulo do Conteúdo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="txtName" id="txtName" placeholder="" class="form-control" required>
                                        <small class="form-text text-muted">Ex: Aprenda ABAP do zero
                                        </small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Introdução do Conteúdo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="txtInto" id="txtInto" placeholder="" class="form-control" required>
                                        <small class="form-text text-muted">Ex: Curso destinado para iniciantes na carreira de ABAP, com o intuito de expressar ABAP in Nutshell
                                        </small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Categoria do Conteúdo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select type="text" name="slcType" id="slcType" placeholder="" class="form-control" required>
                                        </select>
                                        <small class="form-text text-muted">Ex: Categoria na qual irá estar alocada sua experience
                                        </small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Technologia do Conteúdo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <select type="text" name="slcTech" id="slcTech" placeholder="" class="form-control" required>
                                        </select>
                                        <small class="form-text text-muted">Ex: Principal Technologia usada na experience
                                        </small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Descrição</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="txtdesc" id="txtdesc" rows="9" placeholder="Descrição..." class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Link da Capa</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="txtLinkCapa" id="txtLinkCapa" placeholder="" class="form-control">
                                        <small class="form-text text-muted">Ex: Link para imagem de capa da sua experience, utilize o Unsplash para boas inspirações.
                                        </small>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="text-sm-center mt-2 mb-1">Upload</h4>
                                <br>
                                <center>
                                    <div class="col col-md-8">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">Experience Content</div>
                                                <input type="file" id="userfile" name="userfile" class="form-control">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-file"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-8">
                                        <div class="form-group" style="display:<?php if (!($edit == 'true')) {
                                                                                    echo 'none';
                                                                                } ?>">
                                            <div class="input-group">
                                                <div class="input-group-addon">Arquivo Atual</div>
                                                <input type="text" id="name_file" name="name_file" class="form-control" readonly>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-file"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary " id="btnSalvar" style="float:right">
                                <i class="fa fa-dot-circle-o"></i> Salvar Experience
                            </button>
                            <button type="reset" class="btn btn-danger ">
                                <i class="fa fa-ban"></i> Cancelar
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>