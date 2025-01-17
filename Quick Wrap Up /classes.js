class Person{
    constructor(type){
        this.type = type;
    }

    static classMethod(){
        console.log("This is a static class method")
    }

    instanceMethod(){
        console.log("This is an instance method")
    }
}

const user1 = new Person("Laxman Krishnamurti")
console.log("user1", user1)
console.log("Person", Person)
Person.classMethod()
// console.log("Accessing classMethod on a instance of the class", user1.classMethod())
user1.instanceMethod()

class Scorpio {
    #totalSale = 0;
    static totalWheel = 4;
    brand = "TATA";
    name;
    color;
    fuel = 6;
    driving = false;

    constructor(name, color){
        this.name = name;
        this.color = color;
        this.#totalSale += 1;
    }

    checkFuel(){
        return this.fuel;
    }

    drive(){
        if(this.fuel <= 0){
            return "Oops! car is out of fuel."
        }else {
            this.driving = true;
        }
        this.fuel -= 3;
    }

    addFuel(){
        this.fuel += 7;
    }

    status(){
        if(this.driving && this.fuel > 0){
            return "Driving"
        }else{
            return "Stopped"
        }
    }

    totalSales(){
        return this.#totalSale;
    }
}

const scorpioOne = new Scorpio("TATA CURVE", "White")

//Note :- An instance method doesn't carry static properties of the class. 


// console.log("number of wheels", scorpioOne.totalWheel())
// console.log("totalSale", scorpioOne.totalSale())

// Note:- Lets try to access the instance method on the class iteself. 

//console.log("access instance method on class", Scorpio.checkFuel()) // TypeError: Scorpio.checkFuel is not a function

/**
 * Conclusion :: No! Class itself doesn't inherit instance method an instance doesn't inherit instance method. 
 */

console.log("Fuel indicator", scorpioOne.checkFuel())
console.log("Car status", scorpioOne.status())
scorpioOne.drive()
console.log("Car status", scorpioOne.status())
scorpioOne.drive()
console.log("Car status", scorpioOne.status())
console.log("Fuel Indicator", scorpioOne.checkFuel())
scorpioOne.drive()
console.log("Fuel Indicator",  scorpioOne.checkFuel())
console.log(scorpioOne.drive())
console.log(scorpioOne.drive())
console.log(scorpioOne.drive())
console.log(scorpioOne.drive())
// console.log("Total sale of TATA SCORPIO", Scorpio.totalSales())
console.log("Total sale of TATA SCORPIO", scorpioOne.totalSales())

class BookSkeleton{
    author;
    genre;

    constructor(author, genre){
        this.author = author;
        this.genre = genre;
    }

    bookAuthor(){
        return this.author;
    }

    bookGenre(){
        return this.genre;
    }
}

class Book extends BookSkeleton {
    name;
    publication;
    description;

    constructor(author, genre, name, description, publication){
        super(author, genre);
        this.name = name;
        this.description = description;
        this.publication = publication;
    }

    bookName(){
        return this.name;
    }

    bookDescription(){
        return this.description;
    }

    bookPublication(){
        return this.publication;
    }
}

const book1 = new Book("Acharya Prashant", "Philosophy", "KARMA", "Why everything you know about it is wrong" ,"PENGUINE")
console.log("book1", book1)

console.log(book1.bookName())
console.log(book1.bookAuthor())
console.log(book1.bookGenre())
console.log(book1.bookDescription())
console.log(book1.bookPublication())

class Person1{
    // name;
    // age;


    constructor(name, age, degree){
        this.name = name;
        this.age = age;
        this._degree = degree
    }
}

const user2 = new Person1("Laxman Krishnamurti", 22, "BCA")
console.log("user2", user2)
user2._degree = "Drop-Out"
console.log("user2", user2)

class Shape {
    type = "Circle";
    radius;

    constructor(radius){
        this.radius = radius
    }

    area(){
        return 0;
    }
}

class Area extends Shape{
    constructor(radius){
        super(radius);
    }
 
    area(){
        return Math.PI * (this.radius ** 2)
    }
}

const shape = new Area(7.49);
console.log("Area of the circle", shape.area())

class Customer{
    accountHolder;
    accountNumber;
    balance;

    constructor(accountHolder, accountNumber, balance = 500){
        this.accountHolder = accountHolder;
        this.accountNumber = accountNumber;
        this.balance = balance
    }

    deposit(amount){
        if(!amount){
            throw Error("amount is required")
        }
        this.balance += parseInt(amount, 10);
    }

    checkBalance(){
        return this.balance
    }
}

function instanceTaker(instance){
    // console.log("instance", instance)
    instance.deposit(1000);
    const balance = instance.checkBalance();
    console.log("balance", balance)
}
instanceTaker(new Customer("Laxman Krishnamurti", 918252764932))


console.log(typeof Customer)