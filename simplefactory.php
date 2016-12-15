<?php //

/* 
 * Criar uma classe geral onde esta classe instancia outras classes para o programador
 */

class Postagens
{
     private $author;
     private $message;
     public function getMessage()
     {
         return $this->message;
     }
     public function setMessage($message)
     {
         $this->message = $message;
     }
     public function getAuthor()
     {
         return $this->author;
     }
     public function setAuthor($author)
     {
         $this->author = $author;
     }
}
class facebook
{
    public function createPosts()
    {
        return new Postagens();
    }
}


