<?php


class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{

  public function __construct()
    {
    	
    }

    /**
     * @Given /^I request Google guide for PDF$/
     */
    public function iRequestGoogleGuideForPdf()
    {
        $this->visit("http://www.googleguide.com/print/adv_op_ref.pdf");
    }

    /**
     * @Then /^I should see response headers with content type PDF$/
     */
    public function iShouldSeeResponseHeadersWithContentTypePdf()
    {
      //print_r(get_class_methods($this->getSession()));

      $headers = $this->getSession()->getResponseHeaders();
      echo "I am Printing all response headers here  \n";
      print_r($headers);
      $content_type =  $headers['content-type'];
      assert($content_type == "application/pdf");
    }


}
 
