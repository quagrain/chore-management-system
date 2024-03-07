<?php


/**
 * A dialog box for text display. Exits when you click outside the dialog box.
 * @param $display string content of the dialog box.
 * @param $location string the file to redirect to when the user clicks outside the dialog box.
 * @return string
 */
function dialogBox($display, $location)
{
    return "<dialog id='d'><div id='myDiv'>$display</div></dialog>
    <script>
        d.showModal();
        const D = document.getElementById('d');
        const myDiv = document.getElementById('myDiv');
    
        D.addEventListener('click', function (){
            D.close();
            window.location.href='$location';
        });
        myDiv.addEventListener('click', (event)=> event.stopPropagation());
    </script>";
}