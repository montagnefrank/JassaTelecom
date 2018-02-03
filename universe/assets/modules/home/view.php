<?php
////////////////////////////////////////////////////////////////////////////HOME  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li class="active" id="showview">Inicio </li>
</ul>
<!-- BREADCRUMB --> 
<div class="page-content-wrap">   
    <div class="row">
        <div class="col-md-4">

            <!-- START WIDGET SLIDER -->
            <div class="widget widget-default widget-carousel">
                <div class="owl-carousel" id="owl-example">
                    <div>                                    
                        <div class="widget-title">Visitas totales</div>                                                                        
                        <div class="widget-subtitle">D&iacute;a de hoy</div>
                        <div class="widget-int"><?php
                            $visit_select = "SELECT count(tracking_page_name) FROM jas_track WHERE tm = '" . date('Y-m-d') . "' AND tracking_page_name = 'jassa_home'";
                            $visit_result = $link->query($visit_select) or die($link->error);
                            $visit_row = $visit_result->fetch_array(MYSQLI_BOTH);
                            echo $visit_row[0];
                            ?></div>
                    </div>
                    <div>                                    
                        <div class="widget-title"> Enlace directo</div>
                        <div class="widget-subtitle">D&iacute;a de hoy</div>
                        <div class="widget-int"><?php
                            $visit_select = "SELECT count(tracking_page_name) FROM jas_track WHERE tm = '" . date('Y-m-d') . "' AND tracking_page_name = 'jassa_home' AND ref = 'DIRECTO'";
                            $visit_result = $link->query($visit_select) or die($link->error);
                            $visit_row = $visit_result->fetch_array(MYSQLI_BOTH);
                            echo $visit_row[0];
                            ?></div>
                    </div>
                    <div>                                    
                        <div class="widget-title">Referidos</div>
                        <div class="widget-subtitle">D&iacute;a de hoy</div>
                        <div class="widget-int"><?php
                            $visit_select = "SELECT count(tracking_page_name) FROM jas_track WHERE tm = '" . date('Y-m-d') . "' AND tracking_page_name = 'jassa_home' AND ref != 'DIRECTO'";
                            $visit_result = $link->query($visit_select) or die($link->error);
                            $visit_row = $visit_result->fetch_array(MYSQLI_BOTH);
                            echo $visit_row[0];
                            ?></div>
                    </div>
                </div>                            
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>                             
            </div>         
            <!-- END WIDGET SLIDER -->
        </div>
        <div class="col-md-4">

            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon" onclick="location.href = 'pages-messages.html';">
                <div class="widget-item-left">
                    <span class="fa fa-envelope"></span>
                </div>                             
                <div class="widget-data">
                    <div class="widget-int num-count">0</div>
                    <div class="widget-title">Mensajes Nuevos</div>
                    <div class="widget-subtitle">en tu bandeja</div>
                </div>      
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->

        </div>
    </div>
    <div class="col-md-6">

        <!-- START SALES & EVENTS BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Visitas del mes</h3>
                    <span>Comparaci&oacute;n visitas mes anterior</span>
                </div>
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Ocultar</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Quitar</a></li>
                        </ul>                                        
                    </li>                                        
                </ul>
            </div>
            <div class="panel-body padding-0">
                <div class="chart-holder" id="visitas_mes_chart" style="height: 400px;"></div>
            </div>
        </div>
        <!-- END SALES & EVENTS BLOCK -->

    </div>
</div>