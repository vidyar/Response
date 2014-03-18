<?php

namespace Shale\Response\Factories
{
  use Shale\Response\Contracts\ResponseInterface;
  use Symfony\Component\HttpFoundation\Response;

  abstract class ResponseFactoryBase implements ResponseInterface
  {
    /**
    * Status code 200
    * SHOULD have a entity
    */    
    public function ok()
    { 
        $this->methodNotImplemented();
    } 

    /** 
    * Status code 201
    * SHOULD have an entity
    * origin server MUST create the resource
    * SHOULD have Header field Location of the created resource 
    */
    public function created()
    { 
        $this->methodNotImplemented();
    } 

    /** 
    * Status code 202
    * SHOULD include indication of the request's current state
    */    
    public function accepted()
    { 
        $this->methodNotImplemented();
    }

    /**
    * Status code 204
    * MUST NOT have a message body
    */
    public function noContent()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 301
    */
    public function movedPermantently()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 302
    */
    public function found()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 303
    */
    public function seeOther()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 400
    */
    public function badRequest()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 401
    */
    public function unauthorized()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 403
    */
    public function forbidden()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 404
    */
    public function notFound()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 405
    */
    public function methodNotAllowed()
    {
        $this->methodNotImplemented();
    }

    /**
    * Status code 406
    * AKA: The Earl of Lemongrab
    */
    public function notAcceptable()
    {
        $this->methodNotImplemented();

            /*,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,::=+I+++++++++=?:=77$$$$$$$$????????+
            ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:=+??+===++++++++++=?=,:I$7$$$$$7$I??????+
            ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:+??+===+++++++++++++=?I:,~77$$$$$$$$??????+
            ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:+I?===++++++++++++++++++++=+I~:I$7$$$$$7$I????+
            ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,~??==++++++++++++++++++++++++=+?~~77$$$$$$$$????+
            ,,,,,,,,,,,,,,,,,,,,,,,,,,,,:??==+++++++++++++++++++++++++++++=+?:I$7$$$$$$$I??+
            ,,,,,,,,,,,,,,,,,,,,,,,,,,,~?+=++++++++++++++++++++++++++++++++=?+~77$$$$$$$$??+
            ,,,,,,,,,,,,,,,,,,,,,,,,,~I+=+++++++++++++++++++++++++++++++++++++?~777$$$$$$$?+
            ,,,,,,,,,,,,,,,,,,,,,,,:I+=+++++++++++++++++++++++++++++++++++++++=I~?$7$$$$$$$?
            ,,,,,,,,,,,,,,,,,,,,,,,?+=++++++++++++++++++++++++++++++++++++++++=++~777$$$$$$I
            ,,,,,,,,,,,,,,,,,,,,,~I==++++++++++++++++++++++++++++++++++++++++++=++~77$$$$$$7
            ,,,,,,,,,,,,,,,,,,,,:?+=++++++++++++++++++++++++++++++++++++++++++++=I:+$7$$$$$7
            ,,,,,,,,,,,,,,,,,,,:?==+++++++++++++++?++++++++++++++++++++++++++++++++:+77$$$$7
            ,,,,,,,,,,,,,,,,,,,++=++++++++++++++++??+++++++++++++++++++++++++++++=?~:I7$$$$7
            ,,,,,,,,,,,,,,,,,,?+=+++++++++++++++++++I++++++++++++++++++++++++++++=++::I77$$7
            ,,,,,,,,,,,,,,,,,?+=++++++++++++++++++++++++++++++++++++++++++++++++++=?~,:I7$$7
            ,,,,,,,,,,,,,,,:~?=++++++++++++====++++++++++++++++++++++++++?I++++++++?=,,=$$$7
            ,,,,,,,,,,,,,,,:?=++++++++=+?+~::::=?+=++++++++++++++++++++?+++++++++++=+::,+$77
            ,,,,,,,,,,,,,,,=?=+++++++=??:,......:+?=+++++++++++++++++++++++++++++++=?~:,:777
            ,,,,,,,,,,,,,,~I=++++++=?=,............=+=+++++++++++++++++++++++++++++=?~,,,~77
            ,,,,,,,,,,,,,,+?=+++++++=,.........+I..,?=+++++++++++++++++++++++++++++=+~,,,,?7
            ,.,,,,,,,,,,,~I=++++++++~..........DM,..:?=+++++++++++++++=++?I?+=+++++=?=,,,,:?
            ?,,,,,,,,,,,,?+++++++++=++,.......ZMN:..:?=++++++++++++=+?~,....,:?+=++=?=,,,,,,
            +~=:,,,,,,,,:?=+++++++++=+=,.....:MMD,.,~+=+++++++++++=?+,........,++=+=?=,,,,,,
            ==??,,,,,,,,++=+++++++++++=+?+~,=MMMI~+?+=++++++++++=++,.......+:...=+==+~,,,,,,
            =+7I=,,,,,,:?==++++++++++++==++?$OOOI?+=+++??=+++++??+:.......,N$...:?==?~,,,,,,
            ?=?+,,,,,,,~?=++++++++++++++++++++=++++++++++I+++++++I,.......=MO...:?==+:,,,,,,
            ==?::,,,,,,=?=++++++++++++++++++++++++++++++=+I+++++=++.......7MZ...:+=++,,,,,,.
            I:,,,,,,,,,+++++++++++++++++++++++++++++++++++=?I=++++=?~....+MM+..:?+=?=,,,,,+$
            ,.,,,,,,,,:++++++++++++++++++++++++++++++++++++==I?=+++=+I?=IMM8=?+===+?:,~$88OO
            ,,,,,,,,,,:?+++++++++++++++++++++++++++++++++????=??=+++=??=????+==++=+=,?O8OOOO
            ,,,,,,,,,,:?+++++++++++++++++++++++++++++++=++?+==?I7?=++++I+=+++++++=IO8OOOOOOO
            ,,,,,,,,,,:?=++++++++++++++++++++++++++++==?++?~?I==II?=++=+I+++++++==O8OOOOOOOO
            ,,,,,,,,,,:?=++++++++++++++++++++++++++==8N?IO=7=.+I=I+?I+++=?I++++==Z8OOOOOOOOO
            ,,,,,,,,,,:?++++++++++++++++++++++++++==ONNNNNNDZ$+~++I=?I+=+=?I+++=+O8OOOOOOOOO
            ,.,,,,,,,,,?+++++++++++++++++++++++++==NMDDDDND8D8DNZ=??==+I?=+=?I==Z8OOOOOOOOOO
            OO88O$?,,,,+++++++++++++++++++++++++=+NMMDDDDND8D88DO=+I++++=?I+==?Z8OOOOOOOOOOO
            OZZOOO8$~,,+++++++++++++++++++++++++=7MMMDDDDND8D88DZ=+I+++++=+I?==I88OOOOOOOOOO
            OOOOOOOOOO~=?=+++++++++++++++++++++==NMMNDDDDDD8DD8D7=??++++++++=?$=~?88OOOOOOOO
            8OOOOOOOO8$~?=+++++++++++++++++++++=?MMMNDNDDD8DDD8D?=??++++++++=7DO?~+O8OOOOOOO
            =?8OOOOOOOOOI=+++++++++++++++++++++=IONNDNNDND8DDDDO=+I++++++++=$8OO8887?ZOOOOOO
            +=$8OOOOOOO8O==++++++++++++++++++++=IZZNNNDND888DDD7=?I=++++++=?88OOOO88OZD8OOOO
            ++=78OOOOOOODZ==+++++++++++++++++++=IO$ZNNND888D8DZ==I+++++++=I88OOOOOOOOOOOOOOO
            +++=IDOOOOOOODDI=++++++++++++++++++++ZZZOOZO8DDDDO==I+++++++=$8O888888OOOOOOOOOO
            +++==O8OOOOOO888?=++++++++++++++++++=7Z$$$$$$8DD8+=?I=+++++=+8D88888888OOOOOOOOO
            ++++=?8OOOOOOOOO887==++++++++++++++??=IOZZZ$$8DI==I?+++++==$DOOOOOOOOOO88OOOOOOO
            ++++++OOOOOOOOOOOODZ+==+++++++++++++I+=IZZZZO8?==I?=+++++=?8OOOOOOOOOOOO8OOOOOOO
            +++++=I8OOOOOOOOOOOOO8OI===+++++++++++II+====+II?=+++++==Z8OOOOOOOOOOOOOO8OOOOOO
            +++++=+8OOOOOOOOOOOOOO88ZI===+++++++++=?II??II?++++++++=78OOOOOOOOOOOOOOO8OOOOOO
            ++++++=Z8OOOOOOOOOOOOOOOOO888Z7+====++++++++++++++===+I8OOOOOOOOOOOOOOOOO8OOOOOO
            ++++++=78OOOOOOOOOOOOOOOOOOOO888O$I?++++++++++++++?7ZO8OOOOOOOOOOOOOOOOO88OOOO*/        
    }

    /**
    * Status code 500
    */
    public function internalServerError()
    {
        $this->methodNotImplemented();
    }
                                                             
    private function methodNotImplemented()
    {
        throw new MethodNotImplementedException();
    }

    protected function send($message, $status, array $headers = array())
    {
      return new Response($message, $status, $headers);
    }
  }
}
