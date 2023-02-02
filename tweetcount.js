var tweet = prompt("compose your tweet");
tweetCount = tweet.length;
alert("you have written " + tweetCount + "characters, you have " + (140-tweetCount) + " characters remaining");


/*  sldfjsljsfjs
    */
var name = "Angela";
name.toUpperCase();

/* or to lower case */
var name = "Angela";
name.toUpperCase();

name = name.toLowerCase();

/* string concatentation */

alert("Hello" + "World");
var message = "Hello";
var name= "Angela";
// write your code below this line:


/* here is hte concatenation */

print('Hello World');
alert("hello" + " world");
var name = prompt("What is your name? ");

var message = "Hello";
var name = "Angela";

// wrigte code below
Hello there, Angela
alert(message + " there," + " " + name);

//       -----------------------------------  

var message = "hello";
var name = "Joshua";
alert(message + " " + name);


//----------------------------------------------------
var tweet = prompt("compose yur tweet");
var tweetcount = tweet.length;
alert("you wrote" + tweetcount + " characters, you have" + (140 - tweetcount) + "remaining");

//----------------------------------------------------

/*var tweet = prompt("compose your tweet");
tweetCount = tweet.length;
alert("you have written " + tweetCount + "characters, you have " + (140-tweetCount) + " characters remaining");  */


var tweet = prompt("Compose your tweet");
var tweetUnder140 = tweet.slice(0,140);
alert(tweetUnder140);
  
//----------------------------------------------------


var name = prompt("What is your name");

// 2 Capitalize the first letter of their name

//a isolate the first char
var firstChar  = name.slice(0,1);
//b capitalize the firstchar of the name
var capitalFirstChar = firstChar.toUpperCase();

//c isolate the rest of the name
var restOfName = name.slice(1, name.length);
var restOfName = restOfName.toLowerCase();

//d concatenate the first char with the rest of the char
var fullName = capitalFirstChar + restOfName;

alert("Hello there," + fullName);
