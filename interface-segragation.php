<?php
// Принцип разделения интерфейсов гласит о том что лучше создавать много небольший интерефейсов, чем несколько больший
interface Worker {
	public function takeBreak();
	public function writeCode();
	public function callToClient();
	public function attendMeetings();
	public function getPaid();
}
//
interface WorkerI {
	public function takeBreak();
	public function getPaid();
}

interface Coder {
	public function code();
}

interface ClientFacer {
	public function callToClient();
	public function attendMeetings();
}
