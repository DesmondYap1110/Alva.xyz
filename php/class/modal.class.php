<?php
//Class For Perform Action
class Modal
{
    private $modalid;
    private $idvalue;
    private $title;
    private $description;
    private $name;
    private $tbname;
    private $dbconn;
    
    
    function __construct($modalid , $title , $description , $name , $tbname , $dbconn)
    {
        $this -> modalid = $modalid;
        $this -> title = $title;
        $this -> description = $description;
        $this -> name = $name;
        $this -> tbname = $tbname;
        $this -> dbconn = $dbconn;
    }
    
    public function createModal($idvalue)
    {
        $this -> idvalue = $idvalue;
        $Modal = 
        '
            <div id="'.$this->modalid.''.$this -> idvalue.'" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                    <div class="modal-content" id="md-content">
                        <form method="POST" action="" name="'.$this->name.'_form">
                            <div class="modal-header">
                                <p id="modal-title">'.$this->title.'</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div id="modal-div">
                                <p id="modal-p" style="text-align: left;">Are you sure you want to '.$this->description.'</p>
                            </div>
                            <div id="modal-btn-div">
                                <a href="javascript:void(0);" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                <input type="hidden" name="id" value="'.$this->idvalue.'">
                                <input type="hidden" name="'.$this->name.'" value="'.$this->name.'_form">
                                <button id="general-btn" class="btn1">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ';
        
        echo $Modal;
        
    }
    
    public function UpdateAction($pk, $statusname, $status , $url ,$action)
    {
        if(isset($_POST[$this->name]) && ($_POST[$this->name] == $this->name.'_form'))
        {
            $id = mysqli_real_escape_string($this->dbconn, $_POST['id']);

            $update = " UPDATE `$this->tbname` SET $statusname = $status WHERE $pk = '$id' ";
            $result = mysqli_query($this->dbconn, $update) or die(mysqli_error($this->dbconn));
            
            if($action=='U')
            {
                 $togo = "$url?update=succ";
            }
            elseif($action=='D')
            {
                $togo = "$url?delete=succ";
            }
            else
            {
                $togo = "$url?wrongaction";
            }
            header(sprintf("Location: %s",$togo));
        }
    }
    
    public function DeleteAction($pk,$url)
    {

        if(isset($_POST[$this->name]) && ($_POST[$this->name] == $this->name.'_form'))
        {
            $id = mysqli_real_escape_string($this->dbconn, $_POST['id']);

            $delete = "DELETE FROM $this->tbname WHERE $pk = '$id' ";
            $result = mysqli_query($this->dbconn, $delete) or die(mysqli_error($this->dbconn));
            
            $togo = "$url?delete=succ";
            header(sprintf("Location: %s",$togo));
        }
    }
}
?>
