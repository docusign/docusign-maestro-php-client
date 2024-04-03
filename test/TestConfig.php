<?php

class TestConfig
{
    /**
      * $integratorKey
      * @var string
      */
    protected $integratorKey;
    
    /**
      * $host
      * @var string
      */
    protected $host;
    
    /**
      * $apiClient
      * @var DocuSign\Maestro\Client\ApiClient
      */
    protected $apiClient;

    /**
      * $accountId
      * @var string
      */
    protected $accountId;

    /**
      * $recipientEmail
      * @var string
      */
    protected $recipientEmail;

    /**
      * $recipientName
      * @var string
      */
    protected $recipientName;

    /**
      * $templateRoleName
      * @var string
      */
    protected $templateRoleName;

    /**
      * $templateId
      * @var string
      */
    protected $templateId;

    /**
      * $envelopId
      * @var string
      */
    protected $envelopeId;

    /**
     * $createdEnvelopId
     * @var string
     */
    protected $createdEnvelopId;

    /**
     * $returnUrl
     * @var string
     */
    protected $returnUrl;

    /**
     * $clientUserId
     * @var string
     */
    protected $clientUserId;

    /**
     * $clientSecret
     * @var string
     */
    protected $clientSecret;

    /**
     * $clientKey
     * @var string
     */
    protected $clientKey;

    /**
     * $privateKey
     * @var string
     */
    protected $privateKeyB64;

    protected $userId;

    protected $brandId;

    /* public function __construct($integratorKey = null, $host = null, $returnUrl = null, $envelopeId = null, $secret = null, $key = null, $userId = null, $privateKey = null)
    {
        $this->host = !empty($host) ? $host : 'https://demo.services.docusign.net/aow-manage/v1.0';
        $this->integratorKey = !empty($integratorKey) ? $integratorKey : getenv('INTEGRATOR_KEY_JWT');
        $this->clientSecret = !empty($secret) ? $secret : getenv('CLIENT_SECRET');
        $this->clientKey = !empty($key) ? $key : 'Docs/private.pem';
        $this->privateKeyB64 = !empty($privateKey) ? $privateKey : getenv('PRIVATE_KEY');

        $this->recipientEmail = !empty($recipientEmail) ? $recipientEmail : 'node_sdk@mailinator.com';
        $this->recipientName = !empty($recipientName) ? $recipientName : 'PHP SDK';

        $this->templateRoleName = !empty($templateRoleName) ? $templateRoleName : 'Manager';
        $this->templateId = !empty($templateId) ? $templateId : getenv('TEMPLATE_ID');

        $this->returnUrl = !empty($returnUrl) ? $returnUrl : getenv('REDIRECT_URI');

        $this->envelopeId = !empty($envelopeId) ? $envelopeId : '';
        $this->userId = !empty($userId) ? $userId : getenv('USER_ID'); //can be taken from generateAccessToken returned result

        $this->brandId = !empty($brandId) ? $brandId : getenv('BRAND_ID');

        $this->clientUserId = "1234";

        $decodedKey = base64_decode($this->privateKeyB64);
        file_put_contents($this->clientKey, $decodedKey);
    } */

    public function __construct($integratorKey = null, $host = null, $returnUrl = null, $envelopeId = null, $secret = null, $key = null, $userId = null, $privateKey = null)
    {
        $this->host = !empty($host) ? $host : 'https://demo.services.docusign.net/aow-manage/v1.0';
        
        $this->integratorKey = !empty($integratorKey) ? $integratorKey : 'x97617642-faf7-4b4d-a9fb-692bfa86bad0';
        $this->clientSecret = !empty($secret) ? $secret : '43ce55e1-e849-42cb-b32b-f78fb2d0e0f5';
        $this->clientKey = !empty($key) ? $key : __DIR__ . '/Docs/private.pem';
        $this->privateKeyB64 = !empty($privateKey) ? $privateKey : 'LS0tLS1CRUdJTiBSU0EgUFJJVkFURSBLRVktLS0tLQpNSUlFb2dJQkFBS0NBUUVBcTF5VXp3M293byt5SXVCbnRHNEVGUEVhZUpxZW1qZG5JS3U0SkpCOFZtNUxKUmFYCjY4c21oK3B6MkswR3RmcUIzZmlJYWd1dzNOc1ZaOHYrY2FyZnh6b1g1OGplaUlUaTZORFhLNmkzUSs5dHlDSnAKcnhjbVRseVBJaDFvK1I5QmFaQW43VWMwT0lra2NvbnJuY1JsREFqZ1J1c0JzNzlpekpJcU1IRStZRzV1U0NHKwpUTERQK0x0enpQSzhBNHJSQisvbERLb1hNK085MDVLQlNFSnlaMnhHWk9IWTRTRVdLSDV2akE1MHN5eTZvR3BNCkhwY3B4NHJydlJMZmNtSkRjU0h2WTFXVDNHYVBBT1huU29HelVEbndpT1BkUzFyY3puSDJud3J3K2tQV3hId2oKc0UyTy9qdkVMZHVWbDhIL1BQc1cxd3R5am5FdDdCN1E5d3JXY3dJREFRQUJBb0lCQUFNcG9IVzVCSmcrN0dtNQpUWmsxV2c0UktBUmhJMzJ1My9LVGkvUGhWb0tvaFB1NGN2WUJUVnlMM3o5V3NKQ3ZHa3czL1c4eXpjVnRMbnlOCnVmOTBoSjB0QThSVkJaYnNYR1dYLzBHeHdSeGt1M0lHVm03OTByZkRZd1ZwOW5sb2JlN1RzU09lWjZzTzZqeXcKaDFrcDNFaWdncVM5ZmdGSWhiTGd0bUVuYm0wVkJmQS8rOFVOWlF4Snh6dzB1WkNWb2pFb0Z0Ynh5djNpbkhTdQpjbEtHczNzRFExUkEyUERFM3h5T1I1MWE0UkxBV3VhdlFDMVRkeWRTL1FFbkNteEpuWjFlUVkrYmp0K0duSE9PCk9QemdDS0h1MVRkSnlQVDU3a1U3RlhNRWt1dWo1YUcxaS9VdFpTTkgrTDM4Nnk2blBtbzdiL21YeUZnTWlsN3IKbE5hVDgxRUNnWUVBNy9iMHVvdFpFbTNHejFPd05ZbVFTOGdOeEFxMVd0VzIyNVJDQnhpRVYrUzd4c2x1ZUNpRwpuQVRCaWR3TUkvOFhiTjhLdmJtVTJUTm5uZGNzVU50OXRhOHVmWDBHWFEwcGpFWE5MM1pmVEtvWkYwZS9CbjNXCkJxU1YxWUJscEU3QjgxTTc5bVNWWWJNU2NmenhDVmphVTUzSlJEellVWXhQUU5WK2lNa1lrOGtDZ1lFQXR0QUsKMlpLUG96bFdUUDZHTzF2M2VrbStRd1VmdHZKNDNYeVo1OVB6aGVnam0yaGtJRWJVdUlQQ1ZmdVFJVkN2ZlBJQgp5QW9UQys5aTRyQVBtQ3ZZWG9HWUF4OGw1WXV3ZmlVaDhhalRhdnpnckNrOXU5L3hPSDJ5cEl4Um5IenBlOTl0ClYra0xFRXVXK3VMY045K0QxMGJQMDRxVEhvK0RJR2g5TXVqMjNsc0NnWUFrWHF5Mi9WblJ0anUwdnIxdFQ5MUQKN3gxUEFrUjhjUG5YREFCNTdOaGFMZnZiNURuUEVtMWNoa2dES2d2WkJOZTdFNDhnTkZtQUZnOTFWK0NLbk1uUAoySzVXTExYak1wU0NneTNYTEx6QzlPRDZxMUFqbnJ6cW90Vm0xNkFRS0RPek9vRlRGZW1pTmk3c2dlYlNnTm9PClpGTFYrZGJiZlVXaDBQbnRwM1VIS1FLQmdGMS85RHlwVUJ1c1pLNUdjNE1DbTRXSkYrMlJQbEpFbTNxMGtzYlcKU2JRUU1iMzNXMWFDdzZPSGlDcVAybnlmbHRHeHVTV0Z1WTRlSnBaSWRBRmhVMjJxbklQa04yNjZ6azhHVU9FWApkdUkrYWU3RHZSWk5DRVBiVGpZSXFtaitIakRENmxuUEVHQ0tPTE1pdW4wOUxXSTZqbXJrY2pCc09DV29LM2lSClhFb0hBb0dBT1NYTzFrTTZwME1aRWhLeHJWdW5GNkhwVzhhSFJqY2RjampKSlJGZ2FwM2h4Q1QxT1o5WUIrU0QKUHJuK2NqRko3V1NNckhwSVJ0NTZGWkdVVWdtcCs5N1dxWXNJdUFKeDU2RVRLZEFWeDZDN1J1RXRiSm9xZFRFUgpoUzR2YUdxK0VXbWpWYy9wU01iQnpaOTlscElFYnlZQmsyakQzR3BDV2dTZDlDRHJ4R1k9Ci0tLS0tRU5EIFJTQSBQUklWQVRFIEtFWS0tLS0t';

        $this->recipientEmail = !empty($recipientEmail) ? $recipientEmail : 'docusignsdktest@mailinator.com';
        $this->recipientName = !empty($recipientName) ? $recipientName : 'PHP SDK';

        $this->templateRoleName = !empty($templateRoleName) ? $templateRoleName : 'signer';
        $this->templateId = !empty($templateId) ? $templateId : 'ffae00e1-09e3-4ac3-88ca-54ab8a51beb9';

        $this->returnUrl = !empty($returnUrl) ? $returnUrl : 'https://www.docusign.com/api';

        $this->envelopeId = !empty($envelopeId) ? $envelopeId : '';
        $this->userId = !empty($userId) ? $userId : 'f6c9e287-c8b0-4064-8c3f-7130f1a9ebcf'; //can be taken from generateAccessToken returned result

        $this->brandId = !empty($brandId) ? $brandId : 'ac1881ae-9a58-4084-9062-9bd1cf80dd7e';

        $this->clientUserId = "1234";

        $decodedKey = base64_decode($this->privateKeyB64);
        file_put_contents($this->clientKey, $decodedKey);
    }

    /**
     * Gets integratorKey
     * @return string
     */
    public function getIntegratorKey()
    {
        return $this->integratorKey;
    }
  
    /**
     * Sets integratorKey
     * @param string $integratorKey
     * @return $this
     */
    public function setIntegratorKey($integratorKey)
    {
        $this->integratorKey = $integratorKey;
        return $this;
    } 

    /**
     * Gets host
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
  
    /**
     * Sets host
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    } 

    /**
     * Gets apiClient
     * @return DocuSign\Maestro\Client\ApiClient
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Sets apiClient
     * @param DocuSign\Maestro\Client\ApiClient $apiClient
     * @return $this
     */
    public function setApiClient($apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    /**
     * Gets accountId
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Sets accountId
     * @param string $accountId
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * Gets recipientEmail
     * @return string
     */
    public function getRecipientEmail()
    {
        return $this->recipientEmail;
    }
  
    /**
     * Sets recipientEmail
     * @param string $recipientEmail
     * @return $this
     */
    public function setRecipientEmail($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    } 

    /**
     * Gets recipientName
     * @return string
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }
  
    /**
     * Sets recipientName
     * @param string $recipientName
     * @return $this
     */
    public function setRecipientName($recipientName)
    {
        $this->recipientName = $recipientName;
        return $this;
    } 

    /**
     * Gets templateRoleName
     * @return string
     */
    public function getTemplateRoleName()
    {
        return $this->templateRoleName;
    }
  
    /**
     * Sets templateRoleName
     * @param string $templateRoleName
     * @return $this
     */
    public function setTemplateRoleName($templateRoleName)
    {
        $this->templateRoleName = $templateRoleName;
        return $this;
    } 

    /**
     * Gets templateId
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }
  
    /**
     * Sets templateId
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * Gets envelopeId
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelopeId;
    }

    /**
     * Sets envelopeId
     * @param string $envelopeId
     * @return $this
     */
    public function setEnvelopeId($envelopeId)
    {
        $this->envelopeId = $envelopeId;
        return $this;
    }

    /**
     * Gets createdEnvelopeId
     * @return string
     */
    public function getCreatedEnvelopeId()
    {
        return $this->createdEnvelopId;
    }

    /**
     * Sets createdEnvelopeId
     * @param string $createdEnvelopeId
     * @return $this
     */
    public function setCreatedEnvelopeId($envelopeId)
    {
        $this->createdEnvelopId = $envelopeId;
        return $this;
    }

    /**
     * Gets returnUrl
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Sets returnUrl
     * @param string $returnUrl
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    /**
     * Gets clientUserId
     * @return string
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * Sets clientUserId
     * @param string $clientUserId
     * @return $this
     */
    public function setClientUserId($clientUserId)
    {
        $this->clientUserId = $clientUserId;
        return $this;
    }

    /**
     * Gets client secret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Sets client secret
     * @param string $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * Gets client key
     * @return string
     */
    public function getClientKey()
    {
        return file_get_contents($this->clientKey);
    }

    /**
     * Sets client key
     * @param string $clientKey
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        $this->clientKey = $clientKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateKeyB64()
    {
        return $this->privateKeyB64;
    }

    /**
     * @param string $privateKeyB64
     */
    public function setPrivateKeyB64($privateKeyB64)
    {
        $this->privateKeyB64 = $privateKeyB64;
    }
    /**
     * Gets client key
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * UserId
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Gets BrandId
     * @return string
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * BrandId
     * @param string $brandId
     * @return $this
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
        return $this;
    }
}

?>
