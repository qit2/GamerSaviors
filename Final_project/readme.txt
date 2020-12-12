David Finck:

On this projct I focused on the main.php page which was the search and advanced search section of the website. I first had challenges with this because I couldn't find a large
enough database online and I also couldn't find an easy to use API. Due to this I decided to just create my own database so it would have everything I needed to make this site.
The main issue with this however is the database is really small and could not compare to the competitors sites. This made our website more of just a demo to show off what the site
can do with just a small amount of video games on it and in the future we would look to partner with a retail store that already has a large database of all of their video games.

I also ran into challenges when writing the actual code. For starters I first wrote a lot of code to make it so that all the queries would be separate quiries for each button clicked
and just be a chain of queries. I realized after getting this to work that this was actually not what the quick search should do so I had to rewrite what I already had.

Another huge issue with this page was when I clicked on a game making sure that when clicking a game it would lead to a dynamic page on the other side that changed based on what was clicked.
I could only get it t work if there was a second button that wouold change the gamepage.php and then when you click on the game it would go to that page. This however is not what we wanted
for our site so I asked Eric to help me with this section and he was able to get it working smoothly by using ajax and javascript.

I also worked on the css and html for the main.php and some of the gamepage.php.

Ryan Qi:

On this project I was focused in the registration - sign in sytem and disccusion forum. 

Eric Zhang:

On this project I was focused on getting the prices from the different websites. Originally, I tried to use cURL to make a connection to the websites, but I had
trouble getting that to work. I used file_get_contents in the end which worked with no problems. I had little to no issues with Steam after learning about how 
APIs worked, as it was simple to get the contents from the API. I then had some trouble with Target's website before finding their data API as well. GameStop gave
me some trouble as I had to parse the HTML page directly. I did this using preg_match, which required a regular expression. I ended up using this expression:
'/<div class="condition-prices">(.*?)\$(.*?)<\/span>/s'. This translates to "find me the shortest match between the div tag and a $ sign, then find the shortest
match between the $ sign and a closing span tag." This got me the price from the page. After that, it was relatively easy to set the prices and put them into links.

With the database, I had to make new columns for each store, and also for each platform that the games were on. I tried to find every game on our database in the 
stores we had, and put the product IDs into the database. For the Switch games, some of them were on the platform but not available outside of the Nintendo eShop.
Some games also had special characters in the name or the description which were unable to be displayed even with htmlspecialchars, so I changed those to regular 
characters.

After David setup the PHP for outputting the games into the rows that we had, I also added the alt text for the images. I put the title of the games into the alt 
texts, then added a function to get the title from the alt text and put it into a PHP variable. I tried to first set the title onclick only without any AJAX requests,
but this didn't work since it would keep passing in the title of the last game outputted. I came up with the idea to use SESSION variables as it was one way I found
to get variables from one page to the next without changing the URLs, and also because I was unsure how to POST to the next page while getting the title properly.
I ended up using a POST request in AJAX still, and set the SESSION variable to the POST variable when the image was clicked.

I also adjusted the CSS of the gamePage to make sure that the layout wouldn't be ruined by a long price.
