        
        </div>
    </div>
    <footer class="site-footer" role="contentinfo">
        <div class="logo-footer">
            @if(Theme::option('general','logo') != "")
                <img src="{{Theme::option('general','logo')}}" alt="serayutheme" width="300">
            @else
                {{ Helper::option("site_title") }}
            @endif
        </div>
        <ul class="footer-social">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>                      
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>                       
            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>                     
            <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>                     
            <li><a href="#" target="_blank"><i class="fa fa-heart"></i></a></li>  
        </ul>
        <div class="site-info">
            {!! Theme::option('general','copyright') !!}
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
	</div>
	<!-- JavaScripts -->
    <script src="{{URL::to('/')}}/assets/jquery/dist/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/bootstrap-submenu.min.js"></script>
    <script src="{{URL::to('/')}}/themes/smallpine/js/main.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @stack('scripts')
</body>
</html>