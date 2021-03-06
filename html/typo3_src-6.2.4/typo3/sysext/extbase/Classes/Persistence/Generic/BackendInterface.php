<?php
namespace TYPO3\CMS\Extbase\Persistence\Generic;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
/**
 * A persistence backend interface
 */
interface BackendInterface {

	/**
	 * Set a PersistenceManager instance.
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface $persistenceManager
	 * @return void
	 */
	public function setPersistenceManager(\TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface $persistenceManager);

	/**
	 * Sets the aggregate root objects
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $objects
	 * @return void
	 */
	public function setAggregateRootObjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $objects);

	/**
	 * Sets the deleted entities
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $entities
	 * @return void
	 * @api
	 */
	public function setDeletedEntities(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $entities);

	/**
	 * Sets the changed objects
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $entities
	 * @return void
	 */
	public function setChangedEntities(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $entities);

	/**
	 * Commits the current persistence session
	 *
	 * @return void
	 */
	public function commit();

	// TODO refactor towards being closer to the Flow backend interface again

	/**
	 * Returns the (internal) identifier for the object, if it is known to the
	 * backend. Otherwise NULL is returned.
	 *
	 * @param object $object
	 * @return string The identifier for the object if it is known, or NULL
	 */
	public function getIdentifierByObject($object);

	/**
	 * Returns the object with the (internal) identifier, if it is known to the
	 * backend. Otherwise NULL is returned.
	 *
	 * @param string $identifier
	 * @param string $className
	 * @return object The object for the identifier if it is known, or NULL
	 */
	public function getObjectByIdentifier($identifier, $className);

	/**
	 * Checks if the given object has ever been persisted.
	 *
	 * @param object $object The object to check
	 * @return boolean TRUE if the object is new, FALSE if the object exists in the repository
	 */
	public function isNewObject($object);

	/**
	 * Returns the number of records matching the query.
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
	 * @return integer
	 * @api
	 */
	public function getObjectCountByQuery(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query);

	/**
	 * Returns the object data matching the $query.
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
	 * @return array
	 * @api
	 */
	public function getObjectDataByQuery(\TYPO3\CMS\Extbase\Persistence\QueryInterface $query);
}
