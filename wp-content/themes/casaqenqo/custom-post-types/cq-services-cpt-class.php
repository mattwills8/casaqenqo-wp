<?php

class CQ_Services_CPT {

	/**
	 * Holds the services
	 *
	 * @var Object
	 */
	protected $services;

	/**
	 * Holds the labels needed to build the services custom post type.
	 *
	 * @var array
	 */
	protected $services_labels = array(
			'singular'       => 'Service',
			'plural'         => 'Services',
			'slug'           => 'service',
			'post_type_name' => 'service',
	);

	/**
	 * Holds options for the services custom post type
	 *
	 * @var array
	 */
	protected $services_options = array(
		'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail'
		),
		'show_in_rest'	=> true
	);


	/**
	 * registers the custom post type, taxonomy, and meta boxes needed for the services cpt.
	 */
	function __construct() {
		$this->services = new PremiseCPT( $this->services_labels , $this->services_options );

		pwp_add_metabox(
			'Price',
			$this->services_labels['post_type_name'],
			array(
				array(
					'type'    => 'number',
					'context' => 'post',
					'name'    => 'service_price',
					'label'   => 'Service Price (USD)',
				),
			),
			'service_price'
		);

		pwp_add_metabox(
			'Duration',
			$this->services_labels['post_type_name'],
			array(
				array(
					'type'    => 'text',
					'context' => 'post',
					'name'    => 'service_duration',
					'label'   => 'Service Duration',
				),
			),
			'service_duration'
		);
	}
}


?>
