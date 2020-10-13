Part 1a:
In this part I first started off by using the DOM to get the first tag of the html file which was the HTML tag and I stored it in the variable x.
I used this variable as the starting point for my recursive function. From here it adds one to the dashes and then gets all of it's child elements and runs
through the program again with each of the children. Then it keeps doing the same thing until it gets through all of the tags in the html file. I as a developer
might want to use DOM in my development because it is an easy way to access any or all parts of an html file and change it however we want through css or just
change the html itself. With the javascript we can make it if thhe user does a specific command the css or html will change and we casn make it be whatever we want.

Part 1b:
My methods were different in this part than in part a because for this part I started off by accessing the HTML tag through the class of the html tag instead 
of just accessing it through its tagname. The return value of both 1a and 1b are basically the same, since the only difference is that the new line strings('\n')in part 1a is replaced with the new line tags(<br/>) for the exact same output displayed in the HTML document, and the reason behind these differences is that in part 1a, the return value will be inserted into HTML as text like a string object, while in part 1b, the return value will be directly inserted into HTML as texts and tags.

After the initial value I didn't use getElements at all after that in my function so there was nothing else I needed to change. I did however add classes in the html
to get the code to run the way I needed it to.


Part 2:
I used the addEventListener method to add a click event listener to every tag that part 1a accessed. When I click on any element on the document, the alert box pops 
up with the name of the tag that is clicked on. After that, it creates an alert box with the parent element, and then another with its parent if possible. This shows the bubbling because it bubbles up through the parent tags.

Part 3: 
Besides the cloneNode() function which literally copies the element to a clone, the essense of finishing part 3 is determining whether the element mouse is joining or leaving is as same as the element that triggers the event. When the two matches, make the style changes to the element accordingly, and the for loop is used to make sure every element will have onmouseover and onmouseout events applied. 

Creativity:
Ryan Qi: First of all, adding a white dotted border around the whole page. Then for the title of each part, i change the color to blue and make it have a opacity of 0.5. Also I make text-aign stick to center, then the title will be always on the center. I also change the font style of the instruction content. For the id "part1b", I set the display to the none, so the return value of function 1b will not show on the page when we open the page. After clicking the bottom, the result will display. In addition, I also draw a mouse cursor and make the cursor looks different in our page.

David: For my creativity I added css to make the button that we were using look more appealing. So I changed the color and added shadow and a border and much more.

Ryan Zhou: Made a transformation from in-text JavaScript to the separate file, made some variables global therefore made sure all functions in part 1 has a return value for display.

Eric: For my creativity I added confirm boxes after the alert box showing how many more elements were remaining in the bubble chain.

Other Explanations:
1. It seems like the part 2 click event overrides the button_click function in JavaScript when the "Click me for part 1b content" once so when the button is clicked the first time, it will only show the part 2 alerts(not displaying the content), but a second click on the button can put a stop to this issue.
2. There are some locations in div tags where onmouseover and onmouseout event keeps triggering for multiple times since part 3 only adds the two event listeners without providing the case when the mouse is already in the div element(not outside) but the onmouseout event also triggers, resulting in a fluctuating element experience.
