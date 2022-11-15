<?php

include_once '../helpers/tutorBean.php';
include_once '../model/tutorModel.php';

$op = $_GET['operacao'];

if($op == "deletar_tutor"){
    $MATRICULA = $_GET['MATRICULA'];

    $t_bean = new tutorBean(NULL,NULL,NULL,NULL,NULL,NULL);
    $t_bean->MATRICULA = $MATRICULA;

    $t_model = new tutorModel();
    $v2 = $t_model->deletar_tutor($t_bean);

    if($v2){
        ?>
        <script type="text/javascript">
            alert("Remoção realizada!");
            window.location="../view/tutores.php";
        </script>
    <?php
    }
    else { ?>
      <script type="text/javascript">
            alert("Problema na remoção! Contate o ADM!");
            window.location="../view/tutores.php";
        </script>
    <?php
    }
}

    

if($op == "atualizar_tutor"){
    $nomecompleto = $_POST['nomecompleto'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $numerotelefone = $_POST['numerotelefone'];
    $senha = $_POST['senha'];
    $materia = $_POST['materia'];

    $t_bean = new tutorBean($matricula, $email, $senha, $nomecompleto, $numerotelefone, $materia);
    $t_model = new tutorModel();
    $v4 = $t_model->atualizar_tutor($t_bean);

   
    
}

?>