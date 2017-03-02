var t_width = $('#team').outerWidth();
var e_width = $('#team .item-container').width()+40;
var margin = t_width;
if((t_width/(e_width*4)) <= 1)
{
	margin = margin - ((e_width-37)*3);
	margin = margin/2;
	$('#team .item-container:not(:nth-child(3n))').css('margin-right', margin);
	$('#team .item-container:nth-child(3n)').css('margin-right', 0);
}
else
{
	$('#team').width((e_width*4));
}