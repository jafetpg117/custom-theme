# Custom Wordpress theme for technical test

This is a custom theme based on the figma design provided.

**You can log in in to the site to test it out and the template was also published in this repository. All you have to do is download the zip file, install and activate the theme.**

https://technicaltest.jafetpg.com/

User: jafet

Password: J4f3tpr13t0


## 

### Navbar

Navigation bar is dynamic and it can be edited from Wordpress menus on customization top bar option.




### Hero

Hero banner has two customizable parts (both are reachable from the "edit page option"):

1. Title
2. Subtitle 

These two elements are dynamic depending on the page information entered, the title is going to take the page name and the subtitle is basically the page content


### Services

I have made this section using custom post types and custom fields.

First of all I created the custom post called "Services" so the admin can manage these services provided.

All containing elements are dynamic and editable from Wordpress admin.

1. Service title (This is pulling the post title)
2. Icon (This icon is actually an image saved in database as URL inside the wp_posts table under "attachment" column. This is actually the only custom field that I created for services as all the other fields ara taken from default post elements)
3. Image (Main image is pulling data from feature image of every service post so I didn't had to create a custom field for this)
4. Service description (This one is actually pulling info from the post content so it's also editable from Wordpress admin)

### Form

Contact form submissions are saved in the wordpress database and displayed in a table under the "Quote Requests" Wordpress dashboard. Submissions are also sent by email to my wordpress user, so if you want to test the email feature please let me know and I will update the code.

### Footer

Last but not least... I've made social networks url's and icons customizable from wordpress admin. You are able to edit these icons/links from the admin dashboard under the "Social Networks" option.

Icon is pulling from feature image and url is using the "link to social" custom field that you can find on the very bottom section if you are editing this post type.


