@extends("layouts.html") 

@section("title","about");



@section("about") 

<section id="about">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>About Us</h2>
					<hr>					
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
		</div>
	
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInRight">
					<img src="{{ URL::to('/') }}/public/images/1.png" class="img-responsive" />
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem minus sint, commodi.</p>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Web Design
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								Brunch 3 wolf moon tempor.<br>
								
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
								non cupidatat skateboard dolor brunch.</p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
								   <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#about-->

@endsection

