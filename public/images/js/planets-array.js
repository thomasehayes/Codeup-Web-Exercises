(function(){
    "use strict";

    // TODO: Create an array holding the names of the eight planets in our solar system in order, starting closest to the sun.
    var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", " Uranus", "Neptune"];

    // function for logging the planets array
    function logPlanets() {
        console.log("Here is the list of planets:");
        console.log(planets);
        console.log("---- ---- ---- ----");
    }

    logPlanets();

    console.log('Adding "The Sun" to the beginning of the planets array.');
    planets.unshift("The Sun");
    logPlanets();

    console.log('Adding "Pluto" to the end of the planets array.');
    planets.push("Pluto");
    logPlanets();

    console.log('Removing "The Sun" from the beginning of the planets array.');
    planets.shift();
    logPlanets();

    console.log('Removing "Pluto" from the end of the planets array.');
    planets.pop();   
    console.log(indexOfEarth);

    console.log('Finding and logging the index of "Earth" in the planets array.');
    var indexOfEarth = planets.indexOf("Earth");
    logPlanets();

    console.log('Using splice to remove the planet after "Earth".');
    var planetAfterEarth = planets.splice(indexOfEarth + 1, 1);
    logPlanets();

    console.log('Using splice to add back the planet after "Earth".');
    planets.splice(indexOfEarth + 1, 0, planetAfterEarth[0]);
    logPlanets();

    console.log("Reversing the order of the planets array.");
    planets.reverse();
    logPlanets();

    console.log("Sorting the planets array.");
    planets.sort();
    logPlanets();
})();
