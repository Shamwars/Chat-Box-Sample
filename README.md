# Chat-Box-Sample

The main application should have two windows, one for the chat log and one to allow the user to enter in commands. These commands should be submitted when the user presses the enter key, and not when a button is pressed.

System Requirements
•	When the application first starts, the system should respond to the user in simple chat format. If the user says hello, the system should respond with “Hello” and then ask the user “What would you like to do today?” 
•	The system should present two options to the user when the user asks “what can I do?”. These options include:
o	Interactive cooking tool – The user can specify what ingredients they have and as soon as they have enough for a specific dish, the system will outline what can be cooked with those ingredients and what steps are involved in the process of cooking.
o	News headlines tool – The user can ask the system to retrieve different news headlines from the RTE RRS feed, three different options should be available, sport, business and entertainment stories. A Parser should be used to read this XML information to provide the content in a presentable format. 
•	At any time when interacting with the system, the user can ask what is the timezone of XXXX and the system will return back with the current timezone of that country. A XML web service should be used to perform this. 
•	If the user says “who am i?” the system should switch to a different screen which will allow the user to enter their basic information such as name, address, telephone number and email address. This information is received though regular text fields which are saved locally in a database. When the user clicks the “Save” button they should then be returned back to the chat window with the bot.
•	If the user says “show me faq” to the system, the window should switch to a page showing all of the commands that can be used with the system. All of this information should be stored in a jQuery accordion to make the best use of the space available. 
•	All of the switches to different pages should all be done from one single PHP page using hide and show of different parts of the page. The user should never be redirected to another page.

•	The complete application should be hosted on a free PHP/MySQL hosting package, see the references for details of services available to do this.

•	The application should be thoroughly tested using Sikuli. Screenshots of this process should be saved documenting the testing process.

•	If the user says “translate XX YY this is a sample” the chat bot should translate the sentence provided from the language XX to the language YY. This should be done using an free online translation API. The resulted translated text should be outputted into the chat log.
