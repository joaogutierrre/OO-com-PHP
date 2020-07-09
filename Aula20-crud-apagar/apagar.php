    <?php

    /**
     * Description of apagar
     *
     * @copyright (c) year, João Vítor Gutierre - slaythemgods
     */
    session_start();
    require './Conn.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if(!empty($id)):
        $conn = new Conn;
        $result_user = "DELETE FROM gutierre.usuarios WHERE id = :id";

        $resultado_del_user = $conn->getConn()->prepare($result_user);

        $resultado_del_user->bindParam(':id', $id);
        
        if($resultado_del_user->execute()):
            $_SESSION['msg'] = "<p style='color:green;'>Registro apagado com sucesso.</p>";
            header("Location:index.php");
        else:
            $_SESSION['msg'] = "<p style='color:red;'>Falha ao apagar registro.</p>";
            header("Location:index.php");
        endif;
    else:
        $_SESSION['msg'] = "<p style='color:red;'>Registro não encontrado.</p>";
        header("Location:index.php");
    endif;