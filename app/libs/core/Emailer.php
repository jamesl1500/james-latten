<?php

class Emailer
{
    /*
     * ToEmail
     * ----
     * This will be the primary email that emails will be sent to when a potential client uses the hire me modal
     */
    private $toEmail = "james@sitelyftstudios.com";

    /*
     * Bcc
     * ----
     * The secondary email its gonna be sent to
     */
    private $BccEmail = "codetastic2@gmail.com";

    static public function Email($data = array())
    {
        if (!empty($data)) {
            $to = $data['to'];
            $subject = Validation::santitize($data['subject']);
            $body = $data['body'];
            $db = new Database;

            // Additional headers
            $headers = 'To: <' . $to . '>' . "\n";
            $headers .= 'From: ' . SITE_NAME . ' <james@' . SITE_NAME . '.com>' . "\n";
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1";

            // Send the messages
            if (mail($to, $subject, $body, $headers)) {
                $insert = $db->prepare("INSERT INTO emails_sent VALUES('','{$to}','{$subject}')");
                $insert->execute();
            }
        }
    }

    public function send($data = array())
    {
        if(!empty($data)) {
            $fromName = $data['name'];
            $fromEmail = $data['email'];

            $fromWebsite = $data['website'];
            $fromPhoneNumber = $data['phoneNumber'];

            $fromAboutProject = $data['aboutYouAndProject'];

            $body = 'Potential Client Name: ' . $fromName . '<br>';
            $body .= 'Potential Client Email: ' . $fromEmail . '<br><br>';
            $body .= 'Potential Client Website: ' . $fromWebsite . '<br>';
            $body .= 'Potential Client Phone Number: ' . $fromPhoneNumber . '<br><br>';
            $body .= 'Message from client: <br>' . $fromAboutProject;

            $header = "To: James Latten(Sitelyft) <".$this->toEmail.">\r\n" .
                "From: ".$fromName." <".$fromEmail.">\r\n" .
                "cc: James Latten(Personal) <".$this->BccEmail.">\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/html; charset=ISO-8859-1\r\n" .
                "X-Mailer: PHP/" . phpversion();

            if(mail($this->toEmail, 'New Potential Client!', $body, $header))
            {
                $data['code'] = 1;
                $data['status'] = "Thanks! I'll be in touch shortly.";
                echo json_encode($data);
                return false;
            }else{
                $data['code'] = 0;
                $data['status'] = "Oops! Try that again please.";
                echo json_encode($data);
                return false;
            }
        }
    }
}

?>