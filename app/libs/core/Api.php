<?php
class Api
{
    private $allowedTypes = array('email');

    /*
     * Email:send
     */
    private $REFields = array("name", "email", "phoneNumber", "website", "aboutYouAndProject");

    /*
     * __construct
     * ----
     * This will initialize what type of api call it is, what method to call and include other options
     */
    public function __construct($type, $method, $data, $options = '')
    {
       if(!empty($type) && !empty($method) && !empty($data))
       {
            if(in_array($type, $this->allowedTypes))
            {
                $this->$type($method, $data);
                return false;
            }else{
                echo json_encode(array('status' => 'Invalid Request123', 'code' => 0));
                http_response_code(200);
            }
       }else{
           echo json_encode(array('status' => 'Invalid Reques2t', 'code' => 0));
           http_response_code(200);
       }
    }
    
    /*
     * Emailing
     * ----
     * This will hold the system for api calls when it comes to authorization:
     * - Send hire email
     */
    protected function email($method, $data = array())
    {
        if(!empty($method))
        {
            // Now run through the different methods
            switch($method)
            {
                case 'send':
                    if($data != "")
                    {
                        // Make sure the right fields are present
                        $count = 0;
                        $methodData = array();

                        foreach ($data as $info=>$val)
                        {
                            if(in_array($info, $this->REFields))
                            {
                                // Method Data
                                $methodData[$info] = $val;
                                $count++;
                            }
                        }

                        if($count == 5)
                        {
                            // Now call the function
                            $email = new Emailer();
                            $email->$method($methodData);
                        }else{
                            echo json_encode(array('status' => 'Invalid Request11', 'code' => 0));
                            http_response_code(200);
                        }
                    }
                    break;
                default:
                    echo json_encode(array('status' => 'Invalid Request22', 'code' => 0));
                    http_response_code(200);
                    break;
            }
        }else{
            echo json_encode(array('status' => 'Invalid Request33', 'code' => 0));
            http_response_code(200);
        }
    }
}