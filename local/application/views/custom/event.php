<div class="event">
	<div class="date"><?
		$d = explode('-',$date);
		echo '<span class="day">'.$d[2].'</span><span class="month-year">'.$d[1].'.'.$d[0].'</span>';
	?></div>
	<div class="event-box">
		<h3><?=$title?></h3>
		<p class="event-content"><?=$content?></p>
		<div class="dates">
			<?
			if(isset($dates) && is_array($dates))
			{
				end($dates);
				$date = explode('-',key($dates));
				if($date[1] != $d[1])
				{
					echo '<span>'.$d[2].'.'.$d[1].'.'.'-'.$date[2].'.'.$date[1].'.'.$d[0].'</span>';
				}
				else
				{
					echo '<span>'.$d[2].'.'.'-'.$date[2].'.'.$d[1].'.'.$d[0].'</span>';				
				}
			}
			else
			{
				echo '<span>'.$d[2].'.'.$d[1].'.'.$d[0].'</span>';	
			}	
			echo '</div><div class="team">';	
			foreach($team as $name => $data)
			{
				echo '<span>'.$name.'</span>';
			}
			$dates = array();
			unset($dates);
			?>
		</div>
	</div>
</div>