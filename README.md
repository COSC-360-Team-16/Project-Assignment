# Project description:<br/>
## COSC 360 Web Forum Project
The scope of this project is to create a gaming forum where users with an account will be able to engage in discussions, while unregistered users will be able to simply view the discussions. 
The design of this site will be similar to reddit with 2 columns, a main one and a sidebar, and a menu bar stuck to the top of the browser. The site will be able to maintain a certain state for users ie. them being logged on. Certain user data will be secure such as their real name and emails. Data will be stored using my SQL and any server side scripting will be done with PHP and client side scripting will be done using JS.<br/>
Requirements list:<br/>
<ol>
	<li>User functionality</li>
	<ol>
		<li>Unregistered users</li>
		<ol>
			<li>View discussions</li>
			<li>Search for discussions</li>
			<li>Create their own account</li>
			<ol>
				<li>Must provide a name, email, and a image to be associated with the account</li>
				<li>They should be able to create a username for privacy reasons</li>
			</ol>
		</ol>
		<li>Registered users</li>
		<ol>
			<li>Create and comment on discussions</li>
			<li>View and edit their profile for the website</li>
			<li>Recover their password via email</li>
			<li>View their post and comment history</li>
		</ol>
		<li>Administrators</li>
		<ol>
			<li>Search for a user by name, email, or post made by said user</li>
			<li>Enable or disable user accounts</li>
			<li>Be able to view activity on the website by date</li>
			<li>View a report on usage with the ability to filter the reports</li>
		</ol>
		<li>All users</li>
		<ol>
			<li>Be able to view hide posts and threads without reloading the page</li>
			<li>Receive a stickied alert that a page currently being viewed has changed</li>
			<ol>
				<li>ie. a user is viewing a post and then another user comments. The first user will receive a notification somewhere on the page that the post has been changed</li>
				<li>The user will not however have to refresh the page to see the change, it will happen asynchronously</li>
			</ol>
		</ol>
	</ol>
</ol>

User Walkthrough

Account creation & Login

When the user first reaches types in the url for the web page, they will be greeted with the homepage that contains all the information regarding popular single-player and online games.

Once on the homepage, the user will be greeted with many different pages they can visit on the webpage via clicking the respective links. If the user has an account on the website already, they can navigate to the top header and click Login to sign in to their existing account and begin using the webpage.

If a user is new to the website, they can navigate to the header at the top of the page and towards the right side they can click on “register” and will be redirected to a page where they can create an account.

Once the user has clicked on register, they will be prompted with the registration form. From here they will be able to choose a profile picture as well as enter in their first and last name, as well as an email, username and password to store the account in the database. If the username or email is already stored in the database an error message will be shown to tell the user to select a username or email that is not taken. If the form is not filled, an error message will also tell the user to make sure the form is filled.

Once the registration process is complete, the user will be prompted to sign in before they can return to the homepage. Once the user has entered their username and password they will be taken back to the main homepage to browse and access the discussions.

After the user has logged in with a previous account or has created a new account the user can begin using the websites many different features which includes browsing the single player or multiplayer games that are displayed, being able to access the news section and the forums page where all the discussions are occuring.








Administrator

The administrator is a user that has special administrative functionalities which normal visitors and registered users do not have. The administrator can sign in to their account by clicking “login” at the header on the top right and will be prompted with the sign in form. 

Once, the administrator has entered the username and password, they will be redirected to the homepage where they can navigate to other pages.

On the forums page, the administrator can have the options to view and remove posts like other registered users.

To access administrator tools and functionality, the user will have to navigate to the profile page where the user can select “admin tools” which then shows the tools and options the administrator has and can use. 


Homepage

On the homepage, there are login and register options near the top right where existing users or new users can create an account and sign in.

Near the top is a header with navigation links to other pages which users may wish to visit. Users can navigate to other pages by clicking on the respective names. If a user wishes to navigate to the news page, they can click on “News” on the header and will shortly be redirected to the news page.

Below are a list of single-player and online games which users can click on to be redirected to the page of the respective game which displays images and relevant information about the game.

Below is a main section which displays popular and frequently viewed posts and news topics which are displayed on the news or forums pages. By clicking onto the titles of the topics/articles the user will be redirected to the relevant pages or sections.

Towards the left is a panel which displays the top 10 most popular games which users can click to view information on. 

When the user is navigating other pages, the user can click on the icon logo towards the top left of every page where the user will be redirected back to the homepage.
Forums page

Registered users and administrators can create, edit and remove posts. The user can create a post by clicking onto the textbox near the top and type in their desired content. Then the user can click on “Post” to officially place their post onto the forum.

Below the textbox is a series of posts that were created by other users. Directly underneath a post is a small textbox which the user can then enter text and click “comment” to post a comment. The user can also see comments from other users which will be displayed below.

If a post is created by the user themselves, other than the comment option, there is also an edit and remove option beneath the post that allows the user to edit or delete their post.

