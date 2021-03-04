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
