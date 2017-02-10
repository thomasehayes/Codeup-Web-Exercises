(function(){
    "use strict";
    var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];
    var planetsAsString = planets.join("|");
    console.log(planetsAsString);

    var planetsAsArray = planetsAsString.split("|");
    console.log(planetsAsArray);

})();
