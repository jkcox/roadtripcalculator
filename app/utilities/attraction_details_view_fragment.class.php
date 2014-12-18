<?php 

Class AttractionDetailsViewFragment extends ViewFragment {

		protected $template = '
			<div class="attraction-details">
				<h2>{{name}}</h2>
				<h2>Click the map for more info!</h2>
				<img src="{{picture}}">
				<a href="https://www.google.com/#q={{name}}" target="_blank">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center={{name}}&markers=size:small|{{name}}&zoom=8&size=375x300&maptype=terrain&key=AIzaSyB4KFmjcSHXd1wZL1-1tPA9xZCCFi9j9Lc">
				</a>
				<div>{{description}}</div>
			</div>';

}
