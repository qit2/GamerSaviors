Gamersaviors

David Finck:
To make it a plugin I read the page long notes and used the appropriate example code fromo the article. I added the sliders and I started with the example code that
was given and I worked off of that code. The first thing I changed fromo that starter code was I made the bar horizontal and I made the bar starting at 0. Next
I made the text box not display only so the user was able to type in it. This then came with the challenge of connecting what was typed into the box to what was on the slider.
To do this I used jquery to take the value of what was in the box and use that value to change the value of the slider. Then I added a little css through jquery to make 
the sliders look more presentable.

Next I had to make sure what was typed into the box was hex. The problem here was that when I changed the slider to that value it didn't work because the slider was in decimal.
So I created two functions: one to change hex to decimal and the other to change decimal to hex and used thse accordingly.

I also made sure that what was typed into the txt boxes was something that shouold be typed in. So it had to be a hexidecimal that was between 00 and ff. If the user
imputted something else I made the slider not change and the box background turned red.

Creativity:
I added music to the background of the game when the new game button was clicked. I also added a sound for when the guess button is clicked. Then I also added some code to 
the css to make the game look presentable.