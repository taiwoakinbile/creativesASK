
<!-- footer -->

<footer class="fixed-bottom">
    <div class="row">
        <div class="col-md col-sm-12">
            <p class="text-center align-text-bottom"> creativesASK &nbsp; Copyright &copy; <?php echo date('Y'); ?>| &nbsp;All rights reserved &reg;.</p>
        </div>
    </div>
</footer>


</div>

<!-- jQuery -->
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<!-- popper -->
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.login-form').hide();

        $('.signup-button').click(function (e) { 
            e.preventDefault();
            $('.login-form').hide();
            $('.signup-form').show();
            
        });

        $('.login-button').click(function (e) { 
            e.preventDefault();
            $('.signup-form').hide();
            $('.login-form').show();
        });
    });
</script>
    
</body>
</html>