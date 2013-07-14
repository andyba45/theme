<hr>
<footer>
    <div class="container">
        <div class="row-fluid brown">
            <div class="span4 text-center">
                <div class="questions">
                <h1><em>Questions???</em></h1>
                <p class="lead">Call Us</p>
                <h2>(866) 806-7157</h2>
                <p class="lead">Or Check Out Our<br />
                    <a href="https://labwebdesigns.com/billing/index.php" >Help Center</a></p>
                </div>
            </div>
            <div class="span4">

            </div>
            <div class="span4">
                <div class="footer-nav"
                     <p class="text-center">Useful Links</p>
                         <?php wp_nav_menu(array('menu' => 'Footer')); ?>
                </div>
            </div>
        </div>
        <div class="row-fluid pagination-centered">
            <div class="span12">
                <p>&copy; LAB Web Development 2008 - <?php echo date("Y"); ?></p>
            </div>
        </div>
    </div>
</footer>

</div> <!-- /container -->

<?php wp_footer(); ?>

</body>
<link href="https://labwebdesigns.com/billing/newedge/utilities/min/index.php?g=supportwidgetcss" media="screen" rel="stylesheet" type="text/css" /> 
<script src="https://labwebdesigns.com/billing/newedge/utilities/min/index.php?g=supportwidgetjs" type="text/javascript"></script>
<script type="text/javascript">
    if (typeof(CESupportWidget) !== "undefined") {
        supportwidget_params = {
            url: "https://labwebdesigns.com/billing",
            tabPosition: "right",
            tabId: "ask-us",
            forceSuggestions: true,
            ticketTypeId: 8
        };
    }
</script>
</html>
