class Person {
    constructor(){
        this.url = window.location.toString();
        this.variablesStart = /(\..*|\/)#/;
    }
}

var setupjs = function(){
    document.body.style.backgroundColor = "white";
    var user = new Person();
    document.write(user.variablesStart);

}