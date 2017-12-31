    </div>
</div>
    <!-- END BEGIN PAGE CONTAINER -->  
		


    <!-- BEGIN COPYRIGHT -->
    <div class="nav navbar-fixed-bottom navbar-default" style="display: none;">
         <div class="container" > 
            <div class="row">
                <div class="col-md-8">
                    <p>
                        <span class="margin-right-10">2017 © Programming Studio. ALL Rights Reserved.</span>
                    </p>
                </div>
            </div>
         </div> 
    </div>

    <!-- END COPYRIGHT -->


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/hover-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>  
    <script type="text/javascript">
        CKEDITOR.replace('editor1');
        jQuery(document).ready(function() {
            App.init();                      
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

    
</body>
<!-- END BODY -->
</html>


<!--
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/hover-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS 

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor1');
        jQuery(document).ready(function() {
            App.init(); 
            App.initBxSlider();
            Index.initRevolutionSlider();                      
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->