
@extends('layout.all_admin')

@section('content')

<div class="container-fluid">
  <div class="row">
<div class="col-lg-6" id="Brand">
    <div class="card">
        <div class="card-header"><h2>Create Brand Form</h2></div>
        <div class="card-body card-block">
        	@if(url()->current()==  route('edit_brand'))
            	<form action="{{route('edit_brand')}}" method="post" class="">
        	@else
				<form action="{{route('add_brand')}}" method="post" class="">
			@endif
            	@csrf
                <div class="form-group">
                    <div class="input-group">
                    	@if(url()->current()==  route('edit_brand'))
							<div class="input-group-addon">Edit Brand</div>
						@else
							<div class="input-group-addon">Create Brand</div>
						@endif
						<input type="text" id="brand_name_english" name="brand_name_english" placeholder="brand_name_english" class="form-control">
						<input type="text" id="brand_name_arabic" name="brand_name_arabic" placeholder="brand_name_arabic" class="form-control">
						<div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                	@if(url()->current()==  route('edit_brand'))
                    	<button type="submit" class="btn btn-primary btn-sm">Update</button>
                	@else
						<button type="submit" class="btn btn-primary btn-sm">submit</button>
					@endif
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>


<div class="row">
      <div class="col-lg-12">
          <!-- DATA TABLE-->
          <div class="table-responsive m-b-40">
			<table class="table table-borderless table-data3">
				<thead>
				  <tr>
							  <th>#</th>
							  <th>Name in English</th>
							  <th>Name in Arabic</th>
							  <th>Edit</th>
							  <th>delete</th>
				  </tr>
				</thead>
				<tbody>
					  @foreach($brands as $brand)
					  <tr>
						  <td>{{$loop->iteration}}</td>
						  <td>{{$brand->name_en}}</td>
						  <td>{{$brand->name_ar}}</td>
						  <td><a href="edit_brand.html"><input class="bg-success" type="button" value="Edit" name="Edit"/></a></td>
						  <td><input class="bg-danger" type="button" value="Delete" name="Delete"/></td>
					  </tr>
					  @endforeach


    			  </tbody>
			</table>
		</div>
          <!-- END DATA TABLE-->
      </div>
     </div>



<hr><hr>
@endsection
