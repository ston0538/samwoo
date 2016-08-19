@extends('mobile.specialvehicle.index')
@section('sub_content')
	<section class="description img_1">
		<h3>합판타입 시공 이미지</h3>
		<img class="mb10" src="{{URL::asset('images/special/topcar_2-1.jpg')}}" alt="합판타입 시공 이미지">
		<img src="{{URL::asset('images/special/topcar_2-2.jpg')}}" alt="합판타입 시공 이미지">
	</section>
	<section class="cf">
		<h3>합판타입 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/topcar_2-3-1.png')}}" alt="탑차용 합판1"></p>
			<span>탑차용 합판1</span>
		</div>
		<div class="">
			<p style="text-align:right;line-height:160px; height:170px;""><img src="{{URL::asset('images/special/topcar_2-3-2.png')}}" alt="탑차용 합판2"></p>
			<span>탑차용 합판2</span>
		</div>
	</section>
@endsection