Feature: Behat Goutte Driver
	In order to test content type 
	As a Behat users 
	I need see reponse headers with gouute driver 


Scenario: Search Behat Blogs
Given I request Google guide for PDF
Then I should see response headers with content type PDF




