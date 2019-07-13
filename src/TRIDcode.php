<?php
	class TRIDcode {
		protected $hash = "5ca17b85ce10702fd5ce8f63a5657905ae8ba41c7b7a886e8d13b317386dda06"; //for example
		
		/**
		* Инициализирует новый TRID код
		* @param string $hash
		*/
		public function __construct($hash = "") {
			//TODO: проверку на hex
			if(empty($hash) || strlen($hash) != 64) {
				throw new \Exception('Invalid hash');
			}
		}
		
		/**
		* Отрисовывает PNG изображение с кодом
		* @return mixed
		*/
		public function render() {
			//
		}
	}
	