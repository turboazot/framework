<?php

	class Pager
	{
		private $link;
		private $currentPage;
		protected function __construct()
		{

		}

		public function init_link($linkName)
		{
			$this->link = $linkName;
		}
		protected function get_total()
		{
			//Общее количество записей
		}

		protected function get_pnumber()
		{
			//Количество позиций на странице
		}

		protected function get_page_link()
		{
			//Количество ссылок слева и справа
			//от текущей страницы
		}

		protected function get_parameters()
		{
			//Дополнительные параметры, которые
			//необходимо передать по ссылке
		}

		protected function get_current_page()
		{

		}

		public function __toString()
		{
			//Строка для возвращаемого результата
			$return_page="";

			//Через GET-параметр page передается номер
			//текущей страницы
			$page = intval($this->get_current_page());
			if(empty($page)) $page=1;

			//Вычисляем число страниц в системе
			$number = (int)($this->get_total()/$this->get_pnumber());
			if((float)($this->get_total()/$this->get_pnumber())-$number != 0)
			{
				$number++;
			}

			//Проверяем, есть ли ссылки слева
			if($page - $this->get_page_link()>1)
			{
				$return_page .= "<a href={$this->link}".
				"1{$this->get_parameters()}>[1-{$this->get_pnumber()}]</a>&nbsp;&nbsp;...&nbsp;&nbsp;";
				//Есть
				for($i = $page - $this->get_page_link(); $i<$page; $i++)
				{
					$return_page .= "&nbsp;<a href={$this->link}".
					"$i{$this->get_parameters()}>[".(($i-1)*$this->get_pnumber()+1).
					"-".$i*$this->get_pnumber()."]</a>&nbsp;";
				}
			}
			else
			{
				//Нет
				for($i=1; $i<$page; $i++)
				{
					$return_page .= "&nbsp;<a href={$this->link}".
					"$i{$this->get_parameters()}>[".(($i-1)*$this->get_pnumber()+1).
					"-".$i*$this->get_pnumber()."]</a>&nbsp;";
				}
			}
			//Проверяем, есть ли ссылки справа
			if($page + $this->get_page_link() < $number)
			{
				//Есть
				for($i = $page; $i <= $page + $this->get_page_link(); $i++)
				{
					if($page == $i)
					{
						$return_page .= "&nbsp;[".
						(($i-1)*$this->get_pnumber()+1).
						"-".$i*$this->get_pnumber()."]&nbsp;";
					}
					else
					{
						$return_page .= "&nbsp;<a href={$this->link}".
						"$i{$this->get_parameters()}>[".
						(($i-1)*$this->get_pnumber()+1).
						"-".$i*$this->get_pnumber()."]</a>&nbsp;";
					}
				}
				$return_page .= "&nbsp;...&nbsp;&nbsp;".
					"<a href={$this->link}".
					"$number{$this->get_parameters()}>[".
					(($number - 1)*$this->get_pnumber()+1).
					"-{$this->get_total()}]</a>&nbsp;";
			}
			else
			{
				//Нет
				for($i = $page; $i <= $number; $i++)
				{
					if($number == $i)
					{
						if($page == $i)
							$return_page .= "&nbsp;[".
							(($i-1)*$this->get_pnumber()+1).
							"-{$this->get_total()}]&nbsp;";
						else
							$return_page .= "&nbsp;<a href={$this->link}".
							"$i{$this->get_parameters()}>[".
							(($i-1)*$this->get_pnumber()+1).
							"-{$this->get_total()}]</a>&nbsp;";
					}
					else
					{
						if($page == $i)
						{
							$return_page .= "&nbsp;[".
							(($i-1)*$this->get_pnumber()+1).
							"-".$i.$this->get_pnumber()."]&nbsp;";
						}
						else
						{
							$return_page .= "&nbsp;<a href={$this->link}".
							"$i{$this->get_parameters()}>[".
							(($i-1)*$this->get_pnumber()+1).
							"-".$i*$this->get_pnumber()."]</a>&nbsp;";
						}
					}
				}
			}
			return $return_page;
		}
	}
?>