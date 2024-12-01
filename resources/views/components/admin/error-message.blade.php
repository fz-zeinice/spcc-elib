@if(session()->has('message'))
  <div class="col-12">
  	<div class="alert {{ session()->get('message')['class'] }} alert-dismissible">
  	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  	  <h5>
  	  	<i class="fa {{ session()->get('message')['icon'] }}"></i>
  	  	{{ session()->get('message')['status'] }}
  	  </h5>
  	  {{ session()->get('message')['content'] }}
  	</div>
  </div>
@endif
