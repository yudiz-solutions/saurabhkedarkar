
    <!-- footer start -->
    <footer class="footer">
        <!-- container start -->
        <div class="container">
            <!-- inner first div start -->
            <div class="inner-footer">
                <div class="footer-about">
                <?php echo the_custom_logo() ?>
                  <?php
                    dynamic_sidebar('footer-sidebar-1')
                  
                  ?>
                </div>
                <div class="footer-coman-link">
                    <div class="sub-footer footer-pages">
                   <?php  dynamic_sidebar('footer-sidebar-2') ?>
                    </div>
                    <div class="sub-footer footer-Services">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Kitchan</a></li>
                            <li><a href="#"> Living Area</a></li>
                            <li><a href="#"> Bathroom</a></li>
                            <li><a href="#"> Dinning Hall</a></li>
                            <li><a href="#">Bedroom</a></li>
                        </ul>
                    </div>
                    <div class="sub-footer footer-Contact">
                        <h3>Contact</h3>
                        <ul>
                            <li><a href="#" target="_blank">55 East Birchwood Ave. Brooklyn, New York 11201</a></li>
                            <li><a href="mailto:contact@interno.com">contact@interno.com</a></li>
                            <li><a href="tel:1234567890">(123) 456 - 7890</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- container close -->
    </footer>
    <!-- footer close -->

    <!-- section copyright -->
    <section class="copyrights">
        <div class="container">
            <div class="footer-copyright">
                <p>Copyright &copy; Interno | Designed by <a href="#" target="_blank">Victorflow Templates</a> - Powered by <a href="#" target="_blank">Webflow</a></p>
            </div>
        </div>
    </section>
    <!-- copyright section close -->

    <!-- script start -->
   

<?php wp_footer() ?>
</body>

</html>