<?php

namespace WPDiscourse\Shortcodes;

class DiscourseLinkShortcode {

	/**
	 * An instance of the DiscourseLink class.
	 *
	 * @access protected
	 * @var DiscourseLink
	 */
	protected $discourse_link;

	/**
	 * DiscourseLinkShortcode constructor.
	 *
	 * @param DiscourseLink $discourse_link An instance of the DiscourseLink class.
	 */
	public function __construct( $discourse_link ) {
		$this->discourse_link = $discourse_link;

		add_shortcode( 'discourse_link', array( $this, 'discourse_link' ) );
	}

	/**
	 * @param array $args The shortcode attributes.
	 *
	 * @return string
	 */
	public function discourse_link( $args ) {

		return $this->discourse_link->get_discourse_link( $args );
	}
}
