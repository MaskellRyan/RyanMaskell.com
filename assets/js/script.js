
//	Make loging safe for all browsers
window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){console.log(Array.prototype.slice.call(arguments))}};


// This script is an IIFE (Immediately Invoked Function Expression) that passes 
// jQuery in to avoid conflict with other libraries.

// IMPORTANT - READ THIS FIRST
// This script is run as soon as it is loaded, so should only be included at the base of the required page.


(function($) 
{	
	/***********************************************/
	//	CONSTANTS
	//	Use upper case variable names to declare
	//	constants such as configuration paths, scoped to this
	//	closure and available to all methods.
	//	Separate words with underscores.
	/***********************************************/
	
	var CONSTANT_NAME = 'A constant, available to all methods of this closure.';
	

	/***********************************************/
	//	VARS
	//	Use lower case variable names to declare
	//	variables that are scoped to this
	//	closure and available to all methods.
	//	Use camel case to separate words.
	/***********************************************/
	
	var instanceVariable = 'An instance variable, available to all methods of this closure.';	
	
	
	/***********************************************/
	//	INIT
	//	This function will be called upon load, so call
	//	any initialastion functions here. 
	/***********************************************/
	
	this.init = function()
	{	
		getData();	
	}();


	/***********************************************/
	//	EXAMPLE METHODS
	/***********************************************/	
	
	// get some data
	function getData()
	{
		// define a local variable
		var localVariable = 'A local variable, scoped to this method.';
		console.log(localVariable);

		// access some instance variables
		console.log(CONSTANT_NAME);
		console.log(instanceVariable);

		// call a method - maybe an ajax call?
		onData('onData: I was called from on getData.');
	}
	
	// on data return
	function onData(data)
	{  		
		// log out some data
		console.log(data);
		
		// get the body with jQuery, do something with it.
		$('body').each(function (){
			log(this);
		})
	}
	
		
})(jQuery);

$(document).ready(function () {
  $('#ryan').plaxify({"xRange":40,"yRange":10});
  $('#seattle').plaxify({"xRange":20,"yRange":0,"invert":true});
  //$('#greeting').plaxify({"xRange":40,"yRange":10});
  $.plax.enable()
})

$(document).ready(function() {
  
  // Good stuff
	$('div#lastfm').lastFM({
		username: 'maskellryan',
		apikey: '4c2dd13c006e5835ebbbe342fe4c1ca2',
		number: 5,
		artSize: 'large',
		onComplete: function(){
			//Done
			
		}
	});


});


$(document).ready(function() {
  $("a.group").fancybox({
    // 'nextEffect'  : 'fade',
    // 'prevEffect'  : 'fade',
    // 'overlayOpacity' :  0.8,
    // 'overlayColor' : '#000000',
    // 'arrows' : false,
  }); 
});
