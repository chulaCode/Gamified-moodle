@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container mb-3">
    <div class="row">
       <div class="col-12">
      
          <section>
              <div class="text-center text-capitalize my-5">
                <hr>
                <h3> 
                   Thank you for participating.
                </h3>
                <hr>
             </div>
             <div> 
                <h4 class="my-5">
                    Please provide <span class="text-danger">consistent and realistic answers</span> to questions in the pre-questionnaire. You can make changes 
                    to your responses until you complete the questionnaire. You must also fill the questionnaires <span class="text-danger">only once</span>.
                </h4>
                 <h4 class="my-5">
                 At the end of the survey, a link will be given to you to reach the <span class="text-danger">"GAME PAGE"</span>.
                   Please don't forget to click <span class="text-danger">"GAME PAGE"</span> word in blue BEFORE clicking on "DONE" button. because when you 
                   click on Done button you cannot access that last survey page again.
                 </h4>

                 <h4 class="my-5 mr-5 font-weight-bold text-center">Sample view at the end of Pre-Questionnaire</h4>
                <div>
             
               <div class="col-md-12">   
                        <a href="" class="float-right"><button type="submit" class="btn btn-secondary  btn-lg px-5">
                            <span style="font-size:18px;">TAKE SURVEY</span></button></a>
                    </div>
             </div>
            
            </section>
       </div>
   </div>
</div>

<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
                                <small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | coder <i class="icon-heart" aria-hidden="true"></i> Ochulaobari Emmanuel
              </small><br> 
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
@endsection