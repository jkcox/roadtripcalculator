<?php 

Class AttractionsViewFragment extends ViewFragment {

		protected $template = '
			<a class="fancybox" rel="{{route_id}}" href="/attractions?attraction={{attraction_id}}">
				<div class="attraction">
					<img src="{{picture}}">
					<h2><span>{{name}}</span></h2>
				</div>
			</a>';

}


