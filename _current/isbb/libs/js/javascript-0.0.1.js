// ----------------------------------------------------------------------------------------------------------------------------------------------------------	
	jQuery.fn.inlinelabel = function() {
		return this.each (function (event){
			if ($(this).val() != "") {
				$(this).prev().addClass('has-text');
			}

			$(this).bind('focus', function () {
				$(this).prev("label").addClass("focus");
			});

			$(this).bind('keypress keydown paste change', function () { // 
				$(this).prev("label").addClass("has-text").removeClass("focus");
			});

			$(this).bind('blur', function () {
				if($(this).val() == "") {
					$(this).prev("label").removeClass("has-text").removeClass("focus");
				}
			});
		});
	}
	$(".inline-label .input").inlinelabel();
	// $(".inline-label .input").live(function(){
	// 		$(this).inlinelabel();
	// });
// ----------------------------------------------------------------------------------------------------------------------------------------------------------		
	(function($){
		$.fn.toggleSwitch = function(options){

			// Default On / Off labels:

			options = $.extend({
				labels : ['ON','OFF']
			},options);

			return this.each(function(){
				var originalCheckBox = $(this),
					labels = [];

				// Checking for the data-on / data-off HTML5 data attributes:
				if(originalCheckBox.data('on')){
					labels[0] = originalCheckBox.data('on');
					labels[1] = originalCheckBox.data('off');
				}
				else labels = options.labels;

				// Creating the new checkbox markup:
				var checkBox = $('<span>',{
					class: 'switch-container '+(this.checked?'checked':''),
					html: 	'<span class="switch-ein">'+labels[0]+
							'</span><span class="switch-aus">'+labels[1]+'</span><div class="toggle-shadow"></div>'
				});

				// Inserting the new checkbox, and hiding the original:
				checkBox.insertAfter(originalCheckBox.hide());

				checkBox.click(function(){
					checkBox.toggleClass('checked');

					var isChecked = checkBox.hasClass('checked');

					// Synchronizing the original checkbox:
					originalCheckBox.attr('checked',isChecked);
					// checkBox.find('.tzCBContent').html(labels[isChecked?0:1]);
				});

				// Listening for changes on the original and affecting the new one:
				originalCheckBox.bind('change',function(){
					checkBox.click();
				});
			});
		};
	})(jQuery);	
	$('input.toggle').toggleSwitch({
		labels: [ 'Ein', 'Aus' ]
	});
// ----------------------------------------------------------------------------------------------------------------------------------------------------------	
// IMPORTANT !!!!!!
// makes Content always have 100% height
	$("#sitemap .menu > li").height($('#sitemap ul').height());