<footer>
      <nav class="bg-Ui-Color-Primary-Dark border-bottom border-1 border-footer">
        <div class="container py-awe-36">
          <div class="overflow-hidden row justify-content-between">
            <div class="col-5 col-sm-12 col-md-2">
              <a class="" href="#"><img src="<?php echo get_template_directory_uri();?>/dist/image/REDE-TISSE.svg" alt=""></a>
            </div>
            <div class="col-7 col-sm-12 col-md-9 col-lg-7 d-flex justify-content-end justify-sm-content-center align-items-center mt-4 mt-md-0">
            <?php 
                        
                        $args_footer = array(
                            'menu' => 'footer-menu',
                            'container' => 'ul',
                            'menu_class' => 'menu-footer list-group list-group-horizontal flex-column flex-sm-row'
                                         );
                        wp_nav_menu( $args_footer );
                     ?>
              <!--<ul class="list-group list-group-horizontal flex-column flex-sm-row">
                
                <li class="list-group-item px-2 py-1 py-sm-0 bg-transparent border-0 fz-14 fw-normal font-inter"><a class="footer-hover text-decoration-none text-white" href="">QUEM SOMOS</a></li>
                <li class="list-group-item px-2 py-1 py-sm-0 bg-transparent border-0 fz-14 fw-normal font-inter"><a class="footer-hover text-decoration-none text-white" href="">HISTÓRICO</a></li>
                <li class="list-group-item px-2 py-1 py-sm-0 bg-transparent border-0 fz-14 fw-normal font-inter"><a class="footer-hover text-decoration-none text-white" href="">MISSÃO</a></li>
                <li class="list-group-item px-2 py-1 py-sm-0 bg-transparent border-0 fz-14 fw-normal font-inter"><a class="footer-hover text-decoration-none text-white" href="">ATUAÇÃO</a></li>
                <li class="list-group-item px-2 py-1 py-sm-0 bg-transparent border-0 fz-14 fw-normal font-inter"><a class="footer-hover text-decoration-none text-white" href="">COMPONENTES</a></li>
              </ul>-->
            </div>
          </div>
        </div>
      </nav>
      <div class="bg-Ui-Color-Primary-Dark d-flex justify-content-center py-3">
        <a class="text-decoration-none" href="">
          <img src="<?php echo get_template_directory_uri();?>/dist/image/logo-v2.svg" alt="">
        </a>
      </div>
    </footer>
    <?php wp_footer();?>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="<?php echo get_template_directory_uri();?>/dist/js/main.js"></script>
</body>
</html>
  
  
