<?php

class pagesController
{
	public function home()
	{
		//controller domain
		require "views/index.view.php"; //HTML stuff
	}

	public function groceries()
	{
		require "views/groceries.view.php"; //HTML stuff
	}

	public function delGrocery()
	{
		$connection2 = connection::make($config['database']);
		$query2 = new makeQuery($connection);

		//deletes the selected name from the database table
		$query2->deleteGrocery(ucfirst(strtolower($_REQUEST['deleteName'])));

		//Returns to the groceries page
		header('Location: /groceries');
	}

	public function insGrocery()
	{
		$connection2 = connection::make($config['database']);
		$query2 = new makeQuery($connection);

		//inserts a new item in the database table.
		$query2->insertGrocery(ucfirst(strtolower($_REQUEST['insertName'])), $_REQUEST['insertPrice']);

		//Returns to the groceries page
		header('Location: /groceries');
	}

	public function upGrocery()
	{

		$connection2 = connection::make($config['database']);
		$query2 = new makeQuery($connection);

		//Updates the selected name in the database table to a new price.
		$query2->updateGrocery(ucfirst(strtolower($_REQUEST['updateName'])), $_REQUEST['updatePrice']);

		//Returns to the groceries page
		header('Location: /groceries');
	}

	public function testPage()
	{
		require "views/test.view.php"; //HTML stuff
	}
}