David Finck:

My markup is semantically correct on my resume because each tag that I use has a reason for being there and it makes sense to the place where I put it.
I did not just use div tags everywhere in my code. For the top section I used a header tag because I was the header of my resume page which had my name and
my personal information. After that I used an article tag to be around all of my main information like education, projects, and work experience. I then used an
aside tag for all of the little information like related courses and skills. I put the aside tag because this inifoormation was just a side thing and wasn't
meant to be the main focus. Inside these tags I kept a similar style that repeated for each section so I reuse the same tags a few times. The tags I reused were
the section tag, the ul and li tags, and the h2 tag. The h2 tag I used as the header of each individual section in my resume. Then I used section tags along
with the bootstrap classes and I chose section tag because it breaks up the text in sections by columns so it made sence to me to use the section tags. Then
when adding information I mainly used ul and li because I wanted the information to be in a list format.

For this project I was able to get away without using div or span tags for styling purposes. I did use a strong tag and if I wanted the style to be something
different than just being bold I would have used a span tag in replace of the strong tag in this section but all I wanted was for the word to be bold.

The hCard information that was added is helpful to both humans and computers because the information that is being markedup is very presice. So the tags that
are used are used for specific information. HCard provides tags that are specifically meant for personal iniformation like address and name which helps make the code
easy to read by both humans and computers.

useful websites: https://microformats.org/wiki/hcard, https://zety.com/resume-examples

Eric Zhang:

My markup is semantically correct because the hCards are wrapped in an address tag, which is used for marking up personal information. Inside the address tag, there are no high-level tags like h1 or other header tags. Instead, there are only p tags, ul and li tags, and span tags. This makes sure that the text inside the hCard is not incorrectly interpreted as a header.

I needed to use span tags for styling purposes. In the hCard adr class, I used spans to help mark up the region, locality, and postal code while maintaining a readable address when displayed on the page. Other than that, I used a p tag with a specified line-height to format the name of the hCard better.

The information in an hCard is useful to both humans and computers because it specifies what they are looking at. If the human only had access to the HTML code, then they may need to dig around to find the personal information. The hCard tags help mitigate this by adding the wrapper around the personal information as well as tags for each section. This can be found quickly or skipped if they do not need to look at it. For computers, it helps them determine that the information it wraps is specifically personal information, and not document information. This helps the computers differentiate between information to display as main document information and personal information.

Useful websites: https://dev.opera.com/articles/introduction-to-hcard-part-2-styling/


Ryan Qi & Ryan Zhou:

We've been working on overall HTML and CSS for both the index page and the team pages as well as links throughout the enitre lab. Some div tags are used in between section tags
because we've decided not to have section tags all the way down the HTML(which is as annoying as div tags all the way down the HTML)，and merging those nested div and section 
tags actually affects the appearance of the webpage greatly, but we've avoided span tags as much as we can by applying multiple classes to p tags.
Thanks to some external resources providing cool icons and flip card animation tutorials(surprisingly applicable without JavaScript), we've applied most of the creative 
ideas into semantically correct HTML: The i tag stands for "icon", and we've included css from external websites with the correct version, both the icons and the 
information are included inside the anchor tag so it all come together to a valid link, then we added br tags to make sure those links are separated instead of squashing to each 
other. Besides that, there is an animated gradient(rainbow-colored) background applied into the index page. However, the confliction between CSS files are the most challenging 
portion of our works here(where we basically "break everything"): Classes crash into each other, environmental(*) settings overriding everything else, order of including CSS 
files actually matters, ridiculous locations of elements and paddings larger then images themselves etc... 

The hCard information included is beneficial for both humans and computers since they ease the process for both human readability of HTML and CSS files and the efficiency of 
computers processing the HTML and CSS, mainly because there are specific tags that are easy for humans to understand, and computers can differenciate between information tags so they can be displayed more properly.

External Resources:
Flip Card Animation Tutorial: https://www.youtube.com/watch?v=uR7EbQImYmo
Animated Gradient Background Tutorial: https://www.youtube.com/watch?v=fBRzD6dwJfw
Icon Tags: https://fontawesome.com/
