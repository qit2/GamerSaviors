
Eric Zhang:
Since all of the operations were implemented already, I made sure that we were using polymorphism, interfaces, and abstract classes in our calculator.
For polymorphism, we use it in all of the operations, as both the abstract class and interface have two functions that are used to make different operations.
The same Operate() function can be used from the Operation interface to do both addition and subtraction, while the same Operate() function in the abstract class
can be used to both square a number and take its square root. We also had two abstract classes, so I changed one of them to an interface to show that we can use 
both common interfaces. I also worked on the creativity by making the results black to make it easier to read.

David Finck: 
I created the abstract class OneOperation so that I would be able to create all of the math functions that only needed and x instead of an x and y. I used the same
structure for all of the functions but I changed up the math for each one. I then created new inputs in the form tag so that I can make the function run after the click
of the type submit. I also worked on the creativity to make it so that the buttons changed when hovering over them.

Ryan Qi and Ryan Zhou:
We wrote the function sin, cos, and tan, which use the abstract class OneOperation. Then we add css to the calculator. 
First of all, we put all the thing in a big div with id which called calc-container. In this div, we make the calculator stay in the middle of page and give the calculator 
a background. Then we make the result box having a boarder and I also change the font size and font weight to make the calculator easier to read.
Also, we make all the input button lines in two lines and I change the color of them into blue. On top of that, we've fixed an unintentional error about dividing zeros.


