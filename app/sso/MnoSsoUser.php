<?php

/**
 * Configure App specific behavior for 
 * Maestrano SSO User matching and creation
 *
 * Summary of attributes available:
 * ================================
 * Group related information
 * --------------------------
 *  -> group_uid: universal id of group the user is logging in via
 *  -> group_role: role of user within the above group
 *
 * User identification:
 * --------------------
 * You should set MnoSettings#user_creation_mode to 'real' or 'virtual'
 * depending on whether your users can be part of multiple groups or not
 * and then use the getUid() and getEmail() methods.
 * Use the attributes below only if you know what you're doing
 *  -> uid: user maestrano id
 *  -> virtual_uid: truly unique maestrano uid across users and groups
 *  -> email: email address of the user
 *  -> virtual_email: truly unique maestrano email address across users and groups
 *
 *
 * User metadata
 * --------------
 *  -> name: user first name
 *  -> surname: user last name
 *  -> country: user country in alpha2 format
 *  -> company_name: user company name (not a mandatory field - might be blank)
 */
class MnoSsoUser extends MnoSsoBaseUser
{
  
  /**
   * Extend constructor to inialize app specific objects
   *
   * @param OneLogin_Saml_Response $saml_response
   *   A SamlResponse object from Maestrano containing details
   *   about the user being authenticated
   */
  public function __construct(OneLogin_Saml_Response $saml_response, $opts = array())
  {
    // Call Parent
    parent::__construct($saml_response);
  }
  
  
  /**
   * Sign the user in the application. 
   * Parent method deals with putting the mno_uid, 
   * mno_session and mno_session_recheck in session.
   *
   * @return boolean whether the user was successfully set in session or not
   */
  protected function setInSession()
  {
    // Log the user in
    // You can access the php session via $this->session
    
    return null;
  }
  
  
  /**
   * Used by createLocalUserOrDenyAccess to create a local user 
   * based on the sso user.
   * If the method returns null then access is denied
   *
   * @return the ID of the user created, null otherwise
   */
  protected function createLocalUser()
  {
    // Invoke your user model or perform some database query to create
    // a new user
    
    return null;
  }
  
  /**
   * Get the ID of a local user via Maestrano UID lookup
   *
   * @return a user ID if found, null otherwise
   */
  protected function getLocalIdByUid()
  {
    // Perform some database query to retrieve the id
    
    return null;
  }
  
  /**
   * Set all 'soft' details on the user (like name, surname, email)
   * Implementing this method is optional.
   *
   * @return boolean whether the user was synced or not
   */
   protected function syncLocalDetails()
   {
     // Optional: update your local existing user with the latest maestrano
     // user details
     
     return null;
   }
  
  /**
   * Set the Maestrano UID on a local user via id lookup
   *
   * @return a user ID if found, null otherwise
   */
  protected function setLocalUid()
  {
    // Invoke your model or a database connection to update the mno_uid on this user
    
    return null;
  }
}