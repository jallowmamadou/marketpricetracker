    <footer>
        <div class="container">
            <ul>
                <li><?php echo date('Y'); ?> @ copyright</li>
                <li><a href="#">developers</a></li>
                <li><a href="#">privacy</a></li>
            </ul>
        </div>
    </footer>
<!-- scripts -->
{{HTML::script('js/jquery-1.11.1.js')}}
{{HTML::script('js/bootstrap.js')}}




    <!-- scripts -->
<!--     // <script src="js/jquery-1.11.1.js"></script> -->
<!--     // <script src="js/bootstrap.js"></script> -->
    <script src="js/sidebarslider.js"></script>  
    <script>
    $('a#triger').sidebarSlider();
        $('#checker').popover();
    $('#checker').on('click', function(){
      $("#check").slideToggle(258);
    });

    </script>

