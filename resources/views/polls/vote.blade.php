@extends ('layouts.app')


@section ('content')
<p class = "text-semibold pt-3 text-center text-headline">Vote</p>
<div class = "text-semibold mx-3 alert alert-info">{{ count($all_details["contestants"]) }} contestant vying for this position</div>
<section class="story">
	<a href="/polls">
		<h2 class="no-margin"><span class = "{{ empty (count($all_details["contestants"])) ? 'bg-danger':'bg-success' }} rounded-4px px-5px tracking-1h-px font-semibold text-18px py-5px mr-8px">{{ count($all_details["contestants"]) }}</span><span class="text-18px font-semibold tracking-1h-px">Contestants! </span><span class="text-18px">Check other polls</span></h2>	
	</a>
	
</section>
{{-- List all the section --}}
<section class = "mx-3">
	<p>{{ json_encode($all_details["contestants"]) }}</p>	
</section>

@endsection