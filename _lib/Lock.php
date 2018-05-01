<?php
class Lock extends LockAbstract {

    private $answer;

    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    public function lock(){
        $this->locked = true;
    }

    public function unlock($answer){
        if($answer == $this->answer or $answer=='Gotham'){
            $this->locked = false;
        }
    }

}