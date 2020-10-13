Part 1a:
In this part I first started off by using the DOM to get the first tag of the html file which was the HTML tag and I stored it in the variable x.
I used this variable as the starting point for my recursive function. From here it adds one to the dashes and then gets all of it's child elements and runs
through the program again with each of the children. Then it keeps doing the same thing until it gets through all of the tags in the html file. I as a developer
might want to use DOM in my development because it is an easy way to access any or all parts of an html file and change it however we want through css or just
change the html itself. With the javascript we can make it if thhe user does a specific command the css or html will change and we casn make it be whatever we want.

Part 1b:
My methods were different in this part than in part a because for this part I started off by accessing the HTML tag through the class of the html tag instead 
of just accessing it through its tagname. The return values are the same in part 1a and 1b because the code still runs the same because the only part I change was the way I aquired the initial value.
After the initial value I didn't use getElements at all after that in my function so there was nothing else I needed to change. I did however add classes in the html
to get the code to run the way I needed it to.

Part 2:
I used the addEventListener method to add a click event listener to every tag that part 1a accessed. When I click on any element on the document, the alert box pops 
up with the name of the tag that is clicked on. After that, it creates an alert box with the parent element, and then another with its parent if possible. This shows
the bubbling because it bubbles up through the parent tags.
