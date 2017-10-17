<!-- BEGIN OF TOP MENU -->
<section id="menu">
    <nav id="top-menu">
        <ul id="menu-main-list">
            <li class="<?php echo(isset($setup_menu_active) ? "active" : ""); ?>">
                <?php 

                    /* Tab Selected */
                    if(isset($setup_menu_active)){
                        echo "<span><strong> Setup </strong></span>";
                    }
                    /* Tab unselected */
                    else{
                        echo "<a href=\"setup.php\"><strong> Setup </strong></a>";
                    }

                ?>
            </li>
            <li class="<?php echo(isset($status_menu_active) ? "active" : ""); ?>">
                <?php 

                    /* Tab Selected */
                    if(isset($status_menu_active)){
                        echo "<span><strong> Status </strong></span>";
                    }
                    /* Tab unselected */
                    else{
                        echo "<a href=\"status.php\"><strong> Status </strong></a>";
                    }

                ?>
            </li>
            <li class="<?php echo(isset($security_menu_active) ? "active" : ""); ?>">
                <?php 

                    /* Tab Selected */
                    if(isset($security_menu_active)){
                        echo "<span><strong> Security </strong></span>";
                    }
                    /* Tab unselected */
                    else{
                        echo "<a href=\"security.php\"><strong> Security </strong></a>";
                    }

                ?>
            </li>
            <li class="<?php echo(isset($advanced_menu_active) ? "active" : ""); ?>">
                <?php 

                    /* Tab Selected */
                    if(isset($advanced_menu_active)){
                        echo "<span><strong> Advanced </strong></span>";
                    }
                    /* Tab unselected */
                    else{
                        echo "<a href=\"advanced.php\"><strong> Advanced </strong></a>";
                    }

                ?>
            </li>
            <li class="<?php echo(isset($administration_menu_active) ? "active" : ""); ?>">
                <?php 

                    /* Tab Selected */
                    if(isset($administration_menu_active)){
                        echo "<span><strong> Administration </strong></span>";
                    }
                    /* Tab unselected */
                    else{
                        echo "<a href=\"administration.php\"><strong> Administration </strong></a>";
                    }

                ?>
            </li>
        </ul>
        <nav id="sub-menu">
            <ul id="sub-menu-list">
                <li>
                    <span><strong> Option 1 </strong></span>
                </li>
                <li>
                    <a href="#"><strong> Option 2 </strong></a>
                </li>
                <li>
                    <a href="#"><strong> Option 3 </strong></a>
                </li>
                <li>
                    <a href="#"><strong> Option 4 </strong></a>
                </li>
            </ul>
        </nav>
    </nav>
</section>
<!-- END OF TOP MENU -->