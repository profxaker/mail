<?php
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
		mail($this->email, $this->subject, $this->text);
	}
	
	// Валидация входящих данных
	private function validate() {
		
	}
}

$mail = new MailSend();
$mail->addEmail('profxaker@mail.ru');
$mail->addSubject('Title message');
$mail->addText('Text message');
$mail->send();
?>