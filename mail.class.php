<?php
/**
 * @author  Andrey Kovalchuk
 * @copyright 2015
 */
class MailSend {
	private $email; // Адресс
	private $subject; // Тема
	private $text; // Текст сообщения
	
	// Добавляем адресс
	public function addEmail($email) {
		$this->email = $email;
	}
	
	// Добавляем тему
	public function addSubject($subject) {
		$this->subject = $subject;
	}
	
	// Добавляем текст
	public function addText($text) {
		$this->text = $text;
	}
	
	// Отправка
	public function send() {
		if (!$this->validate()) return false;		
		return mail($this->email, $this->subject, $this->text);
	}
	
	// Валидация входящих данных
	private function validate() {
		// Валидация адреса
		return filter_var($this->email, FILTER_VALIDATE_EMAIL);
	}
}

$mail = new MailSend();
$mail->addEmail('profxaker@mail.ru');// Добавляем адресс
$mail->addSubject('Title message'); // Добавляем тему
$mail->addText('Text message'); // Добавляем текст

if ($mail->send()) {
	echo 'Отправлено успешно!';
} else {
	echo 'Не удалось отправить!';
}
?>