<!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="{{url('/')}}" target="_blank">>Home</a></li>
                            <li><a href="#" target="_blank">>About</a></li>
                            <li><a href="#" target="_blank">>FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled quick-links">
                            @guest
                            <li><a href="{{url('/register')}}">>Sign Up</a></li>
                            @endguest
                            @auth
                            <li><a href="{{url('/userprofile')}}">>Profile</a></li>
                            @endauth
                            <li><a href="#" target="_blank">>Partners</a></li>
                            <li><a href="#" target="_blank">>Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="#" target="_blank">>Blog</a></li>
                            <li><a href="#" target="_blank">>Des Moines Libraries</a></li>
                            <li><a href="https://github.com/eugen8/GottaLottaBooks" target="_blank">>Git Repository</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u>Gotta Lotta Books</u> is a trademark of Trading Pages, Inc.</p>
                        <p class="h6">&copy 2019 Gotta Lotta Books.</p>
                    </div>
                    </hr>
                </div>	
            </div>
        </section>
	<!-- ./Footer -->                      
