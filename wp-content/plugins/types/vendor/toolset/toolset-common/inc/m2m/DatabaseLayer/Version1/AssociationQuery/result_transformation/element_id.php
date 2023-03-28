<?php

namespace OTGS\Toolset\Common\Relationships\DatabaseLayer\Version1;

use IToolset_Relationship_Role;
use OTGS\Toolset\Common\Relationships\API\RelationshipRole;

/**
 * Transform association query results into element IDs of chosen role.
 *
 * @since 2.5.8
 */
class Toolset_Association_Query_Result_Transformation_Element_Id
	implements IToolset_Association_Query_Result_Transformation {


	/** @var RelationshipRole */
	private $role;


	/**
	 * OTGS\Toolset\Common\Relationships\DatabaseLayer\Version1\Toolset_Association_Query_Result_Transformation_Element_Id
	 * constructor.
	 *
	 * @param RelationshipRole $role
	 */
	public function __construct( RelationshipRole $role ) {
		$this->role = $role;
	}


	/**
	 * @inheritdoc
	 *
	 * @param object $database_row
	 *
	 * @return int
	 */
	public function transform(
		$database_row, IToolset_Association_Query_Element_Selector $element_selector
	) {
		$column_name = $element_selector->get_element_id_alias( $this->role );

		return (int) $database_row->$column_name;
	}


	/**
	 * Talk to the element selector so that it includes only elements that are actually needed.
	 *
	 * @param IToolset_Association_Query_Element_Selector $element_selector
	 *
	 * @since 2.5.10
	 */
	public function request_element_selection( IToolset_Association_Query_Element_Selector $element_selector ) {
		// We need only one element here. Also, we explicitly *don't* want to include association ID
		// so that we can filter out duplicate IDs by the DISTINCT query.
		$element_selector->request_element_in_results( $this->role );
		$element_selector->request_distinct_query();
	}


	/**
	 * @inheritDoc
	 * @return IToolset_Relationship_Role[]
	 */
	public function get_maximum_requested_roles() {
		return [ $this->role ];
	}
}
