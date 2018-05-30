<div class="event">
	<div class="date"><?
		
		$d = explode('-',$date);
		echo '<span class="day">'.$d[2].'</span><span class="month-year">'.$d[1].'.'.$d[0].'</span>';
	?></div>
	<div class="event-box">
		<h3><?=$title?></h3>
		<?
		if( isset($text) && trim($text) !== null )
		{
			$content = $text;
		}
		?>
		<p class="event-content"><?=$content?></p>
		<div class="dates">
			<?

			if( isset($date_end) )
			{
				$end_date = explode('-',$date_end);
			}
			elseif(isset($dates) && is_array($dates))
			{
				end($dates);
				$end_date = explode('-',key($dates));
			}
			
			if( !isset($end_date) )
			{
				echo '<span>'.$d[2].'.'.$d[1].'.'.$d[0].'</span>';	
			}
			else
			{
				if($end_date[1] != $d[1] && $end_date[0] === $d[0])
				{
					echo '<span>'.$d[2].'.'.$d[1].'.'.'-'.$end_date[2].'.'.$end_date[1].'.'.$d[0].'</span>';
				}
				elseif($end_date[1] != $d[1] && $end_date[0] !== $d[0])
				{
					echo '<span>'.$d[2].'.'.$d[1].'.'.$d[0].'-'.$end_date[2].'.'.$end_date[1].'.'.$end_date[0].'</span>';
				}
				else
				{
					echo '<span>'.$d[2].'.'.'-'.$end_date[2].'.'.$d[1].'.'.$d[0].'</span>';				
				}
			}
			
			echo '</div><div class="team">';
			if( isset($trainer) )
			{
				$team = explode(',',trim($trainer));
			}

			foreach($team as $name => $data)
			{
				if( is_numeric($name) )
				{
					echo '<span>'.trim($data).'</span>';
				}
				else
				{
					echo '<span>'.trim($name).'</span>';
				}
			}
			$dates = array();
			unset($dates);
			?>
		</div>
	</div>
</div>