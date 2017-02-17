(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    var person = {
    	firstName: "Thomas",
    	lastName: "Hayes",
    	sayHello: function() {
    		 alert("Greetings " + this.firstName + " " + this.lastName);
    	}
    };
    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
     person.sayHello();

})();