<?php

class __PAGINATION {
	private $_registry;
	var $siteUrl				= '';
	var $currentPageParam	= 'page';
	var $totalRows			=  0; 
	var $perPage			= 10;
	var $numLinks			=  2;
	var $currentPage			=  1;
	var $firstLink				= '&lsaquo; First';
	var $nexLlink				= '&gt;';
	var $prevLink			= '&lt;';
	var $lastLink				= 'Last &rsaquo;';
	var $full_tag_open		= '<div class="pagination"><ul>';
	var $full_tag_close		= '</ul></div>';
	var $first_tag_open		= '<li>';
	var $first_tag_close		= '</li>';
	var $last_tag_open		= '<li>';
	var $last_tag_close		= '</li>';
	var $first_url				= ''; // Alternative URL for the First Page.
	var $cur_tag_open		= '<li><span><strong>';
	var $cur_tag_close		= '</strong></span></li>';
	var $next_tag_open		= '<li>';
	var $next_tag_close		= '</li>';
	var $prev_tag_open		= '<li>';
	var $prev_tag_close		= '</li>';
	var $num_tag_open		= '<li>';
	var $num_tag_close		= '</li>';
	var $page_query_string	= TRUE;
	var $display_pages		= TRUE;
	var $anchor_class		= '';
	var $start;
	var $end;
	var $max_page_show = 10;
	var $hide_start = null;
	var $hide_end = null;
	var $hide = array();

	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 */
	public function __construct($params = array())
	{
		if (count($params) > 0)
		{
			$this->initialize($params);
		}

		if ($this->anchor_class != '')
		{
			$this->anchor_class = 'class="'.$this->anchor_class.'" ';
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}
		}
		
		$this->run();
	}

	public function run() {
		// Calculate the total number of pages
		$this->num_pages = ceil($this->totalRows/$this->perPage);

		$this->currentPage = intval($_GET[$this->currentPageParam]);
		
		// Set current page to 1 if using page numbers instead of offset
		if ($this->currentPage == 0) {
			$this->currentPage = 1;
		}

		$this->numLinks = (int) $this->numLinks;

		if ($this->numLinks < 1) {
			trigger_error('Your number of links must be a positive number.');
		}
		
		// Error on _GET, set it default
		if ( !is_numeric($this->currentPage)) {
			$this->currentPage = 1;
		}
		
		if ($this->currentPage > $this->num_pages) {
			$this->currentPage = $this->num_pages;
		}
		
		$this->uri_page_number = $this->currentPage;
		
		$this->start = ($this->currentPage - 1) * $this->perPage;

		if ($this->page_query_string === TRUE) {
			$this->siteUrl = rtrim($this->siteUrl);
			if (strpos($this->siteUrl, '?') !== FALSE) {
				 $this->siteUrl .= '&amp;' . $this->currentPageParam . '=';
			} else {
				$this->siteUrl .= '?' . $this->currentPageParam . '=';
			}
		} else {
			$this->siteUrl = rtrim($this->siteUrl, '/') .'/';
		}
		
		// An mot so trang neu co qua nhieu trang
		if ($this->num_pages > $this->max_page_show) {
			$node = round($this->max_page_show / 2); 
			if (($this->currentPage - $node) > 3) {
				$this->hide_start[0] = 4;
				$this->hide_end[0] = ($this->currentPage - $node);
				for($i = 4; $i <= ($this->currentPage - $node); $i++) {
					$this->hide[] = $i;
				}
			}
			if (($this->currentPage + $node) < ($this->num_pages - 3)) {
				$this->hide_start[1] = ($this->currentPage + $node);
				$this->hide_end[1] = $this->num_pages - 3;
				for($i = ($this->currentPage + $node); $i <= ($this->num_pages - 3); $i++) {
					$this->hide[] = $i;
				}
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Generate the pagination links
	 *
	 * @access	public
	 * @return	string
	 */
	function create_links() {
		if ($this->totalRows == 0 OR $this->perPage == 0) {
			return '';
		}
		
		if ($this->num_pages == 1) {
			return '';
		}
		
		$output = '';

		// Render the "First" link
		if  ($this->firstLink !== FALSE AND $this->currentPage > 2) {
			$first_url = $this->siteUrl . '1';
			$output .= $this->first_tag_open.'<a '.$this->anchor_class.'href="'.$first_url.'">'.$this->firstLink.'</a>'.$this->first_tag_close;
		}

		// Render the "previous" link
		if  ($this->prevLink !== FALSE AND $this->currentPage > 1) {
			$i = $this->currentPage - 1;
			if ($i > 0) {
				$output .= $this->prev_tag_open.'<a '.$this->anchor_class.'href="'. $this->siteUrl . $i .'">'.$this->prevLink.'</a>'.$this->prev_tag_close;
			} else {
				$output .= $this->prev_tag_open . $this->prevLink . $this->prev_tag_close;
			}
		}

		// Render the pages
		if ($this->display_pages !== FALSE) {
			// Write the digit links
			if ($this->hide_start != NULL AND $this->hide_start != NULL) {
				if (isset($this->hide_start[0])) {
					for ($loop = 1; $loop <= $this->hide_start[0]; $loop++) {
						if ($this->currentPage == $loop) {
							$output .= $this->cur_tag_open . $loop . $this->cur_tag_close; // Current page
						} else {
							$output .= $this->num_tag_open . '<a '.$this->anchor_class . 'href="' . $this->siteUrl . $loop .'">'.$loop.'</a>'.$this->num_tag_close;
						}
					}
					$output .= $this->cur_tag_open . '...' . $this->cur_tag_close;
				}
				if (isset($this->hide_start[1])) {
					$end = $this->hide_start[1];
				} else {
					$end = $this->num_pages;
				}
				for ($loop = ($this->hide_end[0] + 1); $loop <= $end; $loop++) {
					if ($this->currentPage == $loop) {
						$output .= $this->cur_tag_open . $loop . $this->cur_tag_close; // Current page
					} else {
						$output .= $this->num_tag_open . '<a '.$this->anchor_class . 'href="' . $this->siteUrl . $loop .'">'.$loop.'</a>'.$this->num_tag_close;
					}
				}
				if (isset($this->hide_start[1])) {
					$output .= $this->cur_tag_open . '...' . $this->cur_tag_close; 
					for ($loop = $this->hide_end[1]; $loop <= $this->num_pages; $loop++) {
						if ($this->currentPage == $loop) {
							$output .= $this->cur_tag_open . $loop . $this->cur_tag_close; // Current page
						} else {
							$output .= $this->num_tag_open . '<a '.$this->anchor_class . 'href="' . $this->siteUrl . $loop .'">'.$loop.'</a>'.$this->num_tag_close;
						}
					}
				}
			} else {
				for ($loop = 1; $loop <= $this->num_pages; $loop++) {
					if ($this->currentPage == $loop) {
							$output .= $this->cur_tag_open . $loop . $this->cur_tag_close; // Current page
					} else {
						$output .= $this->num_tag_open . '<a '.$this->anchor_class . 'href="' . $this->siteUrl . $loop .'">'.$loop.'</a>'.$this->num_tag_close;
					}
				}
			}
		}

		// Render the "next" link
		if ($this->nexLlink !== FALSE AND $this->currentPage < $this->num_pages) {
			$i = $this->currentPage + 1;
			$output .= $this->next_tag_open.'<a '.$this->anchor_class.'href="'.$this->siteUrl. $i .'">'.$this->nexLlink.'</a>'.$this->next_tag_close;
		}

		// Render the "Last" link
		if ($this->lastLink !== FALSE AND ($this->currentPage < ($this->num_pages - 1))) {
			$i = $this->num_pages;
			$output .= $this->last_tag_open.'<a '.$this->anchor_class.'href="'.$this->siteUrl . $i .'">'.$this->lastLink.'</a>'.$this->last_tag_close;
		}

		// Kill double slashes.  Note: Sometimes we can end up with a double slash
		// in the penultimate link so we'll kill all double slashes.
		$output = preg_replace("#([^:])//+#", "\\1/", $output);

		// Add the wrapper HTML if exists
		$output = $this->full_tag_open.$output.$this->full_tag_close;

		return $output;
	}
}
