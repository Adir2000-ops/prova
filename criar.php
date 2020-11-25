<div id="corpo">
            <h2 style="text-align: center;">Categoria</h2>
            <div>
                <form action="categoria.php" method="POST">
                    <fieldset>
                        <legend>Cadastrar Região</legend>
                        descricao
                        <input type="text" name="desc"/><br>
                        <button type="submit">Enviar</button>
                    </fieldset>
                </form>
                <?php
                require_once 'class/class_categoria.inc';   
                
                 if (isset($_GET['acao'])&& $_GET['acao']== 'deletar'){
  
                            $oCategoria = new categoria();
                            $oCategoria->setCodigo($_GET['registro']);
                            $oCategoria->delete();
  }
  
                if (isset($_POST['desc'])&& !empty ($_POST['desc'])){
                    $oCategoria = new Categoria ();
                    $oCategoria->setDescricao($_POST['desc']);
                    $oCategoria->insert();
                }
                 $oCategoria = new Categoria ();
                 Categoria::montaTabela($oCategoria->selectAll());
                ?>
            </div>
        </div>