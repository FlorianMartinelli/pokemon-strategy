<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Layout
{
	private $CI;
	private $var = array();

	/** 
	 * Construct
	 */
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->var['output'] = '';

		// Title = ControlerName - MethodName
		$this->var['title'] = ucfirst($this->CI->router->fetch_class()) . ' - ' . ucfirst($this->CI->router->fetch_method());

		// Charset = same as config.php
		$this->var['charset'] = $this->CI->config->item('charset');

		$this->var['css'] = array();
		$this->var['js'] = array();
	}

	/**
	 * Method : view
	 */
	public function view($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);

		$this->CI->load->view('../views/layout', $this->var);
	}

	/**
	 * Method : views
	 */
	public function views($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);

		var_dump($this);
		return $this;
	}

	/**
	 * Method : set_title
	 */
	public function set_title($title)
	{
		if(is_string($title) && !empty($title))
		{
			$this->var['title'] = $title;
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Method : set_charset
	 */
	public function set_charset($charset)
	{
		if(is_string($charset) && !empty($charset))
		{
			$this->var['charset'] = $charset;
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Method : set_css
	 */
	public function set_css($name)
	{
		if(is_string($name) AND !empty($name) AND file_exists('./assets/css/' . $name . '.css'))
		{
			$this->var['css'][] = css_url($name);
			return true;
		}
		return false;
	}

	/**
	 * Method : set_js
	 */
	public function set_js($name)
	{
		if(is_string($name) AND !empty($name) AND file_exists('./assets/js/' . $name . '.js'))
		{
			$this->var['js'][] = js_url($name);
			return true;
		}
		return false;
	}
}

/* End of file layout.php */
/* Location : ./application/librairies/layout.php */