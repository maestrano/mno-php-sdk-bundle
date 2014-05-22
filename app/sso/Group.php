<?php

/**
 * Configure App specific behavior for 
 * Maestrano SSO Group matching and creation
 *
 * Summary of attributes available:
 * ================================
 * Group related information
 * --------------------------
 *  -> uid: universal id of group
 *  -> free_trial_end_at: end of free trial (only applicable if you accept free trials)
 *  -> country: (user) country in alpha2 format
 *  -> company_name: (user) company name (not a mandatory field - might be blank)
 */
class Maestrano_Sso_Group extends Maestrano_Sso_BaseGroup
{
  
  /**
   * Extend constructor to inialize app specific objects
   *
   * @param Maestrano_Saml_Response $saml_response
   *   A SamlResponse object from Maestrano containing details
   *   about the user being authenticated
   */
  public function __construct(Maestrano_Saml_Response $saml_response, $opts = array())
  {
    // Call Parent
    parent::__construct($saml_response);
    
  }
  
  /**
   * Get the ID of a local group via Maestrano UID lookup
   * This method must be re-implemented in Maestrano_Sso_Group
   * (raise an error otherwise)
   *
   * @return a group ID if found, null otherwise
   */
  protected function getLocalIdByUid()
  {
  }
  
  /**
   * Create a local group based on the sso user
   * This method must be re-implemented in Maestrano_Sso_Group
   * (raise an error otherwise)
   *
   * @return a group ID if created, null otherwise
   */
  protected function createLocalGroup()
  {
  }
  
  /**
   * Add a user to an existing group if the user is not
   * part of it already
   */
  public function addUser($sso_user,$user_role) 
  {
    
  }
  
  
  /**
   * Set the Maestrano UID on a local group
   * This method must be re-implemented in Maestrano_Sso_Group
   * (raise an error otherwise)
   *
   * @return boolean
   */
  protected function setLocalUid()
  {
  }
  
}