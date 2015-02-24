<?php
/**
 * AuthenticationRepositoryInterface
 * 
 * @author Andr� Aleixo <ajaaleixo@gmail.com>
 */
namespace Connectors\Authentication;

use Alpha\Connector\ConnectorInterface;

/**
 * Describes an interface for Authentication Connectors.
 */
interface AuthenticationRepositoryInterface extends ConnectorInterface
{
    /**
     * Authenticates an entity.
     * 
     * @param string $entity   The entity.
     * @param string $password The password.
     * 
     * @return boolean
     */
    public function authenticate($entity, $password);
    
    /**
     * Retrieve an entity to authenticate.
     * 
     * @param string $entityName The entity name.
     * 
     * @return mixed
     */
    public function retrieveEntity($entityName);
}