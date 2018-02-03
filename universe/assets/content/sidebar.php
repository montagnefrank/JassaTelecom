<div class="page-sidebar page-sidebar-fixed scroll mCustomScrollbar _mCS_1 mCS-autoHide">
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="#" gotopanel='home' class="menu_btn"> Jassa</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="<?php
                $isavatar = "assets/img/users/" . $user . ".jpg";
                if (file_exists($isavatar)) {
                    echo "assets/img/users/" . $user;
                } else {
                    echo "assets/img/users/default";
                }
                ?>.jpg" alt="<?php echo $user ?>"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="<?php
                    $isavatar = "assets/img/users/" . $user . ".jpg";
                    if (file_exists($isavatar)) {
                        echo "assets/img/users/" . $user;
                    } else {
                        echo "assets/img/users/default";
                    }
                    ?>.jpg" alt="<?php echo $user ?>"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">
                        <?php
                        $result_profile_info = mysqli_query($link, "SELECT nombreUsuario FROM jas_usuario WHERE userUsuario = '" . $user . "'");
                        $row_profile_info = mysqli_fetch_array($result_profile_info, MYSQLI_ASSOC);
                        echo $row_profile_info['nombreUsuario'];
                        ?>
                        <div class="profile-data-title">
                            <span class="fa fa-user"></span> 
                            <?php echo $user ?></div>
                    </div>
                    <div class="profile-data-title">
                        <span class="fa fa-industry"></span> 
                        <?php
                        $val_select = "SELECT nombreUsuario FROM jas_usuario WHERE userUsuario = '" . $user . "'";
                        $val_result = $link->query($val_select) or die($link->error);
                        $val_row = $val_result->fetch_array(MYSQLI_BOTH);
                        echo $val_row[0];
                        ?>
                    </div>
                </div>
                <div class="profile-controls">
<!--                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>-->
                </div>
            </div>                                                                        
        </li>
        <li class="xn-title">Menú principal</li>
        <li class="xn-openable"><a href="#"><span class="fa fa-television"></span><span class="xn-text"> Website</span></a>
            <ul>
                <li><a href="#" gotopanel='header' class="menu_btn"> Header</a></li>
                <li><a href="#" gotopanel='serv' class="menu_btn"> Telecomunicaciones</a></li>
                <li><a href="#" gotopanel='soluc' class="menu_btn"> Sol. Corporativas</a></li>
                <li><a href="#" gotopanel='tweets' class="menu_btn"> Testimonios</a></li>
                <li><a href="#" gotopanel='about' class="menu_btn"> Nuestra Empresa</a></li>
                <li><a href="#" gotopanel='port' class="menu_btn"> Portafolio</a></li>
                <li><a href="#" gotopanel='team' class="menu_btn"> Equipo</a></li>
                <li><a href="#" gotopanel='cli' class="menu_btn"> Clientes</a></li>
                <li><a href="#" gotopanel='exp' class="menu_btn"> Experiencia</a></li>
            </ul>
        </li>  
        <li><a href="#" gotopanel='contact' class="menu_btn"><span class="fa fa-user-circle"></span><span class="xn-text"> Contacto</span></a></li>
        <li><a href="#" gotopanel='tools' class="menu_btn"><span class="fa fa-cogs"></span><span class="xn-text"> Herramientas</span></a></li>
    </ul>
</div>