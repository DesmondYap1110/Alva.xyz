<?php

function buttonstatus($data)
{
    if($data==1)
    {
        echo "checked";
    }
}

function alerteditmessage()
{
    if (isset($_GET['infoedit'])) 
    { 
        $ms = $_GET['infoedit']; 
        if ($ms == 'succ') 
        { 
            echo
            "
            <div class='alert alert-success' role='alert'>
                <p class='alert-heading'>Member's Info successfully edited.</p>
            </div>
            "
            ;
       }
     } 
}

function alertinvalidmessage()
{
    if (isset($_GET['process'])) 
    {
        $ms = $_GET['process']; 
        if ($ms == 'invalid') 
        {
            echo
            '
            <div class="alert alert-danger" role="alert">
                <p class="alert-heading">Process Invalid.</p>
            </div>
            ';
         } 
    } 
}

?>