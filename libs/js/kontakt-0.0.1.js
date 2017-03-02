function initialize() {
    var latlng = new google.maps.LatLng(52.529546,13.410343);
    var myOptions = {
      zoom: 15,
      center: new google.maps.LatLng(52.529346,13.410343),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
	disableDefaultUI: true,			
    };
    var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);

  var image = new google.maps.MarkerImage(
    '../../media/layout/marker-images/image.png',
    new google.maps.Size(57,70),
    new google.maps.Point(0,0),
    new google.maps.Point(29,70)
  );

  var shadow = new google.maps.MarkerImage(
    '../../media/layout/marker-images/shadow.png',
    new google.maps.Size(95,70),
    new google.maps.Point(5,1),
    new google.maps.Point(29,70)
  );

  var shape = {
    coord: [56,0,56,1,56,2,56,3,56,4,56,5,56,6,56,7,56,8,56,9,56,10,56,11,56,12,56,13,56,14,56,15,56,16,56,17,56,18,56,19,56,20,56,21,56,22,56,23,56,24,56,25,56,26,56,27,56,28,56,29,56,30,56,31,56,32,56,33,56,34,56,35,56,36,56,37,56,38,56,39,56,40,56,41,56,42,56,43,56,44,56,45,56,46,56,47,56,48,56,49,56,50,56,51,56,52,56,53,56,54,56,55,56,56,35,57,34,58,33,59,32,60,31,61,30,62,29,63,28,64,27,64,26,63,25,62,24,61,23,60,22,59,21,58,20,57,0,56,0,55,0,54,0,53,0,52,0,51,0,50,0,49,0,48,0,47,0,46,0,45,0,44,0,43,0,42,0,41,0,40,0,39,0,38,0,37,0,36,0,35,0,34,0,33,0,32,0,31,0,30,0,29,0,28,0,27,0,26,0,25,0,24,0,23,0,22,0,21,0,20,0,19,0,18,0,17,0,16,0,15,0,14,0,13,0,12,0,11,0,10,0,9,0,8,0,7,0,6,0,5,0,4,0,3,0,2,0,1,0,0,56,0],
    type: 'poly'
  };

  var marker = new google.maps.Marker({
    draggable: false,
    raiseOnDrag: false,
	animation: google.maps.Animation.DROP,
    icon: image,
    shadow: shadow,
    shape: shape,
    position: latlng, 
    map: map,
    title:'ISBB Berlin',
  });
	google.maps.event.addListener(marker, 'click', map_link);
  }
function map_link()
{
	window.open('http://maps.google.de/maps?daddr=Sch%C3%B6nhauser+Allee+6-7,+Berlin,+Germany&hl=en&ie=UTF8&sll=52.529812,13.410337&sspn=0.005613,0.027874&mra=ls&z=16','','');
}
$(document).ready(function(){
	initialize();	
});