<?php
function __autoload($class){require_once "{$class}.class.php";}

abstract class ConDB{
    private static $cnx;
    private function setConn()
    {

        return
        is_null(self::$cnx)?
                self::$cnx=new PDO("mysql:host=localhost;dbname=dipoteacai", "Admin", "admin"):
                self::$cnx;
    }
    public function getConn()
    {return $this->setConn();}
}

/*
 * crud delete
 *
$crud=new CRUD;
$crud->delete('user','WHERE idUser=?',array(18));

#ref=https://www.youtube.com/watch?v=WC9VKiDclpE&index=11&list=PL_OD25EBevLP2-1XT6fzHCJM7XV1bsMcW
*/




/*
 * crud update
 *
$crud=new CRUD;
$upd=$crud->update(
                    'user','user=?, email=?, cidade=? WHERE idUser=?',
                    array('Claudia Sirqueira de Brito Silva','claudinhayeshua@hotmail.com','Contagem',3)
                    );
var_dump($upd->rowCount());

print $upd->rowCount()<1?'não há atualizações a fazer':'atualização realizada';

#ref=https://www.youtube.com/watch?v=MpdHnaELPzU&list=PL_OD25EBevLP2-1XT6fzHCJM7XV1bsMcW&index=10
*/



/*
 * crud select
 *
$crud=new CRUD;
$sel=$crud->select('*', 'user', 'WHERE idUser=?',array(3));
foreach($sel as $reg)
{
    $SESSION['user']=$reg;
}

var_dump($SESSION['user']['email']);

#ref= https://www.youtube.com/watch?v=Lif3-UCunS0&list=PL_OD25EBevLP2-1XT6fzHCJM7XV1bsMcW&index=9
*/



/*
 * crud insert
 *
$crud=new CRUD;
$crud->insert('user','user=?, email=?, cidade=?',array('nomeDoUsuário','teste@hotmail.com', 'cidadeDeDeus'));

#ref=https://www.youtube.com/watch?v=SehEQ04RjOc&list=PL_OD25EBevLP2-1XT6fzHCJM7XV1bsMcW&index=8
*/