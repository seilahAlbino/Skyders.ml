<?php
function thumb($file){
    $caminho = "$file";
    if(is_null($file) || !file_exists($caminho)){
        return "images/indisponivel.png";
    }else{
        return $caminho;
    }
}

function msg_sucesso($m){
    $resp = "<div class='sucesso'><span class='material-icons'>check</span>$m</div>";
    return $resp;
}

function msg_aviso($m){
    $resp = "<div class='aviso'><span class='material-icons'>info</span>$m</div>";
    return $resp;
}

function msg_erro($m){
    $resp = "<div class='erro'><span class='material-icons'>error</span>$m</div>";
    return $resp;
}

function modal($title, $description,$ultimateButton){
    $modal = "
      <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
        <div class='modal-header'>
            <h5 class='modal-title w-100 text-center' id='exampleModalLabel'>$title</h5>
            <button type='button'class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
        $description
        </div>
        <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            $ultimateButton
        </div>
        </div>
    </div>
    </div>";

    return $modal;
}