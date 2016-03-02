<?php
class DbSQLite3Test{

    public static function sqllite3test(){
        // if database is not exist create new database with name testdb
        $db = new SQLite3('testdb.sqlite');

        $db->exec("CREATE TABLE IF NOT EXISTS  foo(id INTEGER PRIMARY KEY, name CHAR(255));
		 INSERT INTO foo (name) VALUES('Ilia');
         INSERT INTO foo (name) VALUES('Ilia2');
         INSERT INTO foo (name) VALUES('Ilia3');
         ");

        $stmt = $db->prepare('SELECT * FROM foo WHERE id>:idlimit');

        $stmt->bindValue(':idlimit', 3, SQLITE3_INTEGER);

        $result = $stmt->execute();

        while ($row = $result->fetchArray()) {

            //var_dump($row);
            //var_dump($row);
            //var_dump($row);
          //  git add .
            //var_dump($row);

            echo("Id: ".$row['id']." Name: ".$row['name']."<br>\n");

        }

    }
}
DbSQLite3Test::sqllite3test();

?>