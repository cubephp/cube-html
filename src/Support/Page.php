<?php

namespace Cube\Html\Support;

use \Cube\Html\Factory\HtmlFactory;
use \Cube\Html\ElementInterface;

class Page
{
	protected $head;
	protected $body;
	protected $data = [];
	protected $htmlFactory;

	public function __construct($head = null, $body = null)
	{
		$head !== null ? $this->setHead($head) : null;
		$body !== null ? $this->setBody($body) : null;
	}

	public function setHtmlFactory(HtmlFactory $htmlFactory)
	{
		$this->HtmlFactory = $htmlFactory;
	}

	public function getHtmlFactory()
	{
		if ($this->htmlFactory === null) {
			$this->htmlFactory = new HtmlFactory;
		}

		return $this->htmlFactory;
	}

	public function data($type = null)
	{
		if ($type === null) {
			return $this->data;
		} elseif (is_string($type) && isset($this->data[$type])) {
			return $this->data[$type];
		} elseif (is_array($type)) {
			$this->data = array_merge($this->data, $type);
		} else {
			throw new InvalidArgumentException('must be array, null or valid data key');
		}

		return $this;
	}

	public function __toString()
	{
		$str = HtmlFactory::start();
		$str = $str . $this->head;
		$str = $str . $this->body;
		$str = $str . HtmlFactory::end();
		
		return $str;
	}
 
	public function setHead($head)
	{
		if (is_string($head)) {
			$head = $this->getPart($head);
		}

		if (!$head instanceOf ElementInterface || $head->getName() !== 'head') {
			throw new \InvalidArgumentException('must be head element');
		}

		$this->head = $head;
		return $this;
	}

	public function setBody($body)
	{
		if (is_string($body)) {
			$body = $this->getPart($body);
		}

		if (!$body instanceOf ElementInterface || $body->getName() !== 'body') {
			throw new \InvalidArgumentException('must be body element');
		}

		$this->body = $body;
		return $this;
	}

	public function getPart(string $part)
	{
		if (!isset($this->data['html'])) {
			$this->data['html'] = $this->getHtmlFactory();
		}

		extract($this->data);
		return include $part;
	}
}