<nav>
	<ul>
		<?php
		foreach ($cities as $city) {
			echo '<a href="'.route('city', array('id' => $city->city_id)).'"><li>' . $city->city . '</li></a>';
		}
		?>
	</ul>
</nav>