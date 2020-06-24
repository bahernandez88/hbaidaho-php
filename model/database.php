<?php
class Database {
    private static $dsn = 'mysql:host=pdb43.awardspace.net;dbname=3249449_applications';
    private static $username = '3249449_applications';
    private static $password = 'JulyFourteen88**';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/error_db.php');
            }
        }
        return self::$db;
    }
}
?>