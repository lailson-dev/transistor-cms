<?php

require_once 'Connection.php';

class Crud extends Connection
{
	private $id;
	private $title;
	private $description;
	private $emailReceiver;
	private $backgroundImage;
	private $imageGame;

	private $order = '';
	private $where = ' WHERE ';

	public function setId($id){$this->id = $id;}
	public function setTitle($title){$this->title = $title;}
	public function setDescription($description){$this->description = $description;}
	public function setEmailReceiver($emailReceiver){$this->emailReceiver = $emailReceiver;}
	public function setBackgroundImage($backgroundImage){$this->backgroundImage = $backgroundImage;}
	public function setImageGame($imageGame){$this->imageGame = $imageGame;}

	public function insertSpotlight()
	{
		$sql = "INSERT INTO spotlight_game (background_image, game_title, game_image, game_description) VALUES (:background_image, :game_title, :game_image, :game_description)";
		$stmt = Connection::prepare($sql);
		$stmt->bindParam(':background_image', $this->backgroundImage);
		$stmt->bindParam(':game_title', $this->title);
		$stmt->bindParam(':game_image', $this->imageGame);
		$stmt->bindParam(':game_description', $this->description);
		
		return $stmt->execute();
	}

	public function insertGame()
	{
		$sql = "INSERT INTO games (game_image, game_description) VALUES (:game_image, :game_description)";
		$stmt = Connection::prepare($sql);
		$stmt->bindParam(':game_image', $this->imageGame);
		$stmt->bindParam(':game_description', $this->description);
		
		return $stmt->execute();
	}

	public function insertContact()
	{
		$sql = "INSERT INTO form_contact (form_title, form_description, form_email_receiver) VALUES (:form_title, :form_description, :form_email_receiver)";
		$stmt = Connection::prepare($sql);
		$stmt->bindParam(':form_title', $this->title);
		$stmt->bindParam(':form_description', $this->description);
		$stmt->bindParam(':form_email_receiver', $this->emailReceiver);
		
		return $stmt->execute();
	}

	public function insertMessage()
	{
		$sql = "INSERT INTO messages (message_name, message_email, message_text) VALUES (:message_name, :message_email, :message_text)";
		$stmt = Connection::prepare($sql);
		$stmt->bindParam(':message_name', $this->title);
		$stmt->bindParam(':message_email', $this->emailReceiver);
		$stmt->bindParam(':message_text', $this->description);
		
		return $stmt->execute();
	}

	public function updateContact()
	{
		$sql = "UPDATE form_contact SET form_title = :form_title, form_description = :form_description, form_email_receiver = :form_email_receiver WHERE id = :id";
		$stmt = Connection::prepare($sql);
		$stmt->bindParam(':form_title', $this->title);
		$stmt->bindParam(':form_description', $this->description);
		$stmt->bindParam(':form_email_receiver', $this->emailReceiver);
		$stmt->bindParam(':id', $this->id);
		
		return $stmt->execute();
	}

	public function deleteMessage()
	{
		$sql = "DELETE FROM messages WHERE id = :id";
		$stmt = Connection::prepare($sql);
		$stmt->bindParam(':id', $this->id);
		
		return $stmt->execute();
	}

	public function read($table, $condition = false, $order = false)
	{
		if($order)
			$this->order = ' ORDER BY ID ASC LIMIT 1';

		$sql = "SELECT * FROM `{$table}`{$this->order}";
		$stmt = Connection::prepare($sql);
		$stmt->execute();

		if($condition)
			return $stmt->fetchAll();

		return $stmt->fetch();
	}

	public function readOne($table, $where, $condition, $value)
	{
		$this->where .= $where;

		$sql = "SELECT * FROM `{$table}`{$this->where} {$condition} {$value}";		
		$stmt = Connection::prepare($sql);
		$stmt->bindParam(":{$this->where}", $value);
		$stmt->execute();

		return $stmt->fetch();
	}
}