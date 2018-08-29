    <div id="main" class="container">
        <!-- 	left sidebar -->
        <div id="menu" class="sidebar-left">
            <div class="title-sidebar">
                <h3>Main menu</h3>
            </div>
            <div class="main-menu">
                <ul class="ct-menu">
                    <?php $menu= showCategories($categories); 
                        echo $menu;
                    ?>
                </ul>
            </div>
        </div>
        <!-- 		end sidebar -->

        