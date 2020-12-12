David Finck:

On this project I focused on the main.php page which was the search and advanced search section of the website. I first had challenges with this because I couldn't find a large enough database online and I also couldn't find an easy to use API. Due to this I decided to just create my own database so it would have everything I needed to make this site. The main issue with this however is the database is really small and could not compare to the competitors sites. This made our website more of just a demo to show off what the site can do with just a small amount of video games on it and in the future we would look to partner with a retail store that already has a large database of all of their video games.

I also ran into challenges when writing the actual code. For starters I first wrote a lot of code to make it so that all the queries would be separate queries for each button clicked and just be a chain of queries. I realized after getting this to work that this was actually not what the quick search should do so I had to rewrite what I already had.

Another huge issue with this page was when I clicked on a game making sure that when clicking a game it would lead to a dynamic page on the other side that changed based on what was clicked. I could only get it to work if there was a second button that would change the gamepage.php and then when you click on the game it would go to that page. This however is not what we wanted for our site so I asked Eric to help me with this section and he was able to get it working smoothly by using ajax and javascript.

I also worked on the css and html for the main.php and some of the gamepage.php.

Ryan Qi:

On this project I was focused on the registration - sign in system and discussion forum. 

The first part is registration - sign in system. First of all, I did the sign up page and I made sure that email, username, and password validate first.  For the username, I just check the data in the database, in order to make sure that the user name is not already taken. Then I write code to make sure that the password is at least 6 characters and two passwords the user entered is matched. Also, in order to make the account secure, I also use the hash function and store it in the database. After the sign up account, the page will jump to sign in page.

Then in the sign page, I meet a problem about comparing the password which users type in and the hashed password which is stored in the database. In the end, I use the php function password_verify to make this thing work. After comparing the password, I store the sign in status and username in the SESSION variables, in order to use in the other page.

For the second part which is a discussion forum. 
First of all, I write the forum.php which will list all the categories in the database. In this part, I met a challenge that I don't know how to save the id and use on the other page. However, I solved this question with "href="show_category.php?id=' .$id. '">' ". In this way, although we jump to the other page, we will bring the id to the new page. in the new page, when we want to utilize the data, we can call "$_GET[id]".

Then I wrote category.php and topics.php which will ask the user to fill the category and topics and save the data into the database. In addition, I had show_category.php and show_topic.php, which will show all the things in the database.

In this section, I have an unsolved problem about reply.php. I tried to use the "$_GET[id]", but it didn't work after "if ($havePost) {", I tried many different methods to figure it out, but none of them really work. so the reply function does not work at this point. This will be a feature which I will work on more in the future. 


