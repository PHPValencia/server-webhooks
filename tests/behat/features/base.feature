Feature: Base

Scenario: Check site is responding 
  When I request "GET /" 
  Then I get a "200" response

Scenario: Try an invalid request 
  When I request "GET /some-invalid-request/some-parameter" 
  Then I get a "404" response