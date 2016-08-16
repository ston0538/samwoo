@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>목재타입 시공 이미지</h3>
		<p>목재타입 BOARD는 높은 탄성지수와 강도가 여타 소재들에 비해 강한것이 특징이며,<br> 강도에 비해 낮은 비중으로 
		   차체 경량화에 큰 도움을 주고 있습니다.</p>
		<img src="{{URL::asset('images/special/wing_1-1.jpg')}}" alt="장폭 트레일러" class="mb10">
		<img src="{{URL::asset('images/special/wing_1-2.jpg')}}" alt="장폭 트레일러">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/wing_1-3-1.png')}}" alt=""></p>
			<span>아피통(APITONG)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/special/wing_1-3-2.png')}}" alt=""></p>
			<span>아피통(APITONG)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/wing_1-3-3.png')}}" alt=""></p>
			<span>아피통(APITONG)</span>
		</div>
	</section>
@endsection