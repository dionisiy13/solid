<?php
// Принцип инверсии зависимостей предполагает, что код должен зависеть от абстрактных классовю
// Цель инверсии зависимостей состоит в том чтобы создать связь класса с чем-то абстрактным,
// а не конкретным, даже если очевидно, что на каком-то этапе придеться создать конкретный обьект.
// Поэтому единственной простой целью ставим создание конкретного обьекта (с помощью ключевого слова new)
// вверх по цепочке как можно дальше как, например в index.php. Всегда оценивай обстановку когда видишь ключевое слово new.
class MySqlConnectionOld {
	public function connect() {}
}

class PageLoader {
	private $dbConnection;
	public function __construct(MySqlConnectionOld $dbConnection) {
		$this->dbConnection = $dbConnection;
	}
}

// index.php

new PageLoader(new MySqlConnectionOld());

////
interface DbConnectionInterface {
	public function connect();
}

class MySqlConnection implements DbConnectionInterface {
	public function connect() {}
	public function select() {}
}

class MongoDbConnection implements DbConnectionInterface {
	public function connect() {}
	public function select() {}
}

class PageLoader2 {
	private $dbConnection;
	public function __construct(DbConnectionInterface $dbConnection) {
		$this->dbConnection = $dbConnection;
	}
}

// index.php
new PageLoader2(new MySqlConnection());
