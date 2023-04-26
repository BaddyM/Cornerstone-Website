<?php 

    function notice_board($event_date, $event_text){
        $elements = '
        <div class="card-body d-flex ">
            <span class="btn bg-warning text-dark fw-bold fs-5 rounded-pill">'.$event_date.'</span>
            <span>
                <div class="text-primary ms-3">'.$event_text.'</div>
            </span>
        </div>
        ';

        echo $elements;
    }

?>