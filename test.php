<?php 
//============================ Single Resposibility Priciple =======================================================
//--------------------------------------- this Miler not following Singgle Responsibility Principle ------------------------
class Mailer{
     function sendMail($to, $from, $subject, $message, $attachment){

     }
     function connectMta($mtatype, $username, $password){

     }
     function PreparMail($to, $from, $subject, $message){

     }
     function Dispatch(){

     }
}
class Bettermailer{
     function __construct( $mgatewayInterface,  $mailInterface, $attachmentInterface){
          $this->mgatewayInterface = $mgatewayInterface;
          $this->mailInterface = $mailInterface;
          $this->attachmentInterface = $attachmentInterface;
     }

     function sendMail($to, $from, $subject, $message, $attachment){
          $this->mail->prepare($to, $from, $subject, $message, $attachment);
          $this->mg->connect();
          $this->mg->sendMail();
     }
}