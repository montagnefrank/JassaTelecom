<?php ///////////////////////////////////////////////////////////////////// ABOUT VIEW          ?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li><a > Interfaz</a></li>
    <li class="active" id="showview">Acerca de nosotros</li>
</ul>
<!-- BREADCRUMB --> 
<div class="page-content-wrap">   
    <?php
    if (isset($_SESSION['msg'])) {
        echo '
                <div class="row notificactionbox">
                    <div class="col-md-12">
                        <div class="widget widget-';
        echo $_SESSION['box'];
        echo ' widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-exclamation"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-title">Notificación</div>
                                <div class="widget-subtitle">
                                    <div role="alert">
                                        ' . $_SESSION['msg'] . '
                                    </div>
                                </div>
                            </div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>                             
                        </div>
                    </div>
                </div>
        ';
        unset($_SESSION['msg']);
    }
    ?>
    <div class="row">
        <div class="col-md-6">   
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-cogs"></span> Editar titulos</h3>                                
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>                                   
                </div>
                <div class="panel-body">
                    <?php
                    $titles_select = "SELECT * FROM jas_misc";
                    $titles_result = $link->query($titles_select) or die($link->error);
                    $titles_row = array();
                    $titles_result->data_seek(0);
                    $titles_row[0] = $titles_result->fetch_array(MYSQLI_ASSOC);
                    ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Titulo</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control pushbottom aboutTitle" value="<?php echo $titles_row[0]['aboutTitle']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Sub Titulo</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control pushbottom aboutSubtitle" value="<?php echo $titles_row[0]['aboutSubtitle']; ?>">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="pull-right btn btn-info" name="edittitles"  type="submit" onClick="addnewabouttitles();" id="edittitles" data-toggle="tooltip" data-placement="right" title="Editar Titulos">
                        <span class="beforeLoad" ><span class="fa fa-plus"></span> Editar Titulos </span>
                        <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 hidethis ff_insert_panel">   
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-cogs"></span> <span class="ff_windowstitle"></span></h3>                                
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>                                   
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Monto</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control pushbottom newff" placeholder="introduzca nuevo valor">
                            <input type="hidden" class="form-control ffnum" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Titulo</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control pushbottom newfftitle" placeholder="introduzca nuevo titulo">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="pull-right btn btn-info" name="editff"  type="submit" onClick="newffinput();" id="editff" data-toggle="tooltip" data-placement="right" title="Edtar Hechos">
                        <span class="beforeLoad" ><span class="fa fa-edit"></span> Editar Valores </span>
                        <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
                <ul class="panel-controls">
                    <li class="dropdown">                                          
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                        
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="panel panel-default tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#tab8" data-toggle="tab">Quienes Somos</a></li>
                        <li><a href="#tab9" data-toggle="tab">Misi&oacute;n</a></li>
                        <li><a href="#tab10" data-toggle="tab">Visi&oacute;n</a></li>
                    </ul>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab8">
                            <textarea rows="3" class="form-control textoquisom"><?php echo $titles_row[0]['quisomText']; ?></textarea>
                        </div>
                        <div class="tab-pane" id="tab9">
                            <textarea rows="3" class="form-control textomision"><?php echo $titles_row[0]['misionText']; ?></textarea>
                        </div>
                        <div class="tab-pane" id="tab10">
                            <textarea rows="3" class="form-control textovision"><?php echo $titles_row[0]['visionText']; ?></textarea>
                        </div>                        
                    </div>
                </div>    
            </div>      
            <div class="panel-footer">
                <button class="pull-right btn btn-primary" name="updatetexts"  type="submit" onClick="updatetexts();" id="updatetexts" data-toggle="tooltip" data-placement="right" title="Edtar Textos">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Guardar cambios </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>                            
        </div>
    </div>
    <div class="col-md-3 funfact">                        
        <a href="" class="tile tile-info">
            <?php echo $titles_row[0]['ff1']; ?>
            <p class="ff_title"><?php echo $titles_row[0]['ff1title']; ?></p>
            <input type="hidden" class="ff_num" value="ff1" />
            <div class="informer informer-default"><span class="fa fa-edit"></span></div>
        </a>
    </div>
    <div class="col-md-3  funfact">                        
        <a href="#" class="tile tile-info">
            <?php echo $titles_row[0]['ff2']; ?>
            <p class="ff_title"><?php echo $titles_row[0]['ff2title']; ?></p>
            <input type="hidden" class="ff_num" value="ff2" />
            <div class="informer informer-default"><span class="fa fa-edit"></span></div>
        </a>
    </div>
    <div class="col-md-3 funfact">                        
        <a href="#" class="tile tile-info">
            <?php echo $titles_row[0]['ff3']; ?>
            <p class="ff_title"><?php echo $titles_row[0]['ff3title']; ?></p>
            <input type="hidden" class="ff_num" value="ff3" />
            <div class="informer informer-default"><span class="fa fa-edit"></span></div>
        </a>
    </div>
    <div class="col-md-3  funfact">                        
        <a href="#" class="tile tile-info">
            <?php echo $titles_row[0]['ff4']; ?>
            <p class="ff_title"><?php echo $titles_row[0]['ff4title']; ?></p>
            <input type="hidden" class="ff_num" value="ff4" />
            <div class="informer informer-default"><span class="fa fa-edit"></span></div>
        </a>
    </div>  
</div>