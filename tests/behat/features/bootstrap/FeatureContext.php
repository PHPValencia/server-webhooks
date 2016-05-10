<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    protected $response;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct($parameters)
    {
        $config = array(
            'base_uri' => $parameters['api_url'],
            'http_errors' => false
        );
        $this->client = new \GuzzleHttp\Client($config);
    }

    /**
     * @When I request :arg1
     */
    public function iRequest($arg1)
    {
        $this->response = $this->client->request($arg1);
    }

    /**
     * @Then I get a :arg1 response
     */
    public function iGetAResponse($arg1)
    {
        return ($this->response->getStatusCode == $arg1);
    }
}
